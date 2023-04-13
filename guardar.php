<?php
/*$servername = "aws.connect.psdb.cloud";
$username = "6pix5nw02tg5ybzlanog";
$password = "pscale_pw_myIPDcBe86dEOnarbl7J1gwb010njhrcVU3Gnt6utcR";
$dbname = "sitio-web";
*/
$conn = mysqli_init();
$conn->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
$conn->real_connect($_ENV["HOST"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DATABASE"]);
// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Obtiene el texto ingresado en el formulario
$texto = $_POST["texto"];
$correo = $_POST["correo"];

// Guarda el texto en la tabla "textos"
$sql = "INSERT INTO informacion VALUES ('$correo','$texto')";
if ($conn->query($sql) === TRUE) {
  echo "El texto se guardó correctamente en la base de datos.";
} else {
  echo "Error al guardar el texto en la base de datos: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>
