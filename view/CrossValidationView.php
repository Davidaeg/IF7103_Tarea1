<?php

include 'public/header.php'

?>
<div class="container">
    <h1>K-folf cross validation</h1>
    <p>Se evaluará la tabla con 222 registros con el algoritmo K-fold cross-validation y se mostrará 
     el resultado para cada set de datos creado.</p>
    <label for="k">Ingrese valor de k:</label>
    <input type="number" class="form-control" id="k" min=2 max=10 placeholder="10">
    <br>
    <button type="button" onclick="getDataSet()" class="btn btn-primary">Calcular</button>
    <br>
    <p>El resultado es: <span id="loading" class="spinner-border"></span> </p>
    <span id="set"></span>
    <div class="table-responsive">
        <table id="informTable" class="table table-striped table-bordered table-responsive" style="width:100%">
            <caption id="tableTitle">Resultados</caption>
            <thead>
                <tr>
                    <th>Set</th>
                    <th>Cantidad</th>
                    <th>Error</th>
                    <th>Datos</th>
                </tr>
            </thead>
            <tbody id="result">
            </tbody>
        </table>
    </div>

</div>


<script>
    window.onload = function() {
        $('#loading').hide();
        $('#informTable').hide();
    };

    /**
     *  Invoca al controlador con el método que responderá con la solucion al k-fold cross-validation
     *  captura k y la envía para crear los segmentos, al recibir la información crea una tabla para mostrar al usuario.
     */
    function getDataSet() {
        k =$('#k').val(); 

        if(k>10 || k<2){
            alert('k debe ser un número entero entre 2 y 10');
            return;
        }
        $('#k').val(~~k)
        parameters = {
            "k": ~~k
        };
        $.ajax({
            url: '?controller=Main&action=crossValidation',
            type: 'POST',
            data: parameters,
            beforeSend: function() {
                $('#loading').show();
            },
            success: function(data) {
                var results = JSON.parse(data);
                var text = "";

                results.forEach(element => {
                    var rows = element.data;
                    text += "<tr>" +
                            "<th>" + element.set + "</th>" +
                            "<td>" + rows.length + "</td>"+
                            "<td>" + element.error + "</td>"+
                            "<td><table>"+
                            "<tr>"+
                                "<th>Recinto</th>"+
                                "<th>CA</th>"+
                                "<th>EC</th>"+
                                "<th>EA</th>"+
                                "<th>OR</th>"+
                                "<th>CA-EC</th>"+
                                "<th>EA-OR</th>"+
                                "<th>Estilo</th>"+
                            "</tr>";

                    rows.forEach(row => {
                        var campus = (row[0]==1)?"Paraíso" : "Turrialba";
                        var style = row[7];
                        if( style == 0){
                            style = "Acomodador";
                        }else if(style == 1)
                            style = "Divergente";
                        else if(style == 2)
                            style = "Convergente";
                        else if(style == 3)
                            style = "Asimilador";
                
                       
                        text += "<tr>"+"<td>"+campus+"</td>"+
                                "<td>"+String(row[1])+"</td>"+
                                "<td>"+String(row[2])+"</td>"+
                                "<td>"+String(row[3])+"</td>"+
                                "<td>"+String(row[4])+"</td>"+
                                "<td>"+String(row[5])+"</td>"+
                                "<td>"+String(row[6])+"</td>"+
                                "<td>"+style+"</td></tr>";
                            
                    });
                    text += "</table></td></tr>";
                });
                
                document.getElementById("result").innerHTML = text;
                $('#loading').hide();
                $('#informTable').show();
            }
        });
    }
</script>



<?php

include 'public/footer.php'

?>