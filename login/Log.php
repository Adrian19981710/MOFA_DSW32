<?php
print_r($_REQUEST);
$nombre=(isset($_REQUEST['username'])?$_REQUEST['username']:null);
$passw=(isset($_REQUEST['psw'])?$_REQUEST['psw']:null);

$respuesta[]=null;

if($nombre=="admin"){
	if($passw=="jaguar"){
		$respuesta['error']=0;
		$respuesta['mensaje']="Bienvenido".$nombre;
	}else{
		$respuesta['error']=2;
		$respuesta['mensaje']="Password incorrecto";
	}
}else{
		$respuesta['error']=1;
		$respuesta['mensaje']="Nombre de usuario inexistente";
}
echo json_encode($respuetsa,0);
?>