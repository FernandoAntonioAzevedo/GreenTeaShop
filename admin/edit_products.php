<?php
include 'components/connection.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location: login.php');
    exit;
}

// Obter ID do produto a ser editado
if (!isset($_GET['id'])) {
    header('location: dashboard.php');
    exit;
}

$product_id = $_GET['id'];

// Buscar produto atual
$select_product = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
$select_product->execute([$product_id]);

if ($select_product->rowCount() === 0) {
    header('location: dashboard.php');
    exit;
}

$product = $select_product->fetch(PDO::FETCH_ASSOC);

// Atualizar produto se enviado
if (isset($_POST['update'])) {
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $content = trim($_POST['content']);

    // Atualizar imagem se enviada
    $image = $product['image'];
    if (!empty($_FILES['image']['name'])) {
        $new_image = basename($_FILES['image']['name']);
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_ext = strtolower(pathinfo($new_image, PATHINFO_EXTENSION));
        $allowed_ext = ['jpg', 'jpeg', 'png', 'webp'];

        if (in_array($image_ext, $allowed_ext)) {
            $unique_image = uniqid('img_', true) . '.' . $image_ext;
            $image_folder = '../image/' . $unique_image;
            move_uploaded_file($image_tmp_name, $image_folder);
            $image = $unique_image;
        }
    }

    $update_product = $conn->prepare("UPDATE `products` SET name = ?, price = ?, image = ?, product_detail = ? WHERE id = ?");
    $update_product->execute([$name, $price, $image, $content, $product_id]);
    $success_msg[] = 'Produto atualizado com sucesso!';
    header("location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="admin_style.css?v=<?php echo time(); ?>">
</head>
<body>
<?php include '../admin/components/admin_header.php'; ?>
<div class="main">
    <div class="banner">
        <h1>Editar Produto</h1>
    </div>
    <section class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="input-field">
                <label>Nome do Produto</label>
                <input type="text" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>
            </div>
            <div class="input-field">
                <label>Preço</label>
                <input type="number" name="price" value="<?= htmlspecialchars($product['price']) ?>" required>
            </div>
            <div class="input-field">
                <label>Detalhes</label>
                <textarea name="content" required><?= htmlspecialchars($product['product_detail']) ?></textarea>
            </div>
            <div class="input-field">
                <label>Imagem Atual</label><br>
                <img src="../image/<?= htmlspecialchars($product['image']) ?>" alt="Imagem do Produto" width="150">
            </div>
            <div class="input-field">
                <label>Nova Imagem (opcional)</label>
                <input type="file" name="image" accept="image/*">
            </div>
            <button type="submit" name="update" class="btn">Atualizar Produto</button>
        </form>
    </section>
</div>
<script src="../admin/js/admin-header.js"></script>
</body>
</html>
