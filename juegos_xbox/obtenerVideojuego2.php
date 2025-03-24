<?php

require '../bd.php';

$id = $conn->real_escape_string($_POST['id']);

$sql = "SELECT id, nombre, descripcion, id_genero FROM videojuegos_xbox WHERE id=$id LIMIT 1";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;

$videojuegos_xbox = [];

if ($rows > 0) {
    $videojuegos_xbox = $resultado->fetch_array();
}

echo json_encode($videojuegos_xbox, JSON_UNESCAPED_UNICODE);