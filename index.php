<?php
include_once "system/libs/Main.php";
include_once "system/libs/Load.php";
include_once "system/libs/Dmodel.php";
include_once "system/libs/Database.php";
include_once "system/libs/Tcontroller.php";
$url = isset($_GET['url'])?$_GET['url']:NULL;
if($url != null ){
	$url = rtrim($url,'/');
	$url = explode("/",$url);
}else{
		unset($url);
	}
if(isset($url[0])){
	include'app/controllers/'.$url[0].'.php';
	$controller = new $url[0]();
if(isset($url[2])){
	$func = $url[1];
	$param = $url[2];
	$controller->$func($param);
}else{
	if(isset($url[1]))
	$func = $url[1];
    $controller->$func();
}
}else{
	include 'app/controllers/Index.php';
	$con = new Index();
	$con->home();
}
?>