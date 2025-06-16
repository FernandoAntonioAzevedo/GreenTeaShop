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
    <title>Green Tea - Shop</title>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main">        
        <section class="home-section">
            <div class="slider">
            <div class="slider__slider slide1">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Green Renovations</h1>
                    <p>Esse chá é conhecido por seus benefícios à saúde, incluindo propriedades antioxidantes, anti-inflamatórias <br>e termogênicas. </p>
                    <a href="view_products.php" class="btn">Comprar agora</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- Fim Slide  -->
            <div class="slider__slider slide2">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Bem vindo a minha lojaa</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsa, lendus eaque.</p>
                    <a href="view_products.php" class="btn">Comprar agora</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- Fim Slide  --> 
            <div class="slider__slider slide3">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem consectetur elit.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsa, lendus eaque.</p>
                    <a href="view_products.php" class="btn">Comprar agora</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- Fim Slide  -->
            <div class="slider__slider slide4">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem consectetur elit.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsa, lendus eaque.</p>
                    <a href="view_products.php" class="btn">Comprar agora</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- Fim Slide  -->
             <div class="slider__slider slide5">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem consectetur elit.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsa, lendus eaque.</p>
                    <a href="view_products.php" class="btn">Comprar agora</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- Fim Slide  -->             
            <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>   
            <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>   
        </div>      
      </section>
      <!-- Fim Home slider  -->
      <section class="thumb">
          <div class="box-container">
              <div class="box">
                  <img src="img/thumb2.jpg" alt="">
                  <h3>green tea</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  <i class="bx bx-chevron-right"></i>  
              </div>
              
              <div class="box">
                  <img src="img/thumb0.jpg" alt="">
                  <h3>lemon tea</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  <i class="bx bx-chevron-right"></i>  
              </div>

              <div class="box">
                  <img src="img/thumb1.jpg" alt="">
                  <h3>green coffe</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  <i class="bx bx-chevron-right"></i>  
              </div>

              <div class="box">
                  <img src="img/thumb.jpg" alt="">
                  <h3>green tea</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  <i class="bx bx-chevron-right"></i>  
              </div>
          </div>  
      </section>
      <section class="container">
          <div class="box-container">
               <div class="box">
                   <img src="img/about-us.jpg" alt=""> 
               </div>
               <div class="box">
                   <img src="img/download.png" alt=""> 
                   <span>Healthy tea</span>
                   <h1>save up tp 50% off</h1>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim iste qui dolorum?</p>
               </div> 
          </div>  
      </section> 
      <?php include 'components/footer.php'; ?>        
    </div>
    <script src="https://cdnjs.cloudfare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>    