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
    <title>Admin - Dashboard Page</title>

    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin_style.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php include '../admin/components/admin_header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>Painel de Controle</h1>
        </div>
        <div class="title2">
            <a href="dasboard.php">home / </a><span>Painel de controle</span>
        </div>
        <section class="dashboard">
            <h1 class="heading">painel de controle</h1>
            <div class="box-container">
                <div class="box">
                    <h3>Seja bem vindo(a)!</h3>
                    <p><?= $fetch_profile['name']; ?></p>
                    <a href="" class="btn">Perfil</a>
                </div>
                <div class="box">
                    <?php
                        $select_product = $conn->prepare("SELECT * FROM `products`");
                        $select_product->execute();
                        $num_of_products = $select_product->rowCount();
                    ?>
                    <h3><?= $num_of_products; ?></h3>
                    <p>Produtos adicionados</p>
                    <a href="add_product.php" class="btn">add novos produtos</a>
                </div>
                <div class="box">
                    <?php
                        $select_active_product = $conn->prepare("SELECT * FROM `products` WHERE
                        status = ?");
                        $select_active_product->execute(['active']);
                        $num_of_active_products = $select_active_product->rowCount();
                    ?>
                    <h3><?= $num_of_active_products; ?></h3>
                    <p>total de produtos adicionados</p>
                    <a href="view_product.php" class="btn">visualizar adicionados</a>
                </div>
                <div class="box">
                    <?php
                        $select_deactive_product = $conn->prepare("SELECT * FROM `products` WHERE
                        status = ?");
                        $select_deactive_product->execute(['deactive']);
                        $num_of_deactive_products = $select_deactive_product->rowCount();
                    ?>
                    <h3><?= $num_of_deactive_products; ?></h3>
                    <p>total de produtos removidos</p>
                    <a href="view_product.php" class="btn">visualizar removidos</a>
                </div>
                <div class="box">
                    <?php
                        $select_users = $conn->prepare("SELECT * FROM `users`");
                        $select_users->execute();
                        $num_of_users = $select_users->rowCount();
                    ?>
                    <h3><?= $num_of_users; ?></h3>
                    <p>Usuários registrados</p>
                    <a href="acconts.php" class="btn">visualizar usuários</a>
                </div>
                <div class="box">
                    <?php
                        $select_admin = $conn->prepare("SELECT * FROM `admin`");
                        $select_admin->execute();
                        $num_of_admin = $select_admin->rowCount();
                    ?>
                    <h3><?= $num_of_admin; ?></h3>
                    <p>Administradores registrados</p>
                    <a href="acconts.php" class="btn">visualizar admins</a>
                </div>
                <div class="box">
                    <?php
                        $select_message = $conn->prepare("SELECT * FROM `message`");
                        $select_message->execute();
                        $num_of_message = $select_message->rowCount();
                    ?>
                    <h3><?= $num_of_message; ?></h3>
                    <p>mensagens não lidas</p>
                    <a href="message.php" class="btn">visualizar não lidas</a>
                </div>
                <div class="box">
                    <?php
                        $select_orders = $conn->prepare("SELECT * FROM `orders`");
                        $select_orders->execute();
                        $num_of_orders = $select_orders->rowCount();
                    ?>
                    <h3><?= $num_of_orders; ?></h3>
                    <p>total de pedidos realizados</p>
                    <a href="order.php" class="btn">visualizar pedidos</a>
                </div>
                <div class="box">
                    <?php
                        $select_confirm_orders = $conn->prepare("SELECT * FROM `orders` WHERE 
                        status = ?");
                        $select_confirm_orders->execute(['in progress']);
                        $num_of_confirm_orders = $select_confirm_orders->rowCount();
                    ?>
                    <h3><?= $num_of_confirm_orders; ?></h3>
                    <p>total de pedidos confirmados</p>
                    <a href="order.php" class="btn">visualizar pedidos</a>
                </div>
                <div class="box">
                    <?php
                        $select_canceled_orders = $conn->prepare("SELECT * FROM `orders` WHERE 
                        status = ?");
                        $select_canceled_orders->execute(['canceled']);
                        $num_of_canceled_orders = $select_canceled_orders->rowCount();
                    ?>
                    <h3><?= $num_of_canceled_orders; ?></h3>
                    <p>total de pedidos cancelados</p>
                    <a href="order.php" class="btn">visualizar pedidos</a>
                </div>
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
