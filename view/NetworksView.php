<?php

include 'public/header.php'

?>
<div class="container">
    <h1>Clasificacion de redes</h1>
    <form action="?controlador=Redes&accion=disc" method="post">

        <div class="form-group col-lg-6 col-md-8 col-sm-12">
            <label for="promedioi">The network reliability</label>
            <input type="text" class="form-control" id="promedioi" name="Rei" placeholder="2 to 5">
        </div>
        <div class="form-group col-lg-6 col-md-8 col-sm-12">
            <label for="promedioi">The number of links</label>
            <input type="text" class="form-control" id="promedioi" name="Lii" placeholder=" 7 to 20">
        </div>
        <div class="form-group col-lg-6 col-md-8 col-sm-12">
            <label for="Ca">The total network capacity</label>
            <select id="Ca" name="Cai" class="form-control">
                <option value="0">Low</option>
                <option value="1">Medium</option>
                <option value="2">High</option>
            </select>
        </div>
        <div class="form-group col-lg-6 col-md-8 col-sm-12">
            <label for="Co">The network cost</label>
            <select id="Co" name="Coi" class="form-control">
                <option value="0">Low</option>
                <option value="1">Medium</option>
                <option value="2">High</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
</div>


<script>
    function getOrigin() {
        $.ajax({
            url: '?controller=Campus&action=getOrigin',
            type: 'POST',
            data: $(this).serialize(),
            success: function(data) {
                $('.user_list').html(data);
            }
        });
    }
</script>



<?php

include 'public/footer.php'

?>