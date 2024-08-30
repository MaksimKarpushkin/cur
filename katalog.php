<?php

include 'config.php';

?>

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
    <link href="css/katalog.css" rel="stylesheet">
         <link href="css/main.css" rel="stylesheet">
</head>

<body>

<?php
include 'navbar-menu.php';
?>

   <!--Content-->
<div class="row my-2">
  <div class="sidebar col-5 col-lg-4 col-xl-3 col-md-6">
      <div class="dropdown">
                <?php
                    get_cat();
                ?>
      </div>
  </div>
    <div style="background-color: #efefef;" class="card col-7 col-lg-8 col-xl-9 col-md-6">
        
<?php
    $stolb=0;
        $result= mysqli_query($connection, "SELECT * FROM products");

        if (mysqli_num_rows($result)>0)
        {
            $row= mysqli_fetch_array($result);
            do     
            {
                     if ($stolb==0) 
                {
                    echo '
                    <div class="row">
                         ';
                } 

                           if($row["image"] != "" && file_exists ("./img/".$row["image"]))
                {
                    $img_path= './img/'.$row["image"];
                    $max_width = 350;
                    $max_height= 350;
                    list($width,$height)= getimagesize($img_path);
                    $ratioh= $max_height/$height;
                    $ratiow = $max_width/$width;
                    $ratio=min($ratioh,$ratiow);
                    $width = intval($ratio*$width);
                    $height=intval($ratio*$height);
                }
                
                echo '
					 <div class="col-sm">
					 	<div style="height:520px;" class="card card-hz">
							<div class="view overlay">
						 		<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" alt="Card image cap"  />
								    <a href="#!"><div class="mask rgba-white-slight"></div></a>
						 	</div>
						  <div class="card-body">
							  <h4 class="card-title"><a href="#">'.$row["title"].'</a></h4>
							  <p class="style-price-grid"><strong>'.$row["price"].'</strong> руб.</p>
							  <p class="card-text">'.$row["content"].'</p>
							  <a class="btn btn-primary">Купить</a>
						  </div>
						</div>
						</div>';
                if ($stolb==3) 
                {
                    echo '
                     </div>
                         ';
                        $stolb=-1;
                }
               $stolb=$stolb+1;
            } 
                                while ($row= mysqli_fetch_array($result));
    }

	
        ?>
    
  </div>

</div>

   <!--/.Content-->
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
<!-- Bootstrap core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
    


    	<script src="js/jquery.accordion.js"></script>
    	<script src="js/jquery.cookie.js"></script>
    
    
    	<script>
		$(document).ready(function(){
			$(".category").dcAccordion();
		});
	</script>

</body>

</html>

