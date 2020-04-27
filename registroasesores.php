<?php
$usuario = $_POST["Usuario"];
$pass = $_POST["pass"];
$nomcom = $_POST["nomcom"];
$docid = $_POST["docid"];
$telf = $_POST["telf"];
$cdseg = $_POST["cdseg"];

include "conexion.php";

$sql = "INSERT INTO asesores (usuario, pass, nomcom, docid, telef, cdseguridad)
VALUES ('$usuario', '$pass', '$nomcom', '$docid', '$telf', '$cdseg')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<script> 
window.location.replace('listadoasesores.php'); 
</script>