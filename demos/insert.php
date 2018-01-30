<?php
  $connection = mysqli_connect('localhost', 'root', '', 'cabanadb');
    if($_POST['id_admin']){
      $id_admin = $_POST['id_admin'];
      $cmp_fecha = $_POST['cmp_fecha'];
      $activo= $_POST['activo'];
      $precio = $_POST['precio'];

      $q = "INSERT INTO calendario_tbl (id_admin, cmp_fecha, activo, precio) VALUES ('$id_admin', '$cmp_fecha', '$activo', '$precio')";

      $query = mysqli_query($connection, $q);

      if($query){
          echo json_encode("1");
          }
      else {
          echo json_encode('0');
          }
      }
?>