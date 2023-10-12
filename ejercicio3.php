<?php
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'productos';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error: " . mysqli_connect_error());
}

$ok_100_prod = 0;

for ($i = 1; $i <= 100; $i++) {
    $nombre = "Producto " . $i;
    $precio = rand(10, 1000);

    $query = "INSERT INTO productos (nombre, precio) VALUES ('$nombre', $precio)";

    if (mysqli_query($conn, $query)) {
        $ok_100_prod++;
    }
}

if ($ok_100_prod === 100) {
    echo "Se agregaron 100 productos.";
} else {
    echo "Error al agregar productos.";
}

mysqli_close($conn);
?>