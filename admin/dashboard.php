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
        <section>
            
        </section>
    </div>

<!-- SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="../js/script.js"></script>

<!-- Alertas PHP -->
<?php include '../admin/components/alert.php'; ?>

</body>
</html>
