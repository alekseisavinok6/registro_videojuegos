<?php

require 'bd.php';

$id = $conn->real_escape_string($_POST['id']);

$sql = "SELECT id, nombre, descripcion, id_genero FROM videojuego2 WHERE id=$id LIMIT 1";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;

$videojuego2 = [];

if ($rows > 0) {
    $videojuego2 = $resultado->fetch_array();
}

echo json_encode($videojuego2, JSON_UNESCAPED_UNICODE);