<?php include("../db.php"); ?>

<?php


if (isset($_POST['cargar_lugar'])) {

  $description = $_POST['description'];
  $andress =  $_POST['andress'];
  $city =  $_POST['city'];
  $country =  $_POST['country'];
  $km_from_town =  $_POST['km_from_town'];
  $remarks =  $_POST['remarks'];
  $lat_lon = $_POST['link_maps'];
  $link_maps = 'https://www.google.es/maps?q=' . $_POST['link_maps'];
  $user = $_SESSION['user'];
  $company = $_SESSION['company'];

  $query = "INSERT INTO `customer_unload_place` (`description`, `andress`, `city`, `country`, `lat_lon`, `link_maps`, `km_from_town`,`user`, `company`, `remarks`) 
VALUES ('$description','$andress','$city','$country','$lat_lon','$link_maps','$km_from_town','$user','$company','$remarks')";
  return $query;

  $result = mysqli_query($conn, $query);

  if (!$result) {

    $_SESSION['message'] = 'el Lugar de Descarga ' . $description . ' no se pudo editar';
    $_SESSION['message_type'] = 'danger';
    header('location:../views/misLugaresDeDescarga.php');
  } else {

    $_SESSION['message'] = 'Se creó correctamente el Lugar de Descarga ' . $razon_social;
    $_SESSION['message_type'] = 'success';
    header('location:../views/misLugaresDeDescarga.php');
  }
}

?>