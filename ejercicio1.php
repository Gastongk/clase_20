<?php
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'productos';


$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error: " . mysqli_connect_error());
}

$nombre = "Notebook";
$precio = 500.000;

$query = "INSERT INTO productos (nombre, precio) VALUES ('$nombre', $precio)";

if (mysqli_query($conn, $query)) {
    echo "Producto agregado correctamente";
} else {
    echo "Error al agregar el producto: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

