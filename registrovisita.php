<?php

$Nvisita = $_POST["Nvisita"];
$Usuario = $_POST["Usuario"];
$ent =     $_POST["ent"];
$Contacto = $_POST["Contacto"];
$telefono = $_POST["telefono"];
$afil = $_POST["afil"];
$Activ = $_POST["Activ"];

include "conexion2.php";

$sql = "INSERT INTO visitas (Nvisita, Usuario, ent, Contacto, telefono, afil, Activ)
VALUES ('$Nvisita', '$Usuario', '$ent', '$Contacto', '$telefono', '$afil', '$Activ')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<script> 
window.location.replace('listadovisita.php'); 
</script>
