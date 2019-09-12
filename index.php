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
</head>
<body>
    <label>DEPARTAMENTO: </label>
    <select id = 'departamentos' name = 'departamentos'></select>
    <br>
    <label>PROVINCIA: </label>
    <select id = 'provincias' name = 'provincias'></select>
    <br>
    <label>CIUDAD: </label>
    <select id = 'distritos' name = 'distritos'></select>
</body>
</html>

<script type = "text/javascript">
    $(document).ready(function(){
        cargarDepartamentos();
        $('#departamentos').on('change', function(){
			var idDepartamento = $('#departamentos').val();
            $.ajax({
                type: "POST",
                url: "provincias.php",
                data: {departamento: idDepartamento},
                success: function(r) {
                    $('#provincias').html(r);
                }
            });
		});
        $('#provincias').on('change', function(){
			var idDepartamento = $('#departamentos').val();
            var idProvincia = $('#provincias').val();
            $.ajax({
                type: "POST",
                url: "distritos.php",
                data: {departamento: idDepartamento, provincia: idProvincia},
                success: function(r) {
                    $('#distritos').html(r);
                }
            });
		});
    })
</script>

<script type = "text/javascript">
    function cargarDepartamentos() {
        $.ajax({
            type: "POST",
            url: "departamentos.php",
            data: "",
            success: function(r) {
                $('#departamentos').html(r);
            }
        });
    }
</script>