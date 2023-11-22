<?php
require_once 'vendor/autoload.php';

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
$datos = [];

while($row=$result->fetch_assoc()){
    $dato=[
      "id"=>$row['paciente_id'],
      "nombre"=>$row['nombre'],
      "fecha_nacimiento"=>$row['fecha_nacimiento'],
    ];
    $datos[]=$dato;
}

$faker = Faker\Factory::create();

// generate data by accessing properties
echo $faker->name;
  // 'Lucy Cechtelar';
//echo $faker->address;
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"

//echo json_encode($datos);
$conn->close();
?>