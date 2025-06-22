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
            <a href="home.php">Início / </a><span>Contatos</span>
        </div>

        <section class="services">
          <div class="box-container">
              <div class="box">
                  <img src="img/icon2.png" alt="">
                  <div class="detail">
                      <h3>great savings</h3>
                      <p>save big every order</p>  
                  </div>  
              </div>
              <div class="box">
                  <img src="img/icon1.png" alt="">
                  <div class="detail">
                      <h3>24h Support</h3>
                      <p>one-on-one support</p>  
                  </div>  
              </div>
              <div class="box">
                  <img src="img/icon0.png" alt="">
                  <div class="detail">
                      <h3>gift vouchers</h3>
                      <p>vouchers on every festivals</p>  
                  </div>  
              </div>
              <div class="box">
                  <img src="img/icon.png" alt="">
                  <div class="detail">
                      <h3>worldwide delivery</h3>
                      <p>dropship worldwide</p>  
                  </div>  
              </div>  
          </div>
      </section>
      <div class="form-container">
          <form method="post">
              <div class="title">
                   <img src="img/download.png" class="logo" alt="">
                   <h1>Deixe uma mensagem</h1>
              </div>
              <div class="input-field">
                <p>Seu nome *</p>
                <input type="text" name="name">
              </div>
              <div class="input-field">
                <p>Seu e-mail *</p>
                <input type="email" name="email">
              </div>
              <div class="input-field">
                <p>Seu número *</p>
                <input type="text" name="number">
              </div>
              <div class="input-field">
                <p>Sua mensagem.. *</p>
                <textarea name="message" id=""></textarea>
              </div>
              <button type="submit" name="submit-btn" class="btn">Enviar mensagem</button> 
          </form>
        </div>
        <div class="address">
             <div class="title">
                 <img src="img/download.png" class="logo" alt="">
                 <h1>Entre em contato</h1>
                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="box-container">
                <div class="box">
                    <i class="bx bxs-map-pin"></i>
                    <div>
                        <h4>Endereço</h4>
                        <p>P. Viriato P. de Souza, 1099 - Ecoville </p>  
                    </div>  
                </div>
                <div class="box">
                    <i class="bx bxs-phone-call"></i>
                    <div>
                        <h4>Telefone</h4>
                        <p>(41) 3244-3794</p>  
                    </div>  
                </div>
                <div class="box">
                    <i class="bx bxs-map-pin"></i>
                    <div>
                        <h4>E-mail</h4>
                        <p>greenteacoffe@gmail.com</p>  
                    </div>  
                </div>
            </div> 
        </div>
         
      <?php include 'components/footer.php'; ?>        
    </div>
    <script src="https://cdnjs.cloudfare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>    