<?php

if(!empty($_POST)){
	if(isset($_POST["ced_prog"]) &&isset($_POST["nom_prog"]) &&isset($_POST["ape_prog"]) &&isset($_POST["mail_prog"]) &&isset($_POST["leng_prog"])){
		if($_POST["nom_prog"]!=""&& $_POST["ape_prog"]!=""&&$_POST["ced_prog"]!=""){
			include "conexion.php";
			$sql2= "select * from programador where ced_prog='".$_POST["ced_prog"]."'";
			$query = $con->query($sql2);
			if($query->num_rows==0){
				$date=date('Y-m-d');
				$sql = "insert into programador(ced_prog,nom_prog,ape_prog,mail_prog,leng_prog,date_insert) value (\"$_POST[ced_prog]\",\"$_POST[nom_prog]\",\"$_POST[ape_prog]\",\"$_POST[mail_prog]\",\"$_POST[leng_prog]\",\"$date\")";
				$query2 = $con->query($sql);
				}
				else{
					echo '<div class="alert alert-danger" role="alert">
Existe un programador con la misma cedula, intente nuevamente...
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
</button>
</div>';

				}


		}
	}
}



?>
