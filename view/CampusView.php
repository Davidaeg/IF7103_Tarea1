<?php

include 'public/header.php'

?>
<div class="container">
    <h1>Recinto de origen</h1>
    <form>
        <div class="form-group">
            <label for="learning_Style">Seleccione el Estilo: </label>
            <select id="learning_Style" class="form-control" name="learning_Style">
                <option value="0">Acomodador</option>
                <option value="1">Divergente</option>
                <option value="2">Convergente</option>
                <option value="3">Asimilador</option>
            </select>
        </div>
        <div class="form-group">
            <label for="average">Ultimo promedio de matricula:</label>
            <input type="text" class="form-control" id="average" placeholder="0.00" name="average">
        </div>
        <div class="form-group">
            <label for="gender">Sexo: </label>
            <select id="gender" class="form-control" name="gender">
                <option value="0">Masculino</option>
                <option value="1">Femenino</option>
            </select>
        </div>
        <button type="button" onclick="checkInput()" class="btn btn-primary">Calcular</button>
        <p>El recinto de origen es: <span id="loading" class="spinner-border"></span><span id="campus"></span> </p>
    </form>
</div>


<script>
    const isValid = /^(\d+)$|^(\d{1}\.{1}\d{2})$|^(\d{1}\.{1}\d{1})$/;//para validar el input del promedio
    window.onload = function() {
        $('#loading').hide();
    };

    function getCampus() {

        style = $('#learning_Style').val(); //Captura parametros
        average = $('#average').val();
        gender = $('#gender').val();

        //Crea vector con parametros
        parameters = {
            "style": style,
            "average": average,
            "gender": gender
        };

        //Consulta utilizando ajax
        $.ajax({
            url: '?controller=Main&action=getCampus',
            type: 'POST',
            data: parameters,
            beforeSend: function() {
                $('#campus').hide();
                $('#loading').show();
            },
            success: function(data) {
                $('#loading').hide()
                $('#campus').html(data);
                $('#campus').show();
            }
        });
    }

    /**
     * Comprueba si el promdio es válido antes de convocar al proceso que llamará al controlador
     */
    function checkInput() {
        let average = $('#average').val();
        if (!isValid.test(average) || average > 10 || average < 0) {
            alert('Ups ingresa un promedoi válido entre 0 y 10. Ejemplos \n7.5\n7.55\n7\n10');
            return;
        } else {
            getCampus();
        }
    }
</script>



<?php

include 'public/footer.php'

?>