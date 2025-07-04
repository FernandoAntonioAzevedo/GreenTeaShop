<?php  
    include 'components/connection.php';
    session_start();
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    }else {
        $user_id = '';
    }


    if (isset($_POST['logout'])) {
        session_destroy();
        header("location: login.php");
    }
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
                    <h1>Green Sensations</h1>
                    <p>Esse chá é conhecido por suas propriedades antioxidantes, anti-inflamatórias e sensação revigorante após o consumo.</p>
                    <a href="view_products.php" class="btn">Comprar agora</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- Fim Slide  --> 
            <div class="slider__slider slide3">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Green Renovations</h1>
                    <p>Esse chá é conhecido por seus benefícios à saúde, incluindo propriedades antioxidantes, anti-inflamatórias <br>e termogênicas.</p>
                    <a href="view_products.php" class="btn">Comprar agora</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- Fim Slide  -->
            <div class="slider__slider slide4">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Green Sensations</h1>
                    <p>Esse chá é conhecido por suas propriedades antioxidantes, anti-inflamatórias e sensação revigorante após o consumo.</p>
                    <a href="view_products.php" class="btn">Comprar agora</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- Fim Slide  -->
             <div class="slider__slider slide5">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Green Renovations</h1>
                    <p>Esse chá é conhecido por seus benefícios à saúde, incluindo propriedades antioxidantes, anti-inflamatórias <br>e termogênicas.</p>
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
              <div class="box box-about">
                   <img src="img/about-us.jpg" alt=""> 
               </div>
               <div class="box">
                   <img src="img/download.png" alt=""> 
                   <span>Chá revitalizador</span>
                   <h2>Adquira com até 50% de desconto!</h2>
                   <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                   </p>
               </div> 
          </div>  
      </section>
      <section class="shop">        
        <div class="title">
            <img src="img/download.png" alt="">
            <h1>Produtos em Alta</h1>
        </div>
        <div class="row">
            <img src="img/about.jpg" alt="">
            <div class="row-detail">    
                <img src="img/basil.jpg" alt="">
                <div class="top-footer">
                    <h1>a cup of green tea makes you healthy</h1>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="img/card.jpg" alt="">
                <a href="view_products.php" class="btn">Comprar agora</a>
            </div>
            <div class="box">
                <img src="img/card0.jpg" alt="">
                <a href="view_products.php" class="btn">Comprar agora</a>
            </div>
            <div class="box">
                <img src="img/card1.jpg" alt="">
                <a href="view_products.php" class="btn">Comprar agora</a>
            </div>
            <div class="box">
                <img src="img/card2.jpg" alt="">
                <a href="view_products.php" class="btn">Comprar agora</a>
            </div>
            <div class="box">
                <img src="img/10.jpg" alt="">
                <a href="view_products.php" class="btn">Comprar agora</a>
            </div>
            <div class="box">
                <img src="img/6.webp" alt="">
                <a href="view_products.php" class="btn">Comprar agora</a>
            </div>
        </div>
      </section>
      <section class="shop-category">
         <div class="box-container">
             <div class="box">
                <img src="img/6.jpg" alt="">
                <div class="detail">
                    <span>BIG OFFERS</span>
                    <h1>Extra 15% off</h1>
                    <a href="view_products.php" class="btn">Comprar agora</a>
                </div>
             </div>
             <div class="box">
                <img src="img/7.jpg" alt="">
                <div class="detail">
                    <span>new in taste</span>
                    <h1>coffee house</h1>
                    <a href="view_products.php" class="btn">Comprar agora</a>
                </div>
             </div>
         </div>
      </section>
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
      <section class="brand">
          <div class="box-container">
              <div class="box">
                 <img src="img/brand (1).jpg" alt="">
              </div>
              <div class="box">
                 <img src="img/brand (2).jpg" alt="">
              </div>
              <div class="box">
                 <img src="img/brand (3).jpg" alt="">
              </div>
              <div class="box">
                 <img src="img/brand (4).jpg" alt="">
              </div>
              <div class="box">
                 <img src="img/brand (5).jpg" alt="">
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