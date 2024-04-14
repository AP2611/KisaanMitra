<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'header.php'; ?>

   <section class="about">

      <div class="row">

         <div class="box">
            <img src="images/about-img-1.png" alt="">
            <h3>why choose us?</h3>
            <p>Today's agriculture demands efficiency - our platform streamlines processes, saving time and resources.
               Transparent pricing and quality assurance ensure peace of mind for every transaction.
               Empowerment lies at the core of our mission - providing farmers with the tools they need to thrive.Embrace the future of farming with us, where technology meets tradition for a sustainable tomorrow.</p>
            <a href="contact.php" class="btn">contact us</a>
         </div>

         <div class="box">
            <img src="images/about-img-2.png" alt="">
            <h3>what we provide?</h3>
            <p>
               We provide a seamless platform for farmers to purchase crops and seeds without the hassle of navigating through multiple stores or intermediaries. Additionally, our service offers convenient tractor rentals, enabling farmers to access necessary equipment for plowing, planting, or harvesting with ease. By simplifying these essential aspects of agriculture, we empower farmers to focus on their cultivation efforts while saving valuable time and resources.</p>
            <a href="shop.php" class="btn">our shop</a>
         </div>

      </div>

   </section>

   <section class="reviews">

      <h1 class="title">clients reivews</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/pic-1.jpg" alt="">
            <p>Kissan Mitra is a lifesaver for farmers! From seed shopping to machinery rental, it's a comprehensive toolkit. Love the crop predictor feature!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Kamala Pujari</h3>
         </div>

         <div class="box">
            <img src="images/pic-2.jpg" alt="">
            <p>Kissan Mitra simplifies farming with its one-stop platform. The seed selection is vast, and the fertilizer predictor is spot on! A must-have for farmers.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ramesh Chaudhary</h3>
         </div>

         <div class="box">
            <img src="images/pic-3.jpg" alt="">
            <p>Impressed by Kissan Mitra's diverse features! Whether it's informative articles or reliable machinery rental, it's all here. A true farmer's companion</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sachin Kale</h3>
         </div>

         <div class="box">
            <img src="images/pic-4.jpg" alt="">
            <p>Kissan Mitra is a game-changer! Predictive tools for crops and fertilizers are incredibly accurate. Plus, the news checker feature keeps me updated. Brilliant webapp!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Rajiv Bittu</h3>
         </div>

         <div class="box">
            <img src="images/pic-5.jpg" alt="">
            <p>Kissan Mitra is like having a farming expert in your pocket! From seed buying to machine renting, it's hassle-free. The crop predictor is surprisingly precise.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Hukumchand Patidar</h3>
         </div>

         <div class="box">
            <img src="images/pic-6.jpg" alt="">
            <p>Kissan Mitra streamlines farming tasks effortlessly. The seed variety is extensive, and the crop predictor is invaluable. A fantastic resource for farmers!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ramaswamy iyer</h3>
         </div>

      </div>

   </section>









   <?php include 'footer.php'; ?>

   <script src="js/script.js"></script>
   <script>
window.embeddedChatbotConfig = {
chatbotId: "2m9zwEk5WY1a3ePdCjr8j",
domain: "www.chatbase.co"
}
</script>
<script
src="https://www.chatbase.co/embed.min.js"
chatbotId="2m9zwEk5WY1a3ePdCjr8j"
domain="www.chatbase.co"
defer>
</script>

</body>

</html>