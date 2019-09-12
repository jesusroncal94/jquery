$(document).ready(function(){
    $('#departamentos').trigger('change click focus');
    $('#departamentos').on('change click focus', function(){
        var idDepartamento = $('#departamentos').val();
        if(idDepartamento) {
            $.ajax({
                async: false,
                type: "POST",
                url: "provincias.php",
                data: {departamento: idDepartamento},
                success: function(r) {
                    $('#provincias').html(r);
                    $('#distritos').html('<option value = "">Seleccione una provincia</option>');
                }
            });
        } else {
            $('#provincias').html('<option value = "">Seleccione un departamento</option>');
            $('#distritos').html('<option value = "">Seleccione una provincia</option>');
        }
    });
    
    $('#provincias').on('change click focus', function(){
        var idDepartamento = $('#departamentos').val();
        var idProvincia = $('#provincias').val();
        $.ajax({
            async: false,
            type: "POST",
            url: "distritos.php",
            data: {departamento: idDepartamento, provincia: idProvincia},
            success: function(r) {
                $('#distritos').html(r);
            }
        });
    });
})