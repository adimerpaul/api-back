<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM pacientes";
$result = $conn->query($sql);
echo "<table border=1>";
echo "<tr><th>id</th><th>Nombre</th><th>Facha Nacimiento</th></tr>";
while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row['paciente_id']."</td><td>".$row['nombre']."</td><td>".$row['fecha_nacimiento']."</td></tr>";
}
echo "</table>";

$conn->close();
?>