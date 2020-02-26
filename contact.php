<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <style>
      .contact-us-image {
        opacity: 0.3;
      }
      .contact-text {
        font-size: 15px;
      }

      .heading-contact {
        position: relative;
        bottom: 445px;
        left: 50px;
      }

      .contact-text {
        position: relative;
        bottom: 445px;
        left: 50px;
      }

      .contact-us-awesome {
        display: flex;
        justify-content: center;
        position: relative;
        bottom: 150px;
        height: 400px;
      }

      .our-office {
        margin: 150px;
      }

      .fa-map-marker-alt {
        font-size: 50px;
        color:violet;
        position: relative;
        left: 20px;
      }

      .fa-phone {
        font-size: 50px;
        color:violet;
      }

      .fa-envelope {
        font-size: 50px;
        color:violet;
      }

      figure {
        position: relative;
        top: 20px;
        right: 10px;
        font-size: 15px;
        font-weight: bold;
      }

      h4 {
        position: relative;
        top: 20px;
        right: 10px;
      }

      .email {
        position: relative;
        left: -3px;
      }

      .contact-us {
        position: relative;
        bottom: 200px;
        height: 220px;
      }

      .header-contact {
        position: relative;
        top: 20px;
      }

      .contact-text {
        font-weight: bold;
      }


     
    </style>
</head>

<body>

<?php

   include ('header.php');

?>

<!-- contact-us-image -->

     <div class="contact-us-image">
       <img src="img/novisad.jpg">
       
     </div>
     <h1 class="heading-contact text-center">
        Contact us</h1>
        <p class="contact-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia magni voluptatibus libero <br>beatae non perferendis. Delectus libero laudantium necessitatibus veniam.</p>


<!-- end of contact-us-image -->

       <article class="contact-us-awesome">
           <div class="our-office">
           <i class="fas fa-map-marker-alt"></i>
             <h4>Our office</h4>
             <figure>Kozacinskog 5</figure>
             <figure>Novi Sad</figure>
           </div>

           <div class="our-office">
           <i class="fas fa-phone"></i>
             <h4>Phones</h4>
             <figure>063 123 456</figure>
             <figure>021 123 456</figure>
           </div>

           <div class="our-office">
           <i class="fas fa-envelope"></i>
             <h4 class="email">Email</h4>
             <figure>info@itfusion.rs</figure>
             <figure>office@itfusion.rs</figure>
           </div>
       </article>
   <?php

include ('footer.php');


?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
