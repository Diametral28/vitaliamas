<?php
$servername = "mx78.hostgator.mx";
$username = "vitalia1_user";
$password = "uservitaliamas123";
$dbname = "vitalia1_formulario";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//if(isset($_POST["submit"])){

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO cliente (nombre, correo, whatsapp )VALUES ('".$_POST["nombre"]."','".$_POST["correo"]."','".$_POST["whatsapp"]."')";

if (mysqli_query($conn, $sql)) {
    header('Location: https://www.vitaliamas.com/php/mensaje.php?mensaje=Registro ingresado con éxito');
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
    header('Location: https://www.vitaliamas.com/php/mensaje.php?mensaje='.mysqli_error($conn).'');
}
    $conn->close();
//}

?>