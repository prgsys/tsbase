<?php include('pages/header.php');?> 
<?php include('pages/menu.php');?> 
  
  <main id="main">

    <main id="main">
    <section id="main" class="about">
      <?php
        if(isset($_GET['prod'])){include('./src/pages/prod.php');}
        else if(isset($_GET['prodsched'])){include('./src/pages/prodschd.php');}
        else if(isset($_GET['hours'])){include('./src/pages/hours.php');}
        else if(isset($_GET['fs'])){include('./src/pages/frontsheets.php');}
      
        else{include('./pages/main.php');}

      ?>
    </section><!-- End About Section -->
<?php include('pages/footer.php');?> 
