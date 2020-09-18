<?php

if(!empty($_POST)){
	if(isset($_POST["ced_prog"]) &&isset($_POST["nom_prog"]) &&isset($_POST["ape_prog"]) &&isset($_POST["mail_prog"]) &&isset($_POST["leng_prog"])){
		if($_POST["nom_prog"]!=""&& $_POST["ape_prog"]!=""&&$_POST["ced_prog"]!=""){
			include "conexion.php";

			$sql = "update programador set nom_prog=\"$_POST[nom_prog]\",ape_prog=\"$_POST[ape_prog]\",mail_prog=\"$_POST[mail_prog]\",leng_prog=\"$_POST[leng_prog]\" where ced_prog=".$_POST["ced_prog"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>
