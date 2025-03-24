<?php

require '../bd.php';

$id = $conn->real_escape_string($_POST['id']);

$sql = "SELECT id, nombre, descripcion, id_genero FROM videojuegos_ps2 WHERE id=$id LIMIT 1";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;

$videojuegos_ps2 = [];

if ($rows > 0) {
    $videojuegos_ps2 = $resultado->fetch_array();
}

echo json_encode($videojuegos_ps2, JSON_UNESCAPED_UNICODE);