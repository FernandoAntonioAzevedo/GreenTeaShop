<header>
    <div class="flex">
        <a href="home.php" class="logo"><img src="img/logo.jpg"></a>
        <nav class="navbar">
            <a href="home.php">Início</a>
            <a href="view_products.php">Produtos</a>
            <a href="order.php">Pedidos</a>
            <a href="about.php">Sobre nós</a>
            <a href="contact.php">Contatos</a>
        </nav>
        <div class="icons">
            <i class="bx bxs-user" id="user-btn"></i>
            <a href="wishlist.php" class="cart-btn"><i class="bx bx-heart"></i><sup>0</sup></a>
            <a href="cart.php" class="cart-btn"><i class="bx bx-cart-download"></i><sup>0</sup></a>
            <i class="bx bx-list-plus" id="menu-btn" style="font-size: 2rem;"></i>
        </div>
        <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="login.php" class="btn">Entrar</a>
            <a href="register.php" class="btn">Registrar</a>
            <form method="post">
                <button type="submit" name="logout" class="logout-btn">sair</button>
            </form>
        </div>
    </div>
</header>
