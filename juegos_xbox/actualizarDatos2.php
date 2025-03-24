<?php

session_start();

require '../bd.php';

$id = $conn->real_escape_string($_POST['id']);
$nombre = $conn->real_escape_string($_POST['nombre']);
$descripcion = $conn->real_escape_string($_POST['descripcion']);
$genero = $conn->real_escape_string($_POST['genero']);

$sql = "UPDATE videojuegos_xbox SET nombre ='$nombre', descripcion = '$descripcion', id_genero=$genero WHERE id=$id";

if ($conn->query($sql)) {

    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Registro actualizado";

    if ($_FILES['imagen']['error'] == UPLOAD_ERR_OK) {
        $permitidos = array("image/jpg", "image/jpeg");
        if (in_array($_FILES['imagen']['type'], $permitidos)) {

            $dir = "imagenes";

            $info_img = pathinfo($_FILES['imagen']['name']);
            $info_img['extension'];

            $imagen = $dir . '/' . $id . '.jpg';

            if (!file_exists($dir)) {
                mkdir($dir, 0777);
            }

            if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen)) {
                $_SESSION['color'] = "danger";
                $_SESSION['msg'] .= "<br>No se pudo guardar la imagen";
            }
        } else {
            $_SESSION['color'] = "danger";
            $_SESSION['msg'] .= "<br>Formato de imagen inválido";
        }
    }
} else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Actualización del registro fallida";
}

$conn->close();

header('Location: index2.php');