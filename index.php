<?php include "departamentos.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba JQuery</title>
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script type = "text/javascript" src = "js/datos.js">
    </script>
</head>
<body>
    <label>DEPARTAMENTO: </label>
    <select id = 'departamentos' name = 'departamentos'>
        <?php echo $cadena ?></select>
    <br>
    <label>PROVINCIA: </label>
    <select id = 'provincias' name = 'provincias'>
        <option value = "">Seleccione un departamento</option>
    </select>
    <br>
    <label>CIUDAD: </label>
    <select id = 'distritos' name = 'distritos'>
        <option value = "">Seleccione una provincia</option>
    </select>
</body>
</html>