<?php

class MainController
{
    public function __construct()
    {
        $this->view = new View();
    }

    /*
        Descripción:
        Obtiene el registro más parecido (con la menor diferencia o la más cercana a cero) 
        con el algoritmo de distancia de Euclides 

        @param array $data Tabla de la base de datos para comparar
        @param array $input Datos ingresados por el usuario
        @param array $evaluated_data datos que serán evaluados
        @param string $requested_data nombre del atributo que se necesita aproximar
        
        @return string $result mejor aproximación 
        
    */
    private function calc_euclides_distance($data, $input, $evaluated_data, $requested_data){
        $result = 0; //El resultado del dato requerido
        $best_approach = 10000; //se almacenará la menor distancia 
        foreach($data as $a){
            $sum = 0;
            foreach ($evaluated_data as $x) {
                $sum += pow(($input[$x] - $a[$x]), 2);
            }
            $distance = sqrt($sum);
            if($distance < $best_approach){
                $best_approach = $distance;
                $result = $a[$requested_data];
            }
        }
        return $result;
    }

    public function getStyle()
    {
        $input['EC'] = $_POST['ec'];
        $input['OR'] = $_POST['or'];
        $input['CA'] = $_POST['ca'];
        $input['EA'] = $_POST['ea'];

        require_once 'model/IndexModel.php';
        $model = new IndexModel();
        $data = $model->exec_query('sp_get_estilo_recinto()');

        $evaluated_data = ['EC', 'OR', 'CA', 'EA'];

        $style = $this->calc_euclides_distance($data, $input, $evaluated_data, 'Estilo');

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

        echo $style;
    }

    public function getCampus()
    {
        $input['Sexo'] = $_POST['gender'];
        $input['Promedio'] = $_POST['average'];
        $input['Estilo'] = $_POST['style'];

        require_once 'model/IndexModel.php';
        $model = new IndexModel();
        $data = $model->exec_query('sp_get_sexo_estilo()');

        $evaluated_data = ['Sexo', 'Promedio', 'Estilo'];

        $campus = $this->calc_euclides_distance($data, $input, $evaluated_data, 'Recinto');

        if ($campus == 0)
            echo 'Turrialba';
        else
            echo 'Paraíso';
    }

    public function getGender()
    {
        $input['Estilo'] = $_POST['style'];
        $input['Promedio'] = $_POST['average'];
        $input['Recinto'] = $_POST['campus'];

        require_once 'model/IndexModel.php';
        $model = new IndexModel();
        $data = $model->exec_query('sp_get_sexo_estilo()');

        $evaluated_data = ['Estilo', 'Promedio', 'Recinto'];

        $gender = $this->calc_euclides_distance($data, $input, $evaluated_data, 'Sexo');

        if ($gender == 0)
            echo 'Masculino';
        else
            echo 'Femenino';
    }

    public function getStyle2()
    {
        $input['Sexo'] = $_POST['gender'];
        $input['Promedio'] = $_POST['average'];
        $input['Recinto'] = $_POST['campus'];

        require_once 'model/IndexModel.php';
        $model = new IndexModel();
        $data = $model->exec_query('sp_get_sexo_estilo()');

        $evaluated_data = ['Sexo', 'Promedio', 'Recinto'];

        $style = $this->calc_euclides_distance($data, $input, $evaluated_data, 'Estilo');

        if ($style == 0)
            echo 'Acomodador';
        elseif ($style == 1)
            echo 'Divergente';
        elseif ($style == 2)
            echo 'Convergente';
        else echo 'Asimilador';
    }

    public function professorType(){

        $input['A'] = $_POST['A'];
        $input['B'] = $_POST['B'];
        $input['C'] = $_POST['C'];
        $input['D'] = $_POST['D'];
        $input['E'] = $_POST['E'];
        $input['F'] = $_POST['F'];
        $input['G'] = $_POST['F'];
        $input['H'] = $_POST['F'];

        require_once 'model/IndexModel.php';
        $model = new IndexModel();
        $data = $model->exec_query('sp_get_profesores()');

        $evaluated_data = ['A', 'B', 'C','D', 'E', 'F','G', 'H'];

        $type = $this->calc_euclides_distance($data, $input, $evaluated_data, 'Class');

        if ($type == 1)
            echo 'Principiante';
        elseif ($type == 2)
            echo 'Intermedio';
        elseif ($type == 3)
            echo 'Avanzado';

    }

    public function networkClass(){

        $input['RE'] = $_POST['RE'];
        $input['LI'] = $_POST['LI'];
        $input['CA'] = $_POST['CA'];
        $input['CO'] = $_POST['CO'];

        require_once 'model/IndexModel.php';
        $model = new IndexModel();
        $data = $model->exec_query('sp_get_redes()');

        $evaluated_data = ['RE', 'LI', 'CA','CO'];

        $type = $this->calc_euclides_distance($data, $input, $evaluated_data, 'Class');

        if ($type == 1)
            echo 'A';
        else
            echo 'B';
    }
}
