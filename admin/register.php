<?php
include 'components/connection.php';

if (isset($_POST['register'])) {

    $id = unique_id();

    $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    $pass_raw = trim($_POST['password']);
    $cpass_raw = trim($_POST['cpassword']);
    $pass = $pass_raw; // Sem criptografia

    if ($pass_raw !== $cpass_raw) {
        $warning_msg[] = 'Confirmação de senha incorreta.';
    } else {
        if (
            isset($_FILES['image']) &&
            is_array($_FILES['image']) &&
            $_FILES['image']['error'] === UPLOAD_ERR_OK
        ) {
            $image_name = basename($_FILES['image']['name']);
            $image_tmp_name = $_FILES['image']['tmp_name'];
            $image_size = $_FILES['image']['size'];
            $image_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
            $allowed_ext = ['jpg', 'jpeg', 'png', 'webp'];
            $max_size = 2 * 1024 * 1024;

            if (!in_array($image_ext, $allowed_ext)) {
                $warning_msg[] = 'Formato de imagem inválido.';
            } elseif ($image_size > $max_size) {
                $warning_msg[] = 'Imagem muito grande (máx. 2MB).';
            } else {
                $unique_image_name = uniqid('img_', true) . '.' . $image_ext;
                $image = htmlspecialchars($unique_image_name, ENT_QUOTES, 'UTF-8');
                $image_folder = '../image/' . $image;

                $select_admin = $conn->prepare("SELECT * FROM `admin` WHERE email = ?");
                $select_admin->execute([$email]);

                if ($select_admin->rowCount() > 0) {
                    $warning_msg[] = 'Email já cadastrado.';
                } else {
                    $insert_admin = $conn->prepare("INSERT INTO `admin` (id, name, email, password, profile) VALUES (?, ?, ?, ?, ?)");
                    $insert_admin->execute([$id, $name, $email, $pass, $image]);

                    move_uploaded_file($image_tmp_name, $image_folder);

                    $success_msg[] = 'Registro concluído com sucesso!';
                }
            }
        } else {
            $warning_msg[] = 'Selecione uma imagem válida.';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registro</title>

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin_style.css?v=<?php echo time(); ?>">
</head>
<body>

<div class="main">
    <section>
        <div class="form-container" id="admin_login">
            <form action="" method="post" enctype="multipart/form-data">
                <h3>Registrar agora</h3>

                <div class="input-field">
                    <label>nome de usuário <sup>*</sup></label>
                    <input type="text" id="name" name="name" maxlength="20" required
                           placeholder="insira seu nome de usuário"
                           oninput="this.value = this.value.replace(/\/+/g, '')">
                </div>

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

                <div class="input-field">
                    <label>confirme sua senha <sup>*</sup></label>
                    <input type="password" id="cpassword" name="cpassword" maxlength="20" required
                           placeholder="confirme sua senha"
                           oninput="this.value = this.value.replace(/\/+/g, '')">
                </div>

                <div class="input-field">
                    <label>selecione perfil <sup>*</sup></label>
                    <input type="file" id="image" name="image" accept="image/*" required>
                </div>

                <button type="submit" name="register" class="btn">Registrar agora</button>
                <p>Já possui uma conta? <a href="login.php">Entrar agora</a></p>
            </form>
        </div>
    </section>
</div>

<!-- SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- Custom JS -->
<script src="../js/script.js"></script>

<!-- Alertas PHP -->
<?php include '../admin/components/alert.php'; ?>

</body>
</html>
