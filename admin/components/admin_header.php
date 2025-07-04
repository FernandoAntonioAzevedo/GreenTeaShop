<header class="header">
    <div class="flex">
        <a href="dashboard.php" class="logo"><img src="../FrontEnd/img/logo.jpg" alt=""></a>
        <nav class="navbar">
            <a href="dashboard.php">Painel de Controle</a>
            <a href="add_products.php">add produtos</a>
            <a href="view_product.php">visualizar produtos</a>
            <a href="accounts.php">Conta</a>
        </nav>
        <div class="icons">
            <i class="bx bxs-user" id="user-btn"></i>
            <i class="bx bx-list-plus" id="menu-btn"></i>            
        </div>
        <div class="profile-detail">
            <?php 
                $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
                $select_profile-> execute([$admin_id]);

                if ($select_profile->rowCount() > 0) {
                    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);    
                
            ?>
            <div class="profile">
                <img src="../image/<?= $fetch_profile['profile']; ?>" class="logo-img">
                <p><?= $fetch_profile['name']; ?></p>    
            </div>
            <div class="flex-btn">
                <a href="profile.php"  class="btn">perfil</a>
                <a href="..components/admin_logout.php" 
                onclick="return confirm('logout from this website');"  
                class="btn">sair</a>
            </div>
            <?php 
                 }
            ?>
        </div>
    </div>
</header>