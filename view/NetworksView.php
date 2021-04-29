<?php

include 'public/header.php'

?>
<div class="container">
    <h1>Clasificacion de redes</h1>

    <div class="form-group">
        <label for="options">La confiabilidad de la red: </label> &nbsp;
        <div id="options">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="2" onclick="changeReliability(this.value);" checked>
                <label class="form-check-label" for="inlineRadio1">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="3" onclick="changeReliability(this.value);">
                <label class="form-check-label" for="inlineRadio2">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="4" onclick="changeReliability(this.value);">
                <label class="form-check-label" for="inlineRadio3">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="5" onclick="changeReliability(this.value);">
                <label class="form-check-label" for="inlineRadio4">5</label>
            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="links_range">Número de enlaces: <span id="links">7</span></label>
        <input type="range" class="form-control-range" min="7" max="20" value="7" class="slider" id="links_range" onchange="changeLinks(this.value);">
    </div>
    <div class="form-group">
        <label for="capacity">La capacidad total de la red: </label>
        <select id="capacity" class="form-control">
            <option value="1">Baja</option>
            <option value="2">Media</option>
            <option value="3">Alta</option>
        </select>
    </div>
    <div class="form-group">
        <label for="cost">Costo de la red: </label>
        <select id="cost"  class="form-control">
            <option value="1">Bajo</option>
            <option value="2">Medio</option>
            <option value="3">Alto</option>
        </select>
    </div>
    <button type="button" onclick="getClass()" class="btn btn-primary">Calcular</button>
    <p>La red es clase: <span id="loading" class="spinner-border"></span><span id="class"></span> </p>
</div>


<script>
    var reliability = 2;
    var links = 7;
    window.onload = function() {
        $('#loading').hide();
    };

    function changeReliability(value) {
        reliability = value;
    }

    function changeLinks(value) {
        links = value;
        $('#links').html(value);
    }

    function getClass() {
         capacity = $('#capacity').val();
         cost = $('#cost').val();

         parameters = {
             "RE": reliability,
             "LI": links,
             "CA": capacity,
             "CO": cost
         };

         $.ajax({
             url: '?controller=Main&action=networkClass',
             type: 'POST',
             data: parameters,
             beforeSend: function() {
                 $('#class').hide();
                 $('#loading').show();
             },
             success: function(data) {
                 $('#loading').hide()
                 $('#class').html(data);
                 $('#class').show();
             }
         });
    }
</script>



<?php

include 'public/footer.php'

?>