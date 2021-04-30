<?php

include 'public/header.php'

?>
<div class="container">
    <h1>Estilo de aprendizaje</h1>
    <form>
        <div class="form-group">
            <label for="campus">Recinto: </label>
            <select id="campus" class="form-control" name="campus">
                <option value="0">Paraíso</option>
                <option value="1">Turrialba</option>
            </select>
        </div>
        <div class="form-group">
            <label for="average">Ultimo promedio de matricula: </label>
            <input type="text" class="form-control" id="average" placeholder="0.00" name="average">
        </div>
        <div class="form-group">
            <label for="gender">Sexo: </label>
            <select id="gender" class="form-control" name="gender">
                <option value="1">Femenino</option>
                <option value="0">Masculino</option>
            </select>
        </div>
        <button type="button" onclick="checkInput()" class="btn btn-primary">Buscar</button>
        <p>El recinto de origen es: <span id="loading" class="spinner-border"></span><span id="style"></span> </p>
    </form>
</div>


<script>
    const isValid = /^(\d+)$|^(\d{1}\.{1}\d{2})$|^(\d{1}\.{1}\d{1})$/;
    window.onload = function() {
        $('#loading').hide();
    };

    function getStyle() {

        average = $('#average').val();
        campus = $('#campus').val();
        gender = $('#gender').val();

        parameters = {
            "gender": gender,
            "average": average,
            "campus": campus
        };
        $.ajax({
            url: '?controller=Main&action=getStyle2',
            type: 'POST',
            data: parameters,
            beforeSend: function() {
                $('#style').hide();
                $('#loading').show();
            },
            success: function(data) {
                $('#loading').hide()
                $('#style').html(data);
                $('#style').show();
            }
        });
    }

    function checkInput() {
        let average = $('#average').val();
        if (!isValid.test(average) || average > 10 || average < 0) {
            alert('Ups ingresa un promedoi válido entre 0 y 10. Ejemplos \n7.5\n7.55\n7\n10');
            return;
        } else {
            getStyle();
        }
    }
</script>



<?php

include 'public/footer.php'

?>