<?php
include 'components/connection.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location: login.php');
    exit;
}

// Adiciona produto ao banco de dados
if (isset($_POST['publish'])) {
    $id = unique_id();

    $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
    $price = htmlspecialchars(trim($_POST['price']), ENT_QUOTES, 'UTF-8');
    $content = htmlspecialchars(trim($_POST['content']), ENT_QUOTES, 'UTF-8');

    $status = 'active';

    $image = $_FILES['image']['name'];
    $image = htmlspecialchars(trim($image), ENT_QUOTES, 'UTF-8');
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../image/' . $image;

    $select_image = $conn->prepare("SELECT * FROM `products` WHERE image = ?");
    $select_image->execute([$image]);

    if (isset($image)) {
        if ($select_image->rowCount() > 0) {
            $warning_msg[] = 'image name repeated';
        } elseif ($image_size > 2000000) {
            $warning_msg[] = 'image size is too large';
        } else {
            move_uploaded_file($image_tmp_name, $image_folder);
        }
    } else {
        $image = '';
    }

    if ($select_image->rowCount() > 0 && $image != '') {
        $warning_msg[] = 'please rename your image';
    } else {
        $insert_product = $conn->prepare("INSERT INTO `products`(id, name, price, image, 
        product_detail, status) VALUES (?, ?, ?, ?, ?, ?)");
        $insert_product->execute([$id, $name, $price, $image, $content, $status]);
        $success_msg[] = 'produto inserido com sucesso!';
    }
}

// Salvar produto ao banco de dados como rascunho
if (isset($_POST['draft'])) {
    $id = unique_id();

    $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
    $price = htmlspecialchars(trim($_POST['price']), ENT_QUOTES, 'UTF-8');
    $content = htmlspecialchars(trim($_POST['content']), ENT_QUOTES, 'UTF-8');

    $status = 'deactive';

    $image = $_FILES['image']['name'];
    $image = htmlspecialchars(trim($image), ENT_QUOTES, 'UTF-8');
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../image/' . $image;

    $select_image = $conn->prepare("SELECT * FROM `products` WHERE image = ?");
    $select_image->execute([$image]);

    if (isset($image)) {
        if ($select_image->rowCount() > 0) {
            $warning_msg[] = 'image name repeated';
        } elseif ($image_size > 2000000) {
            $warning_msg[] = 'image size is too large';
        } else {
            move_uploaded_file($image_tmp_name, $image_folder);
        }
    } else {
        $image = '';
    }

    if ($select_image->rowCount() > 0 && $image != '') {
        $warning_msg[] = 'please rename your image';
    } else {
        $insert_product = $conn->prepare("INSERT INTO `products`(id, name, price, image, 
        product_detail, status) VALUES (?, ?, ?, ?, ?, ?)");
        $insert_product->execute([$id, $name, $price, $image, $content, $status]);
        $success_msg[] = 'produto salvo em rascunho com sucesso!';
    }
}

?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Product Page</title>

    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin_style.css?v=<?php echo time(); ?>">
</head>
<body>
<?php include '../admin/components/admin_header.php'; ?>

<div class="main">
    <div class="banner">
        <h1>Adicionar novo Produto</h1>
    </div>
    <div class="title2">
        <a href="dashboard.php">Painel de controle / </a><span>Add Produtos</span>
    </div>

    <section class="form-container">
    <h1 class="heading">Gerenciador</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="input-field">
            <label>Nome produto <sup>*</sup></label>
            <input type="text" name="name" maxlength="100" 
            required placeholder="adicione nome produto">
        </div>

        <div class="input-field">
            <label>preço produto  <sup>*</sup></label>            
            <input type="number" name="price" maxlength="100" 
            required placeholder="adicione preço produto">
        </div>

        <div class="input-field">
            <label>detalhes produto <sup>*</sup></label>
            <textarea name="content" required maxlength="10000"
            placeholder="Escreva detalhes do produto..."></textarea>
        </div>

        <div class="input-field">
            <label>imagens produto <sup>*</sup></label>
            <input type="file" name="image" accept="image/*" required>
        </div>

        <div class="flex-btn">
            <button type="submit" name="publish" class="btn">Publicar produto</button>
            <button type="submit" name="draft" class="btn">Salvar como rascunho</button>
        </div>
    </form>
</section>

    
</div>

<!-- SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="../admin/js/admin-header.js"></script>

<!-- Alertas PHP -->
<?php include '../admin/components/alert.php'; ?>
</body>
</html>
