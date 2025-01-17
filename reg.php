<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/reg.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">

</head>

<body>

    <!-- Start your project here-->
    
                    <!-- /.navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light  fixed-top"> 
     <div class="bg">
  <a class="navbar-brand" href="#"><img src="img/jandi-og.png"> </a>


  <div class="navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav navbar-nav1 ml-auto">
        <!-- Links -->
      <li class="nav-item">
        <a class="nav-link" href="#!">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#!">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#!">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
      </li>
    <!-- Links -->
    </ul>
  </div>
  </div>
  
</nav>  
          <!-- /.navbar -->
          
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Каталог</a>
        <div class="dropdown-menu dropright dropdown-secondary">
                              <a class="dropdown-item " href="katalog.php" role="button" aria-haspopup="true" aria-expanded="false">Все товары</a>
        
      <a style="color: black" class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Корма для кошек</a>
        
        <div class="dropdown-menu dropdown-triple">
           <a class="dropdown-item" href="#">Влажные корма</a>
            <a class="dropdown-item" href="#">Сухие корма</a>
        </div>

       <a style="color: black" class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Корма для собак</a>
        <div class="dropdown-menu dropdown-secondary ">
           <a class="dropdown-item" href="#">Влажные корма</a>
            <a class="dropdown-item" href="#">Сухие корма</a>
        </div>
         <a class="dropdown-item" href="#">Сухие корма</a>
          </div>
          
      </li>
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
  
  
   <!--Content-->
   <div class="container">
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Форма регистрации</strong>
    </h5>

    <div class="card-body px-lg-5 pt-0">

        <form method="post" action="reg.php" style="color: #757575;">

            <label for="username">Ваше имя</label>
            <input type="text" id="username" name="username" class="form-control" >

            <label for="login">Логин</label>
            <input type="text" name="login" id="login" class="form-control" >

                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" class="form-control">
                   
                   <label for="pass">Пароль</label>
                    <input type="password" name="pass" id="pass" class="form-control">
                  

<div class="container">
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Регистрация</button>
            </div>

        </form>
    </div>
</div>
  </div>
   <!--/.Content-->
   
    <!-- Footer -->
<footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">Pet-korm</h5>
          <p>Корпорация «Pet-korm» изготавливает корма для животных из высококачественных, безопасных продуктов.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div style="text-align: right;" class="col-md-6 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Ссылки</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Главная</a>
              </li>
              <li>
                <a href="#!">Контакты</a>
              </li>
              <li>
                <a href="#!">О нас</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->

          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div style="background-color:#4285f4;" class="footer-copyright text-center py-3">© 2019 Copyright:

    </div>
    <!-- Copyright -->

  </footer>
<!-- Footer -->

   
   
    <!-- /Start your project here-->
    
    
    
    
    
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>