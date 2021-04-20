<?php $seccion = "index";
require_once './include/functions.php';  
include 'header.php'; 

$destacadas = get_ArraySQL('SELECT * FROM productos WHERE destacado = 1 LIMIT 4'); 
?>
<header>
<div class="ContainerGeneral">
	<div class="owl-carousel">
		<div><img src="img/934035821.jpg"></div>
		<div><img src="img/banner_2.jpeg"></div>
	</div>
		<div class="customNextBtn">
			<i class="fa fa-chevron-right" aria-hidden="true"></i>
		</div>
		<div class="customPrevBtn">
			<i class="fa fa-chevron-left" aria-hidden="true"></i>
		</div>
</div><!--ContainerGeneral-->
</header>
<div class="ContainerGeneral">
	<section>
		<h3>¿QUIENES SOMOS?</h3>
		<p style="text-align: left; font-size: 18px;">Somos una empresa con mas de 25 años en la fabricacion de indumentaria para la publicidad, colegios, clubes y escuelitas de futbol, etc.
		Somos fabricantes directos sin ningun tipo de intermediario, hoy nos encuentra con un local en pleno Once, donde atenderemos y asesoraremos a todos nuestros productos.
		Nuestra filosofía de trabajao es ajustar nuestro servicio a tus necesidades. Nuestra misión es acompañarlo y facilitarle el preceso de compra de lo que necesites mas facil y rapido.</p>	
	</section>
<?php 
	if(count($destacadas) > 0): 	
?>
	<section>
		<h3>DESTACADO</h3>
	<?php
		foreach($destacadas as  $des): 
	?>
		<div class="ContenedorProducto">
			<div class="ContimagenProducto">
				<div class="contObscuro"> 
					<div><a href="ficha-producto.php?id=<?=$des['id']?>" class="BuyButton">VER PRODUCTO</a></div>
				</div><!--/.contObscuro-->
				<img src="<?=$des['imagen']?>">
			</div>
			<div class="ContTextProducto">
				<p><?=$des['titulo']?></p>
				<p class="precio">$ <?=$des['precio']?></p>
			</div>
		</div><!--/.ContenedorProducto-->
	<?php endforeach;?> 
	</section>
<?php
	endif; 
?>
</div>
<?php include 'footer.php'; ?>