<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .header-contact {
             position: relative;
             top: 20px;
        }
        .contact-us {
            height: 200px;
        }
    </style>
</head>

<body>

<?php


include ('header.php');


?>
<!-- About -->

<article class="about">

    <div class="content-about">
        
        <h1 class="text-center pt-5">Creativa</h1>
        <img class="left-picture" style="position: relative;bottom:104px;" src="img/header-background.png">
        <p class="text">We create the world loves.<br><br>
          Balancing talent and technology worldwide</p>

          <img class="right-picture" src="img/header.png">

    </div>
     

  </article>

 <!-- end of About -->

  <!-- About box -->

  <article class="development">

   <div class="items item-4 text-center">Web development<hr class="line">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, praesentium? Fugit iste nobis enim odit.
       <img src="services1.png" class="pt-4">
   </div>
   <div class="items item-5 text-center">Mobile development<hr class="line">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi eligendi ipsa, harum quia itaque asperiores!
   
       <img src="services2.png" class="pt-4">
   </div>
   <div class="items item-6 text-center">Internet marketing<hr class="line">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptatibus ratione odio atque magnam deleniti!
   
       <img src="services3.png" class="pt-4">
   </div>
   

  </article>
  <!-- end of box -->

  <!-- our skills -->

    <article class="our-skills">
        <h1 class="text-center pt-5">Our skills</h1>
           <div class="languages text-center pt-2">
             <p>>_PHP development</p>
             <p>>_JS development</p>
             <p>>_Android development</p>
             <p>>_Adobe development</p>
             <p>>_Figma & Sketch</p>
           </div>
           <i class="fas fa-laptop-code"></i>
       <div class="picture-article">
           <img class="image-footer" src="bg.png">
</div>
    </article>
   <!-- end of our skills -->
   <?php

include ('footer.php');

?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
