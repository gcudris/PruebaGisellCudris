<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from programador where ced_prog = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>

<?php if($person!=null):?>

<form role="form" id="actualizar" >
  <div class="form-group">
    <label for="name">Cedula</label>
    <input type="text" class="form-control" value="<?php echo $person->ced_prog; ?>" name="ced_prog" required>
  </div>
  <div class="form-group">
    <label for="lastname">Nombres</label>
    <input type="text" class="form-control" value="<?php echo $person->nom_prog; ?>" name="nom_prog" required>
  </div>
  <div class="form-group">
    <label for="address">Apellidos</label>
    <input type="text" class="form-control" value="<?php echo $person->ape_prog; ?>" name="ape_prog" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" value="<?php echo $person->mail_prog; ?>" name="mail_prog" >
  </div>
  <div class="form-group">
    <div class="form-group">
      <label for="phone">Lenguajes</label>
      <textarea type="text" class="form-control" name="leng_prog" ><?php echo $person->leng_prog; ?></textarea>
    </div>

  </div>
<input type="hidden" name="id" value="<?php echo $person->ced_prog; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>

<script>
    $("#actualizar").submit(function(e){
    e.preventDefault();
    $.post("./php/actualizar.php",$("#actualizar").serialize(),function(data){
    });
    //alert("Agregado exitosamente!");
    //$("#actualizar")[0].reset();
    $('#editModal').modal('hide');
$('body').removeClass('modal-open');
$('.modal-backdrop').remove();
    loadTabla();
  });
</script>

<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>
