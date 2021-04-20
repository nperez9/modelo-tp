<?php 
$seccion = "productos"; 
require_once './include/functions.php'; 
include 'header.php'; 

$productos = get_ArraySQL('SELECT titulo,precio,imagen,id FROM productos');
?>
<div class="ContainerGeneral">
	<section>
		<h3>NUESTROS PRODUCTOS</h3>
	<?php 
		foreach($productos as $pro):
	?>
		<div class="ContenedorProducto">
			<div class="ContimagenProducto">
				<div class="contObscuro"> 
					<div><a href="ficha-producto.php?id=<?=$pro['id']?>" class="BuyButton">VER PRODUCTO</a></div>
				</div><!--/.contObscuro-->
				<img src="<?=$pro['imagen']?>">
			</div>
			<div class="ContTextProducto">
				<p><?=$pro['titulo']?></p>
				<p class="precio">$ <?=$pro['precio']?></p>
			</div>
		</div><!--/.ContenedorProducto-->
	<?php 
		endforeach; 
	?>
	</section>
</div>
<?php include 'footer.php'; ?>