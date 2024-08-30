<?php include 'functions.php';
?>
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner carousel1" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="img/1slide.jpg" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/2slide.jpg" alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/3slide.jpg" alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
 
 
  <!-- menu -->
    
  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

  <!-- Navbar brand -->


  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Главная
          <span class="sr-only">(current)</span>
        </a>
      </li>
            <!-- Dropdown -->
        <div class="nav-item dropdown">
      <!--<li class="nav-item dropdown">-->

            <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Каталог</a>
          
        <div class="dropdown-menu dropright dropdown-secondary">
                          <a class="dropdown-item " href="katalog.php" role="button" aria-haspopup="true" aria-expanded="false">Все товары</a>

            <?php
             get_cat();
            ?>
            ?>
<!--      <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Сухие корма</a>-->
<!--        -->
<!--        <div class="dropdown-menu dropdown-triple">-->
<!--           <a class="dropdown-item" href="#">Для кошек</a>-->
<!--            <a class="dropdown-item" href="#">Для собак</a>-->
<!--        </div>-->
<!---->
<!--       <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Влажные корма</a>-->
<!--        <div class="dropdown-menu dropdown-secondary ">-->
<!--           <a class="dropdown-item" href="#">Для кошек</a>-->
<!--            <a class="dropdown-item" href="#">Для собак</a>-->
<!--        </div>-->
<!--         <a class="dropdown-item" href="#">Корма в банке</a>-->
          </div>
          
      <!--</li>-->
        </div>

      <li class="nav-item">
        <a class="nav-link" href="Onas.html">О нас</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Контакты</a>
      </li>



    </ul>
    <!-- Links -->

    <form class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </div>
    </form>
  </div>
  <!-- Collapsible content -->
</nav>
<!--/.Navbar-->
  <!-- /.menu -->

