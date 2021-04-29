<?php

include 'public/header.php'

?>
<div class="container">
    <h1>Sexo del estudiante</h1>
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
            <input type="text" class="form-control" id="average" placeholder="Promedio" name="average">
        </div>
        <div class="form-group">
            <label for="campus">Recinto: </label>
            <select id="campus" class="form-control" name="campus">
                <option value="1">Paraiso</option>
                <option value="0">Turrialba</option>
            </select>
        </div>
        <button type="button" onclick="getGender()" class="btn btn-primary">Calcular</button>
        <p>El sexo del estudiante es:  <span id="loading" class="spinner-border"></span><span id="gender"></span> </p>
    </form>
</div>


<script>
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
</script>



<?php

include 'public/footer.php'

?>