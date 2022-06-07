<?php 

    echo "Hola heroku y github (base de datos)";

    if (!($conexion=mysqli_connect("4.tcp.ngrok.io:10307","root","password","almacen"))) { 
      echo "Error al conectar";
    } 

    $res = mysqli_query($conexion,"SELECT * FROM product") or die(mysqli_error($conexion)); ;

    while($reg = mysqli_fetch_array($res)){
        echo '<div class="row text-center b-10 boder-secondary border-radius border-5"><div class="col-3 bg-primary border boder-secondary  border-2">'.$reg["id"].'</div>';
        echo '<div class="col-3 bg-primary border boder-secondary  border-2">'.$reg["name"].'</div>';
        echo '<div class="col-3 bg-primary border boder-secondary  border-2">'.$reg["price"].'</div>';
        echo '<div class="col-3 bg-primary border boder-secondary  border-2">'.$reg["description"].'</div></div>';
    }

?>

