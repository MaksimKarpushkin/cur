<!DOCTYPE html>

<?
$index=0;
if($_GET['Для кошек(сухие корма)']=="Для кошек(сухие)")
{
$index=1;
}
if($_GET['Для собак(сухие корма)']=="Для собак(сухие)")
{
$index=2;
}
if($_GET['Для кошек(влажные корма)']=="Для кошек(влажные)")
{
$index=3;
}
if($_GET['Для собак(влажные корма)']=="Для собак(влажные)")
{
$index=4;
}
if($_GET['Vse']=="Все")
{
$index=0;
}
?>

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
    <link href="css/Onas.css" rel="stylesheet">
         <link href="css/main.css" rel="stylesheet">
</head>

<body>

    <!-- Start your project here-->
    
                    <!-- /.navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light  fixed-top"> 
     <div class="bg">
  <a class="navbar-brand" href="#"><img src="D:/15Пк-1/Карпушкин/курсовая/img/jandi-og.png"> </a>


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
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Light mask</h3>
        <p>First text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Strong mask</h3>
        <p>Secondary text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Slight mask</h3>
        <p>Third text</p>
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
  <a class="navbar-brand" href="#">Navbar</a>

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
        <a class="nav-link" href="kontakty.html">Контакты</a>
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


<section class="main-content">
<div class="conteiner">
<div class="row">
  <div class="col-lg-2 col-lg-pull-8">
			   <div class="sintrol">
				   <div class="block d-flex flex-column justify-content-center align-items-center">
					   <p class="ivent">Выбирете объекты</p>
					   <div class="roud">
  <form method="get" action="Tovari.php">
				<input type="submit" class="btn btn-alert" value="Все" name="Vse">
					<input type="submit" class="btn btn-alert" value="Заборы" name="zabori">
					<input type="submit" class="btn btn-alert" value="Строения" name="Stroenia">
					<input type="submit" class="btn btn-alert" value="Дома" name="home">
						   </form>
					</div>
					  </div>

  
  

	  </div>
	  
	  
	</div>
 <div class="col-lg-8 col-lg-push-2">
    <main class="mt-5" id="about">
        <section class="text-center mb-4">
            <div class="conteiner">
        	 <div class="row">
<?try{
$pdo= new PDO('mysql:host=localhost;dbname=korm;charset=utf8','root','');	
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql="SELECT * FROM prodyct";
	$result=$pdo->query($sql);
	
	foreach($result as $row){
		if($index==0){
		echo '<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                    <div class="card" style="width: 262px;">
               <img class="card-img-top" src="images/stroenia/'.$row['foto'].'" alt="" width="250px" height="250px">
		 <div class="card-body text-center"><a href="#" class="grey-text"><p>'.$row['name'].'</p></a>
        	 <h4 class="font-weight-bold blue-text"><strong>'.$row['cena'].'</strong></h4>
		</div>
		 <button type="button" class="btn btn-default">Купить</button>
                    </div>
                    </div>';
		}
		else
		{
		if($index==$row['per kl']){
		echo '<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                    <div class="card" style="width: 262px;">
               <img class="card-img-top" src="images/stroenia/'.$row['foto'].'" alt="" width="250px" height="250px">
		 <div class="card-body text-center"><a href="#" class="grey-text"><p>'.$row['name'].'</p></a>
        	 <h4 class="font-weight-bold blue-text"><strong>'.$row['cena'].'</strong></h4>
		</div>
		 <button type="button" class="btn btn-default">Купить</button>
                    </div>
                    </div>';
		}}
	}
}

catch(PDOExceptoin $e){
	echo $e->getMessage();
}
?>
               
               
               
                </div>
     
    
            </div>
        </section>
    </main>
	</div>

	</div>
	</div>
	</section>
   
   <!--/.Content-->
   
    <!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
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