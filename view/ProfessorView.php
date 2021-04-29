<?php

include 'public/header.php'

?>
<div class="container">
    <h1>Tipo de profesor</h1>
    <h3>Datos demográficos</h3>
    <div class="row">
        <div class="col form-group">
            <label for="age">Edad:</label>
            <select id="age" class="form-control">
                <option value="1">Menor o igual a 30</option>
                <option value="2">Mayor a 30 y Menor o igual a 55</option>
                <option value="3">Mayor a 55</option>
            </select>
        </div>
        <div class="col form-group">
            <label for="gender">Sexo:</label>
            <select id="gender" class="form-control">
                <option value="1">Femenino</option>
                <option value="2">Masculino</option>
                <option value="3">No disponible</option>
            </select>
        </div>
    </div>

    <h3>Datos de Experiencia</h3>
    <div class="row">
        <div class="col form-group">
            <label for="self_evaluation">Autoevaluación del profesor de su habilidad o experiencia en la enseñanza de la materia seleccionada:</label>
            <select id="self_evaluation" class="form-control">
                <option value="1">Principiante</option>
                <option value="2">Intermedio</option>
                <option value="3">Avanzado</option>
            </select>
        </div>
        <div class="col form-group">
            <label for="times">Número de veces que el profesor ha impartido este tipo de cursos:</label>
            <select id="times" class="form-control">
                <option value="1">Nunca </option>
                <option value="2">1 a 5 veces </option>
                <option value="3">más de 5 veces </option>
            </select>
        </div>
        <div class="col form-group">
            <label for="specialty">Disciplina o área de especialización del maestro.</label>
            <select id="specialty" class="form-control">
                <option value="1">Toma de decisiones </option>
                <option value="2">Diseño de red</option>
                <option value="3">Otra </option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
            <label for="computer_skills">Habilidades del profesor en el uso de computadoras.</label>
            <select id="computer_skills" class="form-control">
                <option value="1">Bajas</option>
                <option value="2">Medias</option>
                <option value="3">Altas</option>
            </select>
        </div>
        <div class="col form-group">
            <label for="teaching_web_experince">La experiencia del docente en el uso de tecnología basada en la web para la enseñanza.</label>
            <select id="teaching_web_experince" class="form-control">
                <option value="1">Nunca </option>
                <option value="2">Aveces </option>
                <option value="3">A menudo </option>
            </select>
        </div>
        <div class="col form-group">
            <label for="website_experince">Experiencia del profesor usando un sitio web</label>
            <select id="website_experince" class="form-control">
                <option value="1">Nunca </option>
                <option value="2">Aveces </option>
                <option value="3">A menudo </option>
            </select>
        </div>
    </div>

    <button type="button" onclick="getType()" class="btn btn-primary">Calcular</button>
    <p>El profesor es: <span id="loading" class="spinner-border"></span><span id="type"></span> </p>
</div>


<script>
    window.onload = function() {
        $('#loading').hide();
    };

    function getType() {

        age = $('#age').val();
        gender = $('#gender').val();
        self_evaluation = $('#self_evaluation').val();
        times = $('#times').val();
        specialty = $('#specialty').val();
        computer_skills = $('#computer_skills').val();
        teaching_web_experince = $('#teaching_web_experince').val();
        website_experince = $('#website_experince').val();

        parameters = {
            "A": age,
            "B": gender,
            "C": self_evaluation,
            "D": times,
            "E": specialty,
            "F": computer_skills,
            "G": teaching_web_experince,
            "H": website_experince
        };

        $.ajax({
            url: '?controller=Main&action=professorType',
            type: 'POST',
            data: parameters,
            beforeSend: function() {
                $('#type').hide();
                $('#loading').show();
            },
            success: function(data) {
                $('#loading').hide()
                $('#type').html(data);
                $('#type').show();
            }
        });
    }
</script>



<?php

include 'public/footer.php'

?>