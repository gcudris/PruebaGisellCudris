<html>
	<head>
		<title>.: Prueba Gisell Cudris :.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link src="bootstrap/js/bootstrap.min.js">

		<script src="js/jquery.min.js"></script>
	</head>
	<body>

<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>PROGRAMADORES</h2>
<div id="respuesta"></div>
<!-- Button trigger modal -->
<form class="form-inline" role="search" id="buscar">
      <div class="form-group">
        <input type="text" name="s" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
  <a data-toggle="modal" href="#newModal" class="btn btn-default">Agregar</a>
    </form>

<br>
  <!-- Modal -->
  <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" id="agregar">
	<div class="form-group">
    <label for="cedula">Cedula</label>
    <input type="text" class="form-control" name="ced_prog" required>
  </div>
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="nom_prog" required>
  </div>
  <div class="form-group">
    <label for="lastname">Apellido</label>
    <input type="text" class="form-control" name="ape_prog" required>
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="mail_prog" >
  </div>
  <div class="form-group">
    <label for="phone">Lenguajes</label>
    <textarea type="text" class="form-control" name="leng_prog" ></textarea>
  </div>

  <button type="submit" class="btn btn-default">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

<div id="tabla"></div>


</div>
</div>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>

function loadTabla(){
  $('#editModal').modal('hide');

  $.get("./php/tabla.php","",function(data){
    $("#tabla").html(data);
  })

}

$("#buscar").submit(function(e){
  e.preventDefault();
  $.get("./php/busqueda.php",$("#buscar").serialize(),function(data){
    $("#tabla").html(data);
  $("#buscar")[0].reset();
  });
});

loadTabla();


  $("#agregar").submit(function(e){
    e.preventDefault();
    $.post("./php/agregar.php",$("#agregar").serialize(),function(data){
			$("#respuesta").html(data);
    });
    //alert("Agregado exitosamente!");

    $("#agregar")[0].reset();

    $('#newModal').modal('hide');
    loadTabla();
  });
</script>

	</body>
</html>
