<?php

echo "<h1>Hola desde Robert</h1>";
echo "<h2>algo mas para decir....</h2>";


    // esp32/pepito.php?nombre=Robert
    
$servername = "ec2-52-202-185-87.compute-1.amazonaws.com";
$database = "d79gdtjvldehc6";
$username = "tsmjrcqunicnlx";
$password = "156c2dadd79b76cf6782243d0c90c1af4f3003ae32a1d0c12157f815517db330";

$nombre = $_GET['nombre'];


$mysqli = new mysqli($servername, $username, $password, $database);
if ($mysqli->connect_errno) {
    echo "Fallo la conexion a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$resultado = $mysqli->query("SELECT * FROM ESPcommands WHERE ESPid like '$nombre'");


    while($row = $resultado->fetch_array(MYSQL_ASSOC)) {
            $myArray[] = $row;
    }
    echo json_encode($myArray);
    


$mysqli->close();


?>
