<?php

require 'bd.php';

$id = $conn->real_escape_string($_POST['id']);
$nombre = $conn->real_escape_string($_POST['nombre']);
$descripcion = $conn->real_escape_string($_POST['descripcion']);
$genero = $conn->real_escape_string($_POST['genero']);

$sql = "UPDATE videojuego SET nombre ='$nombre', descripcion = '$descripcion', id_genero=$genero WHERE id=$id";
if ($conn->query($sql)) {
}

$conn->close();

header('Location: index.php');