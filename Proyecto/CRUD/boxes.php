<?php
     $box = $_REQUEST['box'];
     include 'Conexion.php';
     $conexion = mysqli_connect($server, $user, $pass, $db);
     $sql = "SELECT * FROM boxes WHERE ID_Boxes = '$box'";
     $resultado = mysqli_query($conexion, $sql);
     while($row = mysqli_fetch_assoc($resultado)){
             echo "<option value='".$row['ID_Boxes']."'>".$row['Nombre']."</option>";
     }
     ?>