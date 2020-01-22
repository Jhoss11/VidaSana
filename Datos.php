
<?php
	$conectar=@mysql_connect('localhost','root','');
	if(!$conectar){
	 echo "No Se Pudo conectar con el servidor";
	 }else{
	 $base=mysql_select_db('prueba');
	 if(!$base){
	 echo"No Se encontro la base de datos";
	 }
	}

$nombre=$_GET["nombre"];
$email=$_GET["email"];
$message=$_GET["message"];

$sql="INSERT INTO datos VALUES
('$nombre',
'$email'
'$message')";
$ejecutar=mysql_query($sql);
if(!$ejecutar){
	echo"Hubo Error";
}else{
	echo"Datos correctamente guardados";
}
?>