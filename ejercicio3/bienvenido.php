<html>
<head>
<title>Bienvenido al sistema de acceso</title>
</head>
<body>

<?php

  function verificarClaves($usu,$pass)
  {
    if ($usu!=$pass)
	  echo "Las claves no estan incorrectas
  }
  
  verificarClaves($_REQUEST['usuario'],$_REQUEST['clave']);

$pass = array(

	'ana' => 'pass',
	'diana' => '12345',
	'luis' => '123',
	'michelle' => '1234',
	'fernando' => 'admin'

);

echo $pass[];


?>
<h2>Se hyan verificado las claves :V</h2>
</body>
</html>