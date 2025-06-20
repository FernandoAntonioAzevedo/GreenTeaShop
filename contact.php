<?php  
    include 'components/connection.php';
?>

<style type="text/css">
    <?php include 'css/styles.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Green Tea - Contatos</title>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        
        <div class="banner">
            <h1>Contatos</h1>
        </div>
        <div class="title2">
            <a href="home.php">Início </a><span>Contatos</span>
        </div>
         
      <?php include 'components/footer.php'; ?>        
    </div>
    <script src="https://cdnjs.cloudfare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>    