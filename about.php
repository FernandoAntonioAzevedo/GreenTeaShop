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
    <title>Green Tea - Sobre Nós</title>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>Sobre nós</h1>
        </div>
        <div class="title2">
            <a href="home.php">Início </a><span>Sobre</span>
        </div>
        <div class="about-category">
            <div class="box">
                <img src="img/3.webp" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">comprar agora</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.webp" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon tea</h1>
                    <a href="view_products.php" class="btn">comprar agora</a>
                </div>
            </div>
            <div class="box">
                <img src="img/about.png" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon tea</h1>
                    <a href="view_products.php" class="btn">comprar agora</a>
                </div>
            </div>
            <div class="box">
                <img src="img/1.webp" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">comprar agora</a>
                </div>
            </div>
        </div>
        
        <section class="services">
            <div class="title">
                <img src="img/download.png" class="logo" alt="">
                <h1>Por quê nos escolher?</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, 
                   facilis est dolore vero fuga quidem!
                </p>
            </div>
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
      <div class="about">
         <div class="row">
             <div class="img-box">
                 <img src="img/3.png" alt="">
             </div>
             <div class="detail">
                 <h1>Visite nosso incrível showroom!</h1>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore modi cumque 
                    vero repellat placeat reprehenderit iusto voluptatibus fugit. Iusto ipsum 
                    facere libero maiores voluptatem facilis est asperiores vel! Iusto ipsum 
                    facere libero maiores voluptatem facilis est asperiores vel!
                </p>
                <a href="view_products.php" class="btn">comprar agora</a>
             </div>   
         </div>
      </div>
      <div class="testimonial-container">
            <div class="title">
              <img src="img/download.png" class="logo" alt="">
              <h1>O que as pessoas dizem sobre nós</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero molestias ad magnam 
                 nesciunt cum, totam eveniet? Minima vel hic voluptate!
              </p>
            </div>

              <div class="container">
                  <div class="testimonial-item active">
                      <img src="img/01.jpg" alt="">
                      <h1>Evelyn Smitchel</h1>
                      <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident 
                        fugiat illum aliquam, possimus, vitae, in cumque esse modi enim numquam 
                        nostrum blanditiis!
                      </p>                      
                  </div>
                  <div class="testimonial-item">
                      <img src="img/02.jpg" alt="">
                      <h1>Josué Almeida</h1>
                      <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident 
                        fugiat illum aliquam, possimus, vitae, in cumque esse modi enim numquam 
                        nostrum blanditiis!
                      </p>                      
                  </div>
                  <div class="testimonial-item">
                      <img src="img/03.jpg" alt="">
                      <h1>Emely Navarro</h1>
                      <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident 
                        fugiat illum aliquam, possimus, vitae, in cumque esse modi enim numquam 
                        nostrum blanditiis!
                      </p>                      
                  </div>
                  <div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>  
                  <div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>  
              </div>  
            
      </div>        
       
      <?php include 'components/footer.php'; ?>        
    </div>
    <script src="https://cdnjs.cloudfare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>    