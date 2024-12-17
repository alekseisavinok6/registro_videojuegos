<?php

require 'bd.php';

$id = $conn->real_escape_string($_POST['id']);


$sql = "DELETE FROM videojuego WHERE id=$id";
if ($conn->query($sql)) {
}

$conn->close();

header('Location: index.php');