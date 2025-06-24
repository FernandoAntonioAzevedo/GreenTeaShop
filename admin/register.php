
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicon cdn link -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="admin_style.css?v=<?php echo time(); ?>">
    <title>Admin Registro</title>
</head>
<body>

    <div class="main-container">
        <section>
            <div class="form-container" id="admin_login">
                <form action=""  method="post" enctype="multipart/form-data">
                    <h3>Registrar agora</h3>
                    <div class="input-field">
                        <label for="">nome de usuário *</label>
                        <input type="text" name="name" maxlength="20" required placeholder="
                        insira seu nome de usuário" oninput="this.value.replace(/\/g,'')">
                    </div>
                    <div class="input-field">
                        <label for="">seu email *</label>
                        <input type="email" name="email" maxlength="20" required placeholder="
                        insira seu email" oninput="this.value.replace(/\/g,'')">
                    </div>
                    <div class="input-field">
                        <label for="">sua senha  *</label>
                        <input type="password" name="password" maxlength="20" required placeholder="
                        insira sua senha" oninput="this.value.replace(/\/g,'')">
                    </div>
                    <div class="input-field">
                        <label for="">Confirme sua senha  *</label>
                        <input type="password" name="cpassword" maxlength="20" required placeholder="
                        confime sua senha" oninput="this.value.replace(/\/g,'')">
                    </div>
                    <button type="submit" name="register" class="btn">Registrar agora</button>
                    <p>Já possui uma conta? <a href="login.php">Entrar agora</a></p>
                </form>
            </div>
        </section>
    </div>
    

    <!-- sweetalert cdn link -->
    <script src="https://cdnjs.cloudfare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- custom js link -->
    <script type="text/javascript" src="../js/script.js"></script> 

    <!-- alert -->
    <?php include '../components/alert.php'; ?>


</body>
</html>