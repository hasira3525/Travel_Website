
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


</head>
<body onload="slider()">

<!-- header section starts  -->

<section class="header">
         <div class="logout">
            <?php 
            session_start();

            if (!isset($_SESSION['username'])) {
               header("Location: index.php");
            }
      
            echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
            
         </div>
      <a href="home.php" class="logo">GLOBAL TRAVELS</a>
   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="logout.php">Logout</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<div class="banner">
   <div class="slider">
      <img src="images/home-slide-1.jpg" id="slideImg">
   </div>
   <div class="overlay">
      <div class="content">
         <h1>Explore, Discover, Travel</h1>
         <p>Travel Arround the World, &nbsp; 
             Discover the New Places, &nbsp; 
             Make your Tour Worthwhile
         </p>
         <div>
            <a href="package.php">
            <button type="button" class="btn2">Discover more</button>
            </a>
         </div>
      </div>
   </div>
</div>
<script>
   var slideImg = document.getElementById("slideImg");

   var images = new Array(
      "images/home-slide-1.jpg",
      "images/123.jpg",
      "images/home-slide-3.jpg",
      // "images/home-slide-4.jpg",
      // "images/home-slide-5.jpg",
      "images/home-slide-6.jpg"
   );

   var len = images.length;
   var i=0;

   function slider(){
      if(i > len-1){
         i=0;
      }
      slideImg.src = images[i];
      i++;
      setTimeout('slider()',3000) 
       }
</script>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>0716987286(Group Leader Sandaru) <br>
         CODSE211F-047 Sandaru Malshan - Design Booking page and AboutUs page.<br>
         CODSE211F-018 Hasira Methnuka - Design Home page and Package page.<br>
         CODSE211F-004 Amaya Mahavithane - Design Login page and Register page.<br>
         CODSE211F-020 Saajid Ahmbed - Create database and Database Connections.<br>
         CODSE211F-015 Chandima Gunathilake - Refer all the information about this website.
   </p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Taj Mahal, India</h3>
            <p>An immense mausoleum of white marble, built-in Agra by Mughal emperor Shah Jahan in memory of his wife Mumtaz,
                the monument is breathtakingly beautiful. The tranquility of white is universally spread over the Taj. 
               It is one of the masterpieces of world heritage and also one of the best travel destinations in the world.</p>
               <br><br><br><br><br>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/seegiriya.jpg" alt="">
         </div>
         <div class="content">
            <h3>Seegiriya, SriLanka</h3>
            <p>Sigiriya is one of the most valuable historical monuments of Sri Lanka. Referred by locals as the Eighth Wonder 
               of the World this ancient palace and fortress complex has significant archaeological importance and attracts thousands 
               of tourists every year. It is probably the most visited tourist destination of Sri Lanka.</p>
               
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/R.jpg" alt="">
         </div>
         <div class="content">
            <h3>Great Barrier Reef, Australia</h3>
            <p>One of the most remarkable Australian natural gifts is the Great Barrier Reef. The hallmark of this place is ‘lavish’ and 
               ‘beauty’. So if you want to see this grandeur of nature in Australia, you need to spend money and come & stay at the most
                luxurious places the Reef has to offer. This place is blessed with the breathtaking beauty of the world’s largest coral reef.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>Book the Best Flights and Hotels for Your Next Destination. Search Cheap Flights and Hotels Easier! No booking fees & Get Upto 50% OFF in your full tour. Great last-minute deals.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +94 785853300 </a>
         <a href="#"> <i class="fas fa-phone"></i> +94 703476860 </a>
         <a href="#"> <i class="fas fa-envelope"></i> sandaru@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Rathnapura, SriLanka </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>NIBM</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>