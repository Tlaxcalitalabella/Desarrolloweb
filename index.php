<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css" >
    <title>Document</title>
</head>
<body>
    <nav class="navegacion" >
        <ul class="lista">
            <il><button  class="boton-nav"><a href="./nomadaaccesoex/acceso/index.html" >¿Quiénes somos?</a></button></il>
            <il><button  class="boton-nav"><a href="./nomadaaccesoex/index.html" >Acceso</a></button></il>
        </ul>    
    
    <nav>
    
    <form method='POST' enctype='multipart/form-data'>
        Subir imagen: <input type="file" name='imagen'>
        <input type='text' name='nombre'>
        <input type='submit' value='Subir'>
    </form>

    <?php
        require '/var/www/sites/RevistaNomadasDelSaber/funciones.php';
        require '/var/www/sites/RevistaNomadasDelSaber/funciones_ramas_conocimiento.php';
        $direccion = verificarImagen();
        i_ramas_conocimiento($direccion);   
        g_ramas_conocimiento();
    ?>    

    

    <h1>Ramas Conocimiento </h1>
    <ul id="ramas"></ul>


    <script src="./JS/main.js">

    </script>



</body>
</html>
