<!-- Meet Maheta -->
<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>


   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>where passion meets flavor! We are a team of food enthusiasts dedicated to bringing you a culinary journey like no other.</p>
         <a href="menu.php" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p>We're delighted to have you here. To make your experience seamless, please take a moment to choose your order from our diverse menu. Our chefs have curated a selection of delicious options to satisfy every palate.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p>We understand that time is of the essence, and we're committed to bringing you the quickest and most reliable delivery service. Enjoy the convenience of having your favorite dishes delivered to your doorstep with just a few clicks.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>Welcome to a world of culinary delight where every dish is a masterpiece. At Flavor Fiesta 😋, we believe that enjoying food is an art. We invite you to indulge your senses and savor each moment of your dining experience.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reviews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>"I can't express how much I enjoyed my meal from [Your Business Name]. The flavors were absolutely incredible! Every bite was a journey through taste, and the presentation was top-notch. The ordering process was a breeze, and the delivery was prompt. I'm already planning my next order. Highly recommended!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Noah Johnson</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>Thanks to Flavor Fiesta 😋, my home turned into a five-star restaurant tonight. The variety on the menu is impressive, and the quality of the food is outstanding. The delivery was faster than expected, and everything arrived fresh and hot. This is my new go-to for a culinary adventure without leaving home.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Isabella Carter</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>Flavor Fiesta 😋 has truly mastered the art of culinary excellence. I had the pleasure of indulging in their [dish name], and it was a revelation. The ingredients were fresh, the presentation was Instagram-worthy, and the taste was simply divine. The menu showcases a thoughtful selection that caters to various preferences. This is a must-visit for anyone seeking a memorable dining experience.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mason Davis</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>stumbled upon Flavor Fiesta 😋 while exploring the neighborhood, and what a pleasant surprise it turned out to be! The menu is a delightful mix of classic and innovative dishes. I opted for the [dish name], and it exceeded all expectations. The cozy ambiance and friendly staff added to the overall charm. I've found my new favorite spot, and I can't wait to explore more of their offerings.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ava Parker</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>Dining at Flavor Fiesta 😋 is like a culinary journey for the senses. I tried the [dish name], and it was a burst of flavors that left me wanting more. The chef's creativity shines through in every dish, and the presentation is a work of art. The staff's knowledge of the menu and their enthusiasm to enhance the dining experience were commendable. A definite must-try for food enthusiasts!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Lucas Bennett</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>Flavor Fiesta 😋 sets itself apart with a sophisticated dining experience. The ambiance is elegant, creating a perfect setting for a special evening. The menu boasts a selection of refined dishes, and I opted for the [dish name]. The attention to detail in both presentation and taste was impressive. The staff was attentive, providing seamless service throughout the evening. If you're looking for a place to celebrate or simply indulge in exquisite cuisine, this is the place to be!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Emma Thompson</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>