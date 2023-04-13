<?php
$servername = "aws.connect.psdb.cloud";
$username = "mpqvkn2y24j8c6rs2h0i";
$password = "pscale_pw_yWUXbGVGqc2hBuntQsAJJ6IqhQEj5P1yF7H48iBegTk";
$dbname = "sitio-web";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar si la conexión se ha establecido correctamente
if (!$conn) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

// Procesar los datos enviados desde el formulario HTML
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $cuerpo = $_POST["cuerpo"];

    // Insertar los datos en la tabla de la base de datos
    $sql = "INSERT INTO informacion (correo, cuerpo) VALUES ('$correo', '$cuerpo')";
    if (mysqli_query($conn, $sql)) {
        echo "El mensaje se ha guardado correctamente";
    } else {
        echo "Ha ocurrido un error al guardar el mensaje: " . mysqli_error($conn);
    }
}

// Cerrar la conexión con la base de datos
mysqli_close($conn);
?>
