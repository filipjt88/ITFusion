<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <style>
      .contact-us {
        position: relative;
        top: 50px;
      }

      .header-contact {
       position: relative;
       top: 10px;
      }
    </style>
</head>

<body>
  
       <?php
 include ('header.php');

?>

     

      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="slide1.jpg" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="slide2.jpg" width="1100" height="500">
          </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>

      <!-- Content -->

      <article class="content">

        <h1 class="text-center mt-5 con">Technologies that we used</h1>
        <hr>
        <div class="box">
        <div class="item item-1">
        <img src="about1.jpg">
        <h4 class="text-center mt-3">Javascript</h4>
        <p class="text-center pl-2 pt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus nemo maxime nesciunt. Vel recusandae ea nulla, aliquid quam similique? Natus, at fugiat.</p>
        </div>
        <div class="item item-2">
            <img src="about2.jpg">
            <h4 class="text-center mt-3">WordPress</h4>
            <p class="text-center pl-2 pt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam debitis labore quae impedit culpa sunt incidunt! Reiciendis doloremque non expedita quo quaerat.</p>
        </div>
        <div class="item item-3">
            <img src="about3.jpg">
            <h4 class="text-center mt-3">PHP</h4>
            <p class="text-center pl-2 pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis illo fuga sit eius minus incidunt, iure inventore numquam velit placeat ea nulla!</p>
        </div>
    </div>
      </article>
 <!-- end of Content -->

 <?php

include ('footer.php');

?>

  



     
      
    </div>
</div>
    
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>