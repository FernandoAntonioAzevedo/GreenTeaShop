<?php
    include 'components/connection.php';

    session_start();

    $admin_id = $_SESSION['admin_id'];

    if (!isset($admin_id)) {
        header('location: login.php');
    }


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - View Products Page</title>

    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin_style.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php include '../admin/components/admin_header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>visualizar produtos</h1>
        </div>
        <div class="title2">
            <a href="dasboard.php">Painel de controle / </a><span>visualizar produtos</span>
        </div>
        <section class="show-post">
            <h1 class="heading">Gerenciador</h1>
            <div class="box-container">
                <?php
                    $select_products = $conn->prepare("SELECT * FROM `products`");
                    $select_products->execute();

                    if ($select_products->rowCount() > 0) {
                        while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) 
                        {
                    
                ?>
                <form action="" method="post" class="box">
                    <input type="hidden" name="product_id" value="<?= $fetch_products['id']; 
                        ?>">
                    <?php if ($fetch_products['image'] != ''){ ?>
                        <img src="../image/<?= $fetch_products['image']; ?>" class="image">
                    <?php } ?>
                    <div class="status" 
                        style="color: <?php if ($fetch_products['status']=='
                        active'){echo "green";} else { echo "red";} ?>;">
                        <?= $fetch_products['status']; ?></div>
                    <div class="price">R$<?= $fetch_products['price']; ?>/-</div>
                    <div class="title"><?= $fetch_products['name']; ?></div>
                    <div class="flex-btn">
                        <a href="edit_product.php?id=<?= $fetch_products['id']; ?>" 
                        class="btn">Editar</a>
                        <button type="submit" name="delete" class="btn" onclick="return
                        confirm('delete this product');">Excluir</button>
                        <a href="read_product.php?post_id=<?= $fetch_products['id']; ?>" 
                        class="btn">Visualizar </a>
                    </div>
                          
                </form>
                <?php 
                        }
                    }else {
                        echo '
                        <div class="empty">
                            <p>no product added yet! <br> <a href="add_products.php"
                                style="margin-top: 1.5rem;">add produto</a></p>
                        </div>

                        ';

                    }
                ?>
                
            </div>           
        </section>
    </div>

<!-- SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="../admin/js/admin-header.js"></script>

<!-- Alertas PHP -->
<?php include '../admin/components/alert.php'; ?>

</body>
</html>
