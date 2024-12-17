<?php

require 'bd.php';

$id = $conn->real_escape_string($_POST['id']);

$sql = "SELECT id, nombre, descripcion, id_genero FROM videojuego WHERE id=$id LIMIT 1";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;

$videojuego = [];

if ($rows > 0) {
    $videojuego = $resultado->fetch_array();
}

echo json_encode($videojuego, JSON_UNESCAPED_UNICODE);