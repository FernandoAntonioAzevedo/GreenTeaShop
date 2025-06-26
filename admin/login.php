<?php
include 'components/connection.php';

session_start();

if (isset($_POST['login'])) {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);

    $select_admin = $conn->prepare("SELECT * FROM `admin` WHERE email = ?");
    $select_admin->execute([$email]);

    if ($select_admin->rowCount() > 0) {
        $admin = $select_admin->fetch(PDO::FETCH_ASSOC);

        // Comparação direta (sem hash)
        if ($password === $admin['password']) {
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_name'] = $admin['name'];
            $_SESSION['admin_email'] = $admin['email'];

            $success_msg[] = 'Login realizado com sucesso!';
            header('location: dashboard.php');
            exit;
        } else {
            $warning_msg[] = 'Senha incorreta.';
        }
    } else {
        $warning_msg[] = 'Email ou senha inválidos.';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin_style.css?v=<?php echo time(); ?>">
</head>
<body>

<div class="main">
    <section>
        <div class="form-container" id="admin_login">
            <form action="" method="post">
                <h3>Entrar agora</h3>

                <div class="input-field">
                    <label>seu email <sup>*</sup></label>
                    <input type="email" id="email" name="email" maxlength="50" required
                           placeholder="insira seu email"
                           oninput="this.value = this.value.replace(/\/+/g, '')">
                </div>

                <div class="input-field">
                    <label>sua senha <sup>*</sup></label>
                    <input type="password" id="password" name="password" maxlength="20" required
                           placeholder="insira sua senha"
                           oninput="this.value = this.value.replace(/\/+/g, '')">
                </div>

                <button type="submit" name="login" class="btn">Entrar</button>
                <p>não possui uma conta? <a href="register.php">Registrar</a></p>
            </form>
        </div>
    </section>
</div>

<!-- SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="../js/script.js"></script>

<!-- Alertas PHP -->
<?php include '../admin/components/alert.php'; ?>

</body>
</html>
