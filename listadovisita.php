<html>
<head>
  <title>.: LISTA :.</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>		
</head>

<body>
            <div class="container"><br>
                <a href="registrovisita.html" class="btn btn-success" role="button">Registrar una nueva visita</a> 
                <a href="index.html" class="btn btn-primary" role="button">Regresar a menú principal</a>
                <br>
                <br>
            <!-- cuerpo total -->
            
                <table class="table">
                    <thead class="thead-dark">
                    <tr class="w3-red">
                        <th>Nro visita</th>
                        <th>Usuario</th>
                        <th>Entidad</th>
                        <th>Contacto</th>    
                        <th>telefono</th>
                        <th>Afiliaciones</th>
                        <th>Actividad</th>    
                    </tr>
                    </thead>
                    <tr>
                     <?php
                     include "conexion2.php";
                     
                            // Check connection
                     
                     if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT distinct Nvisita, Usuario, ent, Contacto, telefono, afil, Activ FROM visitas ORDER BY Nvisita ASC";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            
                            echo " <tr><td>" . $row["Nvisita"]. "</td><td>" .$row["Usuario"] ."</td>" ."<td>" .$row["ent"] ."</td>" ."<td>" .$row["Contacto"] 
                            ."</td><td>"  . $row["telefono"]. "</td><td>" .$row["afil"]. "</td>" ."<td>" .$row["Activ"]. "</td><tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    ?> 
                </tr>
            </table><br><br>
        </div>    
</body>
</html>