<?php
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'productos';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error: " . mysqli_connect_error());
}

function eliminarIDImpar($conn) {
    $query = "DELETE FROM productos WHERE id % 2 != 0";

    if (mysqli_query($conn, $query)) {
        return true;
    } else {
        return false;
    }
}

if (eliminarIDImpar($conn)) {
    echo "Se eliminaron los productos con ID impar.";
} else {
    echo "Error al eliminar productos con ID impar: " . mysqli_error($conn);
}


mysqli_close($conn);
?>