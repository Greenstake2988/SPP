<?php

// Cómo subir el archivo
$fichero = $_FILES["file"]; 

// "Validación de imagenes"
if ( $fichero["type"]=='application/pdf' || $fichero["type"]=='application/vnd.ms-excel'|| $fichero["type"]=='image/jpeg'|| $fichero["type"]=='image/png'){
    header('Refresh:0; url=http://spp.valladolid.tecnm.mx/index.php?r=periodicidad%2Findex');
    echo '<script>alert("¡El archivo se ha enviado satisfactoriamente!")</script>';
    move_uploaded_file($fichero["tmp_name"], "../../frontend/web/subidas/".$fichero["name"]);
}else{
    header('Refresh:0; url=http://spp.valladolid.tecnm.mx/index.php?r=periodicidad%2Findex');
    echo '<script>alert("¡Subir un archivo con una extensión valida!")</script>';  
}

?>


