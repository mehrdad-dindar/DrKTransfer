<?php
function config(){
	$server="localhost";
	$user="root";
	$password="";
	$db_name="drkazemi_paneluse";
	$conect=mysqli_connect($server,$user,$password,$db_name);
	mysqli_set_charset($conect, "utf8");
	mysqli_query($conect,"SET NAMES 'utf8' ");
	return $conect;

}
function newConfig(){
	$server="localhost";
	$user="root";
	$password="";
	$db_name="drkazemi";
	$conect=mysqli_connect($server,$user,$password,$db_name);
	mysqli_set_charset($conect, "utf8");
	mysqli_query($conect,"SET NAMES 'utf8' ");
	return $conect;

}