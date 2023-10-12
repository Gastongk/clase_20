<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'productos';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error: " . mysqli_connect_error());
}

$select_query = "SELECT * FROM productos";

$result = mysqli_query($conn, $select_query);

if ($result) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Precio</th></tr>";
   
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['precio'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>