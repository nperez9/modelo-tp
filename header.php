
<!DOCTYPE html>
<html>
<head>
<title>Once Tex</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/ionicons.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" href="css/animsition.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css">
<body>
<div class="animsition">
<nav>
<div class="ContainerGeneral">
	<div class="ContainerLogoNav">
		<a href="index.php"><img class="responsive" src="img/logo.png"></a>
	</div><!--/.ContainerLogoNav-->
	<div class="show_hide">
		<i class="fa fa-bars" aria-hidden="true"></i>
	</div>
	<div class="ContactoButtonNav">
		<div class="ContactoParte">
			<p><i class="fa fa-phone" aria-hidden="true"></i>0800 333 1710</p>
			<p><i class="fa fa-envelope-o" aria-hidden="true"></i>oncetex@gmail.com</p>
		</div><!--/.ContactoParte-->
		<div class="ContactoParte">
			<div class="NavButtonDsk <?php if ($seccion == "contacto") {
				echo " active";
			}?>"><a href="contacto.php">Contacto</a></div>
			<!--<div class="NavButtonDsk <?php if ($seccion == "nosotros") {
				echo " active";
			}?>"><a href="nosotros.php">Nosotros</a></div>-->
			<div class="NavButtonDsk <?php if ($seccion == "productos") {
				echo " active";
			}?>"><a href="productos.php">Productos</a></div>
			<div class="NavButtonDsk <?php if ($seccion == "index") {
				echo " active";
			}?>"><a href="index.php">Home</a></div>
		</div><!--/.ContactoParte-->
	</div><!--/.ContactoButtonNav-->
</div><!--/.ContainerGeneral-->	
</nav>
<div class="ajusteTamaño"></div>
<div class="slidingDiv">
		<div class="NavButtonDsk"><a href="index.php">Home</a></div>
		<div class="NavButtonDsk"><a href="productos.php">Productos</a></div>
		<!--<div class="NavButtonDsk"><a href="nosotros.php">Nosotros</a></div>-->
		<div class="NavButtonDsk"><a href="contacto.php">Contacto</a></div>
</div><!--/.slidingDiv-->