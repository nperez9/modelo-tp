<?php 
$seccion = "productos";
require_once './include/functions.php'; 
include 'header.php';

$sql = 'SELECT * FROM productos WHERE id = '.$_GET['id'];  
$pro = get_ArraySQL($sql);
$item = $pro[0]; 
?>

<header>
<div class="ContainerGeneral">
	<a href="productos.php" class="volverAtras"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>Volver al listado</a>
</div><!--ContainerGeneral-->
</header>
<div class="ContainerGeneral">
	<section>
		<div class="ContenedorUnicoProd">
			<div class="colProdImagenBig">
				<img src="<?=$item['imagen']?>">
			</div><!--/.colProdImagenBig-->
			<div class="DatosDeProdUnico">
				<div class="TituloProd">
					<p class="titleProdBig"><?=$item['titulo']?></p>
					<p class="prcioProdBig">$ <?=$item['precio']?></p>
				</div>
				<div class="TituloProd">
					<div class="seccionDentroDeSeccion">
						<p class="detalleProdBigTitle">DESCRIPCION:</p>
						<p class="detalleProdBig"><?=$item['descripcion']?></p>
					</div><!--/.seccionDentroDeSeccion-->
					<div class="seccionDentroDeSeccion">
						<p class="detalleProdBigTitle">TELA:</p>
						<p class="detalleProdBig"><?=$item['tela']?></p>
					</div><!--/.seccionDentroDeSeccion-->
				<?php 
					$talles = get_array($item['talles']);
					if(count($talles) > 0): 
				?>
					<div class="seccionDentroDeSeccion">
						<p class="detalleProdBigTitle">TALLES:</p>
						<div class="containerTalles">
						<?php foreach($talles as $t): ?>
							<div class="detalleTalle"><?=$t?></div>
						<?php endforeach; ?> 
						</div><!--/.containerTalles-->
					</div><!--/.seccionDentroDeSeccion-->
				<?php 
					endif;  
					
					$colores = get_array($item['colores']);
					if(count($colores) > 0): 
				?>
					<div class="seccionDentroDeSeccion">
						<p class="detalleProdBigTitle">COLORES:</p>
						<div class="containerTalles">
						<?php foreach($colores as $c): ?>
							<div class="detalleTalle" style="background: <?=$c?>; border-color:black;" ></div>
						<?php endforeach; ?> 
						</div><!--/.containerTalles-->
					</div><!--/.seccionDentroDeSeccion-->
				<?php endif; ?>
				</div>
					<a href="contacto.php" class="btnProdBig"><i class="fa fa-shopping-cart" aria-hidden="true"></i> HACER PEDIDO</a>
			</div><!--/.DatosDeProdUnico-->
		</div><!--/.ContenedorUnicoProd-->
	</section>
<?php
	$sql = 'SELECT * FROM productos ORDER BY RAND() LIMIT 4';  
	$relacionadas = get_ArraySQL($sql);
?>
	<section>
		<h3>PRODUCTOS RELACIONADOS</h3>
	<?php foreach($relacionadas as $r): ?>
		<div class="ContenedorProducto">
			<div class="ContimagenProducto">
				<div class="contObscuro"> 
					<div><a href="ficha-producto.php?id=<?=$r['id']?>" class="BuyButton">VER PRODUCTO</a></div>
				</div><!--/.contObscuro-->
				<img src="<?=$r['imagen']?>">
			</div>
			<div class="ContTextProducto">
				<p><?=$r['titulo']?></p>
				<p class="precio">$ <?=$r['precio']?></p>
			</div>
		</div><!--/.ContenedorProducto-->
	<?php endforeach; ?>
	</section>
</div>
<?php include 'footer.php'; ?>