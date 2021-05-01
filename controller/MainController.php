<?php

class MainController
{
    public function __construct()
    {
        $this->view = new View();
    }

    public function getStyle()
    {
        //Información que se recibe desdel view
        $input['EC'] = $_POST['ec'];
        $input['OR'] = $_POST['or'];
        $input['CA'] = $_POST['ca'];
        $input['EA'] = $_POST['ea'];

        //guarda en $data un array con la tabla resultante de la consulta
        require_once 'model/IndexModel.php';
        $model = new IndexModel();
        $data = $model->exec_query('sp_get_estilo_recinto()'); 

        $evaluated_data = ['EC', 'OR', 'CA', 'EA']; //Se define las columnas que se van a evaluar

        // se envía a calcular distancia de euclides. último parametro: el dato que quiere predecir
        require_once 'algorithms/Algorithms.php ';
        $algorithms = new Algorithms();
        $style = $algorithms->calc_euclides_distance($data, $input, $evaluated_data, 'Estilo');

        //se obtiene el resultado y se interpreta 
        switch ($style) {
            case 0:
                $style = 'Acomodador';
                break;
            case 1:
                $style = 'Divergente';
                break;
            case 2:
                $style = 'Convergente';
                break;
            case 3:
                $style = 'Asimilador';
                break;
        }
        echo $style;   //envia respuesta
    }

    public function getCampus()
    {
        //Información que se recibe desdel view
        $input['Sexo'] = $_POST['gender'];
        $input['Promedio'] = $_POST['average'];
        $input['Estilo'] = $_POST['style'];

        //guarda en $data un array con la tabla resultante de la consulta
        require_once 'model/IndexModel.php';
        $model = new IndexModel();
        $data = $model->exec_query('sp_get_sexo_estilo()');

        //Se define las columnas que se van a evaluar
        $evaluated_data = ['Sexo', 'Promedio', 'Estilo'];

        // se envía a calcular distancia de euclides. último parametro: el dato que quiere predecir
        require_once 'algorithms/Algorithms.php ';
        $algorithms = new Algorithms();
        $campus = $algorithms->calc_euclides_distance($data, $input, $evaluated_data, 'Recinto');

        //se obtiene el resultado,se interpreta y se envía respuesta
        if ($campus == 0)
            echo 'Turrialba';
        else
            echo 'Paraíso';
    }

    public function getGender()
    {
        //Información que se recibe desdel view
        $input['Estilo'] = $_POST['style'];
        $input['Promedio'] = $_POST['average'];
        $input['Recinto'] = $_POST['campus'];

        //guarda en $data un array con la tabla resultante de la consulta
        require_once 'model/IndexModel.php';
        $model = new IndexModel();
        $data = $model->exec_query('sp_get_sexo_estilo()');

        //Se define las columnas que se van a evaluar
        $evaluated_data = ['Estilo', 'Promedio', 'Recinto'];

        // se envía a calcular distancia de euclides. último parametro: el dato que quiere predecir
        require_once 'algorithms/Algorithms.php ';
        $algorithms = new Algorithms();
        $gender = $algorithms->calc_euclides_distance($data, $input, $evaluated_data, 'Sexo');

        //se obtiene el resultado,se interpreta y se envía respuesta
        if ($gender == 0)
            echo 'Masculino';
        else
            echo 'Femenino';
    }

    public function getStyle2()
    {
        //Información que se recibe desdel view
        $input['Sexo'] = $_POST['gender'];
        $input['Promedio'] = $_POST['average'];
        $input['Recinto'] = $_POST['campus'];

        //guarda en $data un array con la tabla resultante de la consulta
        require_once 'model/IndexModel.php';
        $model = new IndexModel();
        $data = $model->exec_query('sp_get_sexo_estilo()');

        //Se define las columnas que se van a evaluar
        $evaluated_data = ['Sexo', 'Promedio', 'Recinto'];

        // se envía a calcular distancia de euclides. último parametro: el dato que quiere predecir
        require_once 'algorithms/Algorithms.php ';
        $algorithms = new Algorithms();
        $style = $algorithms->calc_euclides_distance($data, $input, $evaluated_data, 'Estilo');

        //se obtiene el resultado,se interpreta y se envía respuesta
        if ($style == 0)
            echo 'Acomodador';
        elseif ($style == 1)
            echo 'Divergente';
        elseif ($style == 2)
            echo 'Convergente';
        else echo 'Asimilador';
    }

    public function professorType()
    {
        //Información que se recibe desdel view
        $input['A'] = $_POST['A'];
        $input['B'] = $_POST['B'];
        $input['C'] = $_POST['C'];
        $input['D'] = $_POST['D'];
        $input['E'] = $_POST['E'];
        $input['F'] = $_POST['F'];
        $input['G'] = $_POST['F'];
        $input['H'] = $_POST['F'];

        //guarda en $data un array con la tabla resultante de la consulta
        require_once 'model/IndexModel.php';
        $model = new IndexModel();
        $data = $model->exec_query('sp_get_profesores()');

        //Se define las columnas que se van a evaluar
        $evaluated_data = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];

        // se envía a calcular distancia de euclides. último parametro: el dato que quiere predecir
        require_once 'algorithms/Algorithms.php ';
        $algorithms = new Algorithms();
        $type = $algorithms->calc_euclides_distance($data, $input, $evaluated_data, 'Class');

        //se obtiene el resultado,se interpreta y se envía respuesta
        if ($type == 1)
            echo 'Principiante';
        elseif ($type == 2)
            echo 'Intermedio';
        elseif ($type == 3)
            echo 'Avanzado';
    }

    public function networkClass()
    {

        //Información que se recibe desdel view
        $input['RE'] = $_POST['RE'];
        $input['LI'] = $_POST['LI'];
        $input['CA'] = $_POST['CA'];
        $input['CO'] = $_POST['CO'];

        //guarda en $data un array con la tabla resultante de la consulta
        require_once 'model/IndexModel.php';
        $model = new IndexModel();
        $data = $model->exec_query('sp_get_redes()');

        //Se define las columnas que se van a evaluar
        $evaluated_data = ['RE', 'LI', 'CA', 'CO'];

        // se envía a calcular distancia de euclides. último parametro: el dato que quiere predecir
        require_once 'algorithms/Algorithms.php ';
        $algorithms = new Algorithms();
        $type = $algorithms->calc_euclides_distance($data, $input, $evaluated_data, 'Class');

        //se obtiene el resultado,se interpreta y se envía respuesta
        if ($type == 1)
            echo 'A';
        else
            echo 'B';
    }

    public function crossValidation()
    {
        //Información que se recibe desdel view
        $k = $_POST['k'];

        //guarda en $data un array con la tabla resultante de la consulta
        require_once 'model/IndexModel.php';
        $model = new IndexModel();
        $data = $model->exec_query('sp_get_estilo_recinto()');

        //Se define las columnas que se van a evaluar
        $evaluated_data = ['Recinto','CA', 'EC', 'EA', 'OR','CA-EC','EA-OR', 'Estilo'];

        // se envía a calcular k_fold_cross_validation
        require_once 'algorithms/Algorithms.php ';
        $algorithms = new Algorithms();
        $outcome = $algorithms->k_fold_cross_validation($data, $evaluated_data, $k);

        //Retorna un Json con los data-sets y sus resultados
        echo json_encode($outcome);
    }
}
