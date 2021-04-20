<?php 
session_start();
unset($_SESSION);
session_unset();
session_destroy();

echo "<meta content='0;URL=index.php?content=Formularioresgistro.php' http-equiv='REFRESH'> </meta>";
header('Location: ../'); 