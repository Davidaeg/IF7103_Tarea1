<?php

include 'public/header.php'

?>
<div class="container">
    <h1>Sexo del estudiante</h1>

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
        <input type="number" class="form-control" id="average" placeholder="0.00" name="average">
    </div>
    <div class="form-group">
        <label for="campus">Recinto: </label>
        <select id="campus" class="form-control" name="campus">
            <option value="1">Paraiso</option>
            <option value="0">Turrialba</option>
        </select>
    </div>
    <button type="button" onclick="checkInput()" class="btn btn-primary">Calcular</button>
    <p>El sexo del estudiante es: <span id="loading" class="spinner-border"></span><span id="gender"></span> </p>

</div>


<script>
    const isValid = /^(\d+)$|^(\d{1}\.{1}\d{2})$|^(\d{1}\.{1}\d{1})$/;
    window.onload = function() {
        $('#loading').hide();
    };

    function getGender() {
        style = $('#learning_Style').val();
        average = $('#average').val();
        campus = $('#campus').val();

        parameters = {
            "style": style,
            "average": average,
            "campus": campus
        };
        $.ajax({
            url: '?controller=Main&action=getGender',
            type: 'POST',
            data: parameters,
            beforeSend: function() {
                $('#gender').hide();
                $('#loading').show();
            },
            success: function(data) {
                $('#loading').hide()
                $('#gender').html(data);
                $('#gender').show();
            }
        });
    }

    function checkInput(){
        let average = $('#average').val();
        if (!isValid.test(average) || average > 10 || average < 0) {
            alert('Ups ingresa un promedoi válido entre 0 y 10. Ejemplos \n7.5\n7.55\n7\n10');
            return;
        }else{
            getGender();
        }
    }
</script>



<?php

include 'public/footer.php'

?>