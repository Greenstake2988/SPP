
        
<!doctype html>
<html>
<head>
<title>Cargar medios de verificación</title>

<style>
    .navbar-default .btn-link {
    color: #FFFFFF;
    }
    .navbar-default .navbar-brand {
    color: #FFFFFF;
    }
    .navbar-default .navbar-nav > li > a {
        color: #FFFFFF;
        }
    </style>
<style>
.caja{
border-radius: 5px;
}
</style>
<style>
.navbar {
	position: relative;
	min-height: 50px;
	margin-bottom: 5px;
  
}
.panel > .panel-heading {
    background-image: none;
    background-color: #AAB7B8;
    color: white;

}
</style>
<style>
.wrap > .container {
     padding: 0px 0px 0px; 
}
</style>
</head>
<div class="caja" style="background-color:#FFFFFF; color: write; height:100%; padding:1% 2%; width:103%; margin:0% 0% 2%">
<body style="background-color:#727A72; margin:0px;">
<div class="row">
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;">
<br>
<br>
<br>
<hr style="margin-top:5px;margin-bottom: 5px;">
<h></h>
<div class="container">
  <div class="row"> 
<!--tabla-->

    <div class="panel panel-primary">
      <div class="panel-heading" style="background-color: #AAB7B8;">
        <h3 class="panel-title" style="background-color:#AAB7B8;text-align:center;font-family:Impact; color:black; font-size: x-large;">MEDIOS DE VERIFICACIÓN</h3>
        
      </div>
      <div class="panel-body" style="background-color:#F4F9F9;">
   
<table class="table"  style="background-color:#E5F2F2;">
  <thead>
    <tr>
      <th width="7%">#</th>
      <th width="70%">Nombre del Archivo</th>
      <th width="13%">Descargar</th>
      <th width="10%">Eliminar</th>
    </tr>
  </thead>
  <tbody>
<?php
$archivos = scandir("subidas");
$num=0;
for ($i=2; $i<count($archivos); $i++)
{$num++;
?>
<p>  
 </p>
         
    <tr>
      <th scope="row"><?php echo $num;?></th>
      <td><?php echo $archivos[$i]; ?></td>
      <td><a title="Descargar Archivo" href="subidas/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> </a></td>
      <td><a title="Eliminar Archivo" href="Eliminar.php?name=subidas/<?php echo $archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('Esta seguro de eliminar el archivo?');"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a></td>
    </tr>
 <?php }?> 

  </tbody>
</table>
</div>
</div>
<!-- Fin tabla--> 
  </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
</div>
<h4 ><marquee BGCOLOR=#F2D7D5 ; style="color:red">Las fuentes de verificación son de todos los departamentos</marquee><h4 >
</body>
</div>
</html>
