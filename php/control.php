<?php

ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);

$username = $_POST['username'];
$password = $_POST['password'];

function Conectarse(){

	if(!($link=mysql_connect('SupermercadoOS.db.4684682.hostedresource.com','SupermercadoOS','Sup3rm3rc4d0!')))
	{
		echo "Error conectando a la base de datos";
		exit();
	}
	if(!mysql_select_db("SupermercadoOS",$link))
	{
		echo "Error seleccionando base de datos";
		exit();
	}
	return $link;
}
mysql_query("SET NAMES 'utf8'");

$con = Conectarse();
$query = "SELECT * FROM usuarios WHERE username = '".$username."' AND pass = '".md5($password)."'";
$q = mysql_query($query, $con);

try{

if(mysql_result($q,0))
{
	session_start();
	$_SESSION["autentificado"] = true;
	$_SESSION["user"] = $_POST["user"];
	header("Location: ../inicio.php");

}
else
	header("Location: ../index.php?error=data");
}
catch(Exception $error){}
mysql_close($con);
?>