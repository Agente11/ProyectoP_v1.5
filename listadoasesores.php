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
                <a href="registroasesores.html" class="btn btn-success" role="button">Registrar nuevo asesor</a> 
                <a href="index.html" class="btn btn-primary" role="button">Regresar a menú principal</a>
                <br>
                <br>
            <!-- cuerpo total -->
            
                <table class="table">
                    <thead class="thead-dark">
                    <tr class="w3-red">
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Identificación</th>
                        <th>Teléfono</th>    
                        <th>Código</th>    
                    </tr>
                    </thead>
                    <tr>
                     <?php
                     include "conexion.php";
                     
                            // Check connection
                     
                     if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT distinct usuario, nomcom, docid, telef, cdseguridad FROM asesores ORDER BY usuario ASC";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            
                            echo " <tr><td>" . $row["usuario"]. "</td><td>" .$row["nomcom"] ."</td>" ."<td>" .$row["docid"] ."</td>" ."<td>" .$row["telef"] 
                            ."</td><td>"  . $row["cdseguridad"]. "</td><tr>";
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