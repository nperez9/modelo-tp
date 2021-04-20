<?php 
if(isset($error)){$error = ""; }
include(HTML_DIR.'include/head.php')
?>
<body>
	<div class="container">
		<div class="row">
			<h1><?=$error?></h1>
			<h2> Oooops, parece que tenemos un error <?=$error?> </h2> 
			<a href="./index.php?view=list" class="btn btn-lg btn-default">Volver a la lista </a> 
		</div>
	</div>	
</body>
<?php 
include(HTML_DIR.'include/footer.php');
?> 