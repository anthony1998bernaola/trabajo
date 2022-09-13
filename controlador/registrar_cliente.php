<?php
if(isset($_POST["registrar"])){
 if(!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["direccion"])){
  $nombre=$_POST["nombre"];
  $apellido=$_POST["apellido"];
  $direccion=$_POST["direccion"];
  $sql=$conexion->query("INSERT INTO cliente(nombres,apellidos,direccion) values('$nombre','$apellido','$direccion')");
  if($sql==1){
    echo '<div class="alert alert-success">cliente registrado</div>';
  }else{
    echo "no se pudo registrar";
  }
 }else{
    echo "los campos estan vacios";
 }
}
?>