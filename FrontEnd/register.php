<?php
    include 'components/connection.php';
    session_start();

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    }else {
        $user_id = '';
    }

    //Registrar usuário
    if (isset($_POST['submit'])) {
        $id = unique_id();
        $name = $_POST['name'];
        $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
        $email = $_POST['email'];
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $pass = $_POST['pass'];
        $pass = htmlspecialchars(trim($_POST['pass']), ENT_QUOTES, 'UTF-8');
        $cpass = $_POST['cpass'];
        $cpass = htmlspecialchars(trim($_POST['cpass']), ENT_QUOTES, 'UTF-8');

        $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
        $select_user->execute([$email]);
        $row = $select_user->fetch(PDO::FETCH_ASSOC);

        if ($select_user->rowCount() > 0) {
            $message[] = 'email já existe';
            echo 'email já existe';
        }else {
            if ($pass != $cpass) {
                $message[] = 'confirme sua senha';
                echo 'confirme sua senha';
            }else {
                $insert_user = $conn->prepare("INSERT INTO `users`(id,name,email,password) VALUES(?,?,?,?)");
                $insert_user->execute([$id,$name,$email,$pass]);
                $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
                $select_user->execute([$email, $pass]);
                $row = $select_user->fetch(PDO::FETCH_ASSOC);
                if ($select_user->rowCount() > 0) {
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['user_name'] = $row['name'];
                    $_SESSION['user_email'] = $row['email'];
                }
            }
        }
    }
?>

<style type="text/css">
    <?php include 'css/styles.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Tea - Registrar agora</title>
</head>
<body>
    <div class="main-container">
        <section class="form-container">
            <div class="title">
                <a href="home.php">
                  <img src="img/logo.jpg" alt="">
                </a>
                <h1>Registrar agora</h1>
                <p>
                    Para ter acesso a função de compra na loja é necessário efetuar seu cadastro.
                </p>
            </div>
            <form action="" method="post">
                 <div class="input-field">
                    <p>Seu nome *</p>
                    <input type="text" name="name" required placeholder="Insira seu nome" maxlength="50">                    
                 </div>
                 <div class="input-field">
                    <p>Seu e-mail *</p>
                    <input type="email" name="email" required placeholder="Insira seu e-mail" maxlength="50" 
                    oninput="this.value = this.value.replace(/\s/g, '')">                    
                 </div>
                 <div class="input-field">
                    <p>Sua senha *</p>
                    <input type="password" name="pass" required placeholder="Insira sua senha" maxlength="50"
                    oninput="this.value = this.value.replace(/\s/g, '')">                    
                 </div>
                 <div class="input-field">
                    <p>Confirme sua senha *</p>
                    <input type="password" name="cpass" required placeholder="Confirme sua senha" maxlength="50"
                    oninput="this.value = this.value.replace(/\s/g, '')">                    
                 </div>
                 <input type="submit" name="submit" value="registrar agora" class="btn">
                 <p>já possui uma conta? <a href="login.php">Entrar agora</a></p>
            </form>
        </section>
    </div>
</body>
</html>