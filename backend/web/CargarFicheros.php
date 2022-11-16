<?php

// Cómo subir el archivo
$fichero = $_FILES["file"]; 
// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($fichero["tmp_name"], "http://admin.spp.valladolid.tecnm.mx/subidas/".$fichero["name"]);

// Redirigiendo hacia atrás
       header('Refresh:0; url=http://spp.valladolid.tecnm.mx/index.php?r=periodicidad%2Findex');
        echo '<script>alert("¡El archivo se ha enviado satisfactoriamente!")</script>';
       

    // Recargar la página despues de 10 segundos y redireccionar a "controlador.php"
   
    
?>

