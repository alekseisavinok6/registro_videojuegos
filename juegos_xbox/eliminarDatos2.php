<?php

session_start();

require '../bd.php';

$id = $conn->real_escape_string($_POST['id']);

$sql = "DELETE FROM videojuegos_xbox WHERE id=$id";

if ($conn->query($sql)) {

    $dir = "imagenes";
    $imagen = $dir . '/' . $id . '.jpg';

    if (file_exists($imagen)) {
        unlink($imagen);
    }

    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Registro eliminado";
} else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Fallo al eliminar registro";
}

$conn->close();

header('Location: index2.php');