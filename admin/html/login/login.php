<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo APP_NAME; ?></title>
    <link rel="stylesheet" href="./public/css/login.css">
</head>
  <body>
    <div class="login">
		<h1>Login</h1>
	    <form method="post" action="index.php">
	    	<input type="text" name="usuario" placeholder="Usuario" required="required" maxlength="30" />
	        <input type="password" name="acceso" placeholder="Contraseña" required="required" maxlength="30"/>
	        <button type="submit" class="btn btn-primary btn-block btn-large">Ingresar</button>
	    </form>
	</div>
</body>
</html>
