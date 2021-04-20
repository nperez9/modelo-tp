<?php include (HTML_DIR.'include/head.php'); ?>
<div class="container">
	<div class="row super-container">
		<h3>Los campos marcados con un * son obligatorios </h3>
		<form method="POST" action="./index.php?view=database&accion=edit" enctype="multipart/form-data">
			<div class='form-group'>
				<label target='titulo'>Titulo *</label>
				<input type="text" value="<?=$producto['titulo']?>" name="titulo" class="form-control" maxlength="80" required>
			</div>
			<div class="form-group">
				<label target='precio'>Precio *</label>
				<input type="number" name="precio" class="form-control" value='<?=$producto['precio']?>' maxlength="15" required>
			</div>
			<div class="form-group">
				<label target='descripcion'>Descripcion *</label>
				<textarea id="" name="descripcion" class="form-control super-textbox" required><?=$producto['descripcion']?></textarea>
			</div>
			<div class="form-group">
				<img src="../<?=$producto['imagen']?>" alt="">
				<label class='super-label' >Subi una Imagen *</label>
				<input type="file" name="imagen" value="selecciona un archivo" >
			</div>
			<div class="form-group">
				<label target='tela'>Tela</label>
				<textarea id="" name="tela" class="form-control super-textbox" required><?=$producto['tela']?></textarea>
			</div>
			<div class='checkbox'>
				<span class="super-label">Talles</span>
				<label for="talle_s"><input type="checkbox" class='talle-picker' value="S" name="talle[]" >S</label>
				<label for="talle_m"><input type="checkbox" class='talle-picker' value="M" name="talle[]">M</label>
				<label for="talle_l"><input type="checkbox" class='talle-picker' value="L" name="talle[]">L</label>
				<label for="talle_xl"><input type="checkbox" class='talle-picker' value="XL" name="talle[]">XL</label>
				<label for="talle_xxl"><input type="checkbox" class='talle-picker' value="XXL" name="talle[]">XXL</label>
				<label for="talle_xxl"><input type="checkbox" class='talle-picker' value="TS" name="talle[]">Talles Especiales</label>
			</div>
			<script>set_talles('<?=json_encode(explode(',',$producto['talles']))?>')</script>
			<div class="checkbox power-checkbox">
				<span class="super-label">Colores</span>
				<div class="colorbox">
					<input type="checkbox" class='color-picker' value='red'><span class="box-color" style='background-color:red;'></span> 
				</div>
				<div class="colorbox">
					<input type="checkbox" class='color-picker' value='blue'><span class="box-color" style='background-color:blue;'></span>
				</div>
				<div class="colorbox">
					<input type="checkbox" class='color-picker' value='white'><span class="box-color" style='background-color:white;'></span>
				</div>
				<div class="colorbox">
					<input type="checkbox" class='color-picker' value='black'><span class="box-color" style='background-color:black;'></span>
				</div>
				<div class="colorbox">
					<input type="checkbox" class='color-picker' value='green'><span class="box-color" style='background-color:green;'></span>
				</div>
				<div class="colorbox">
					<input type="checkbox" class='color-picker' value='yellow'><span class="box-color" style='background-color:yellow;'></span>
				</div>
				<div class="colorbox">
					<input type="checkbox" class='color-picker' value='#C2B280'><span class="box-color" style='background-color:#C2B280;'></span>
				</div>
				<div class="colorbox">
					<input type="checkbox" class='color-picker' value='#F5F5DC'><span class="box-color" style='background-color:#F5F5DC;'></span>
				</div>	
				<div class="colorbox">
					<input type="checkbox" class='color-picker' value='#704010'><span class="box-color" style='background-color:#704010;'></span>
				</div>	
				<div class="colorbox">
					<input type="checkbox" class='color-picker' value='#ff8c00'><span class="box-color" style='background-color:#ff8c00;'></span>
				</div>		
				<div class="colorbox">
					<input type="checkbox" class='color-picker' value='pink'><span class="box-color" style='background-color:pink;'></span>
				</div>		
				<div class="colorbox">
					<input type="checkbox" class='color-picker' value='#46b74f'><span class="box-color" style='background-color:#46b74f;'></span>
				</div>		
				<div class="colorbox">
					<input type="checkbox" class='color-picker' value='grey'><span class="box-color" style='background-color:grey;'></span>
				</div>
				<div class="colorbox">
					<input type="checkbox" class='color-picker' value='#808080'><span class="box-color" style='background-color:#808080;'></span>
				</div>	
				<div class="colorbox">
					<input type="checkbox" class='color-picker' value='#5F021F'><span class="box-color" style='background-color:#5F021F;'></span>
				</div>					
			</div>
			<script>set_colores('<?=json_encode(explode(',',$producto['colores']))?>')</script>
			<div class="checkbox power-checkbox">
				<span class="super-label">Destacado</span>
				<input type="checkbox" id='destacado-picker' value='' <?=($producto['destacado'] == 1) ? "checked" : "" ?> >
			</div> 
			<input type="hidden" name="destacado" value="" id='power-destacado'>
			<input type="hidden" name='colores' value='' id='power-colours'>
			<input type="hidden" name='talles' value='' id='power-talles'>
			<input type="hidden" name="id" value="<?=$id?>">
			<div class="form-group btn-guardar">
				<input type="submit" value="Guardar cambios" class="btn btn-info btn-lg" onclick='read_checks()'>
			</div>
		</form>	
	</div>
</div>

<?php include (HTML_DIR.'include/footer.php'); ?>