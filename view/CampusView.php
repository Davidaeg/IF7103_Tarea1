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
            <input type="text" class="form-control" id="average" placeholder="Promedio" name="average">
        </div>
        <div class="form-group">
            <label for="gender">Sexo: </label>
            <select id="gender" class="form-control" name="gender">
                <option value="0">Masculino</option>
                <option value="1">Femenino</option>
            </select>
        </div>
        <button type="button" onclick="getCampus()" class="btn btn-primary">Calcular</button>
        <p>El recinto de origen es: <span id="loading" class="spinner-border"></span><span id="campus"></span> </p>
    </form>
</div>


<script>
    window.onload = function() {
        $('#loading').hide();
    };

    function getCampus() {

        style = $('#learning_Style').val();
        average = $('#average').val();
        gender = $('#gender').val();

        parameters = {
            "style": style,
            "average": average,
            "gender": gender
        };
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
</script>



<?php

include 'public/footer.php'

?>