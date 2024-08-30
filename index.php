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
    <link href="css/style.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
<!--Carousel Wrapper-->
<!--Navbar-->
<?php
include 'navbar-menu.php';
?>
?>
<!--/.Navbar-->
<!--/.Carousel Wrapper-->
<!--Content-->
<div class="container">
    <h1 class="text-center mb-3 mt-2">Товары по акции:</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner row w-100 mx-auto">
            <?php
            $result = mysqli_query($connection, "SELECT * FROM akcia");
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                do foreach ($result as $row)
                {
                    if ($row["image"] != "" && file_exists("./img/" . $row["image"])) {
                        $img_path = './img/' . $row["image"];
                        $max_width = 350;
                        $max_height = 350;
                        list($width, $height) = getimagesize($img_path);
                        $ratioh = $max_height / $height;
                        $ratiow = $max_width / $width;
                        $ratio = min($ratioh, $ratiow);
                        $width = intval($ratio * $width);
                        $height = intval($ratio * $height);
                        echo '
					 <div class="carousel-item col-md-4 col-8 ';if ($row['id']==1){echo 'active ';} echo '">
					 	  <div style="height:620px !important;" class="card card-hz">
						 		<img style="float:left;" src="' . $img_path . '" width="' . $width . '" height="' . $height . '" alt="Card image cap"  />
								    <a href="#!"><div class="mask rgba-white-slight"></div></a>
                                     <a style=" width:25%; height:46px; border-radius:46px; background-color:#4285f4; text-align:center " class="btn-floating"><i style="color:#c0efbd;" class="fa fa-hand-o-down" ><p>-50%</p></i> </a>
						  <div style="padding:0;" class="card-body">
							  <h4 style="text-align:center; class="card-title"><a href="">' . $row["title"] . '</a></h4>
							  <p style="padding-left:8px; text-decoration:line-through;" class="style-price-grid"><h>Старая цена: </h><strong>' . $row["price"] . '</strong> руб.</p>
                              <p style="padding-left:8px;" class="style-price-grid">Новая цена: <strong>' . $row["new_price"] . '</strong> руб.</p>
							  <p style="padding-left:8px;" class="card-text">' . $row["content"] . '</p>
							              <a class="btn btn-primary">Купить</a>
						</div>
						</div>
                        </div>';
                        }

                }while ($row = mysqli_fetch_array($result));
            }
            ?>
        </div>
        <!--Controls-->
        <button class="btn-floating btn-large waves-effect" type="button"  data-bs-target="#myCarousel" data-bs-slide="prev"><i
                    class="fa fa-chevron-left"><title>1</title></i></button>
        <button class="btn-floating waves-effect" type="button" data-bs-target="#myCarousel" data-bs-slide="next"><i
                    class="fa fa-chevron-right"><title>2</title></i></button>
        <!--/.Controls-->
    </div>
</div>
<!--/.Carousel Wrapper-->

<div class="row">
    <!-- <div class="col-sm-4 mb-3 mb-md-0">-->
    <!-- Card Light -->
    <div class="card col-lg">

        <!-- Card image -->
        <div class="view overlay  ">
            <img class="card-img-top" src="img/left-block.jpg" alt="Card image cap">
            <a>
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>

        <!-- Card content -->
        <div class="card-body">


            <!-- Title -->
            <h4 class="card-title">Питательные вещества, необходимые собакам</h4>
            <hr>
            <!-- Text -->
            <p class="card-text">Водорастворимые витамины
                Каждое живое существо нуждается в комплексе питательных веществ и элементов, которые сделают работу его
                организма слаженной и правильной. Не являются исключением и домашние животные, которые требуют даже
                большего ухода, чем фауна дикой природы, ведь они привыкли к постоянному контролю и заботе. Основной
                перечень компонентов, которые обязательно должны присутствовать в рационе каждой собаки, можно вместить
                в такие пункты: белки, жиры, углеводы, минералы, витамины, вода. Все это, в свою очередь, подразделяется
                на то, что можно заменить и то, обойтись без чего собака никак не сможет.</p>
            <!-- Link -->
            <a href="#!" class="black-text d-flex justify-content-end"><h5>Читать полностью <i
                            class="fa fa-angle-double-right"></i></h5></a>

        </div>

    </div>
    <div class="card col-lg">

        <!-- Card image -->
        <div class="view overlay">
            <img class="card-img-top" src="img/right-block.jpg" alt="Card image cap">
            <a>
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>

        <!-- Card content -->
        <div class="card-body">

            <!-- Social shares button -->

            <!-- Title -->
            <h4 class="card-title">Запретные продукты для собак</h4>
            <hr>
            <!-- Text -->
            <p class="card-text">Как бы ни было велико наше желание угодить своим четвероногим друзьям, оно часто имеет
                больше отрицательных моментов, чем положительных. Ведь зачастую мало кто из нас знает о запретных для
                собак продуктах, и, угощая их своей едой мы, бывает, сильно вредим их здоровью.</p>
            <!-- Link -->
            <a href="#!" class="black-text d-flex justify-content-end"><h5>Читать полностью <i
                            class="fa fa-angle-double-right"></i></h5></a>

        </div>

    </div>
    <!-- Card Light -->
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
                <p>Корпорация «Pet-korm» изготавливает корма для животных из высококачественных, безопасных
                    продуктов.</p>

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

</body>

</html>


