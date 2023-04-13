<?php
$servername = "aws.connect.psdb.cloud";
$username = "lcry2avnbkc3qbr4qlux";
$password = "pscale_pw_1UzcNtcXUjikr4Ta0sFWB13klnUrTbcrKWLJ6ubn2qo";
$dbname = "sitio-web";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Obtiene el texto ingresado en el formulario
$texto = $_POST["texto"];
$correo = $_POST["correo"];

// Guarda el texto en la tabla "textos"
$sql = "INSERT INTO usuarios (correo, cuerpo) VALUES ('$correo', '$texto')";
if (mysqli_query($conn, $sql)) {
  echo "Nuevo registro creado correctamente";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Cierra la conexión a la base de datos
$conn->close();
?>
