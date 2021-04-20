<?php $seccion = "contacto"; 
include 'header.php'; ?>

<section>
	<div class="ContainerGeneral">
		<h3>CONTACTO</h3>
			<div class="col-30">
				<p class="titleContactoForm">FORMULARIO DE CONTACTO</p>
				<p>Use el formulario a su derecha para ponerse en contacto con nosotros y responderemos a la brebedad.</p>
				<p class="titleContactoForm">CONTACTO RÁPIDO</p>
				<li class="listaDire"><i class="fa fa-map-marker" aria-hidden="true"></i><p>Dirección</p></li>
				<li class="listaDire"><i class="fa fa-phone" aria-hidden="true"></i><p>0800 333 1710 / 4951-5824</p></li>
				<li class="listaDire"><i class="fa fa-envelope" aria-hidden="true"></i><p>oncetex@gmail.com</p></li>
			</div>
			<div class="col-70">
				<div class="formContacto">
					<form>
						<input type="text" placeholder="Su nombre (requerido)" class="inputContacto" name="Nombre"></input>
						<input type="email" placeholder="Su email (requerido)" class="inputContacto" name="Email"></input>
						<input type="text" placeholder="Asunto" class="inputContacto" name="Asunto"></input>
						<textarea type="text" placeholder="Su mensaje" class="inputContacto" name="Mensaje"></textarea>
						<input type="submit" value="ENVIAR" name="enviar" class="SubmitBtn"></input>
					</form>
				</div>
				</div>
			<h3>¿DONDE ENCONTRARNOS?</h3>
		</section>
	</div><!--/.ContainerGeneral-->
</section>
<?php include 'footer.php'; ?>