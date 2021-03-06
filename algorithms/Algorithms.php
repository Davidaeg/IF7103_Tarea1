<?php

class Algorithms
{
    /** 
     *    Devuelve distancia calculada con el algoritmo de Euclides.
     *
     *    Obtiene el dato registrado más parecido (con la menor diferencia o la más cercana a cero) 
     *    al input del usuario con el algoritmo de distancia de Euclides para hacer una predicción 
     *    del dato que se requiere.
     *    
     *
     *    @param array $data Tabla de la base de datos para comparar.
     *    @param array $input Datos ingresados por el usuario.
     *    @param array $evaluated_data datos(columnas) que serán evaluados.
     *    @param string $requested_data nombre del atributo que se necesita aproximar.
     *    
     *    @return float $result mejor aproximación al dato requerido.
     *    
     */
    public function calc_euclides_distance($data, $input, $evaluated_data, $requested_data)
    {
        $result = 0; //El resultado del dato requerido
        $best_approach = 10000; //se almacenará la menor distancia en $best_approach
        foreach ($data as $a) { //$a = cada tupla de la base de datos
            $sum = 0;
            foreach ($evaluated_data as $x) { //Se obtiene la distancia de la x que se va evaluar con cada tupla
                $sum += pow(($input[$x] - $a[$x]), 2);  //sumatoria
            }
            $distance = sqrt($sum); //se aplica raíz cuadrada y se tiene la distancia como resultado
            if ($distance < $best_approach) { //Se compara si la aproximación es mejor a la anterior 
                $best_approach = $distance;
                $result = $a[$requested_data];
            }
        }
        return $result;
    }

    /** 
     *  Retorna el Error cuadratico medio(ECM).
     *
     *  Obtiene el ECM con un data-set de prueba y otro de training. Recorre cada tupla del data-set de prueba 
     *  y calcula el error cuadrático con canda uno de las tuplas del set de training, calculado la diferencia entre
     *  sus valores.
     *
     *  @param array $test data-set de para comprobar(testing)
     *  @param array $training data-set de entrenamiendo
     *  @param array $evaluated_data valor que se van a utilizar(xi)
     *  
     *  @return float $result error cuadrático medio
     */
    public function mean_squared_error($test, $training, $evaluated_data)
    {
        $result = 0;
        $n = 0;
        foreach ($test as $y) { //$y = cada tupla del set de de prueba
            $sum = 0;
            foreach ($training as $yi) { //yi cada tupla del set de training 
                $n++;
                foreach ($evaluated_data as $xi) { //
                    $sum += pow(($yi[$xi] - $y[$xi]), 2);
                }
            }
            $result = (1 / $n) * $sum;
        }
        return $result;
    }

    /**
     * Devuelve un arreglo con todos los sets de datos y Resultados.
     * 
     *  Recibe la data de la base de datos, la ordena de forma random y la parte en 'k' partes iguales como
     *   distintos data-sets. Se toma el primer set de datos para testing y los restantes para training.
     *   Se obtiene el error cuadrático medio con cada set de training y se guarda el mejor resultado
     *   y el set de testing con el que se consiguio. 
     *   Luego el siguiente set pasa a ser el de testing y los demás de training y se repite el proceso
     *   y así sucesivamente 'k' veces.
     *   El final se devuelve un arreglo con todos los sets de datos que se usaron y su resultado para que se muestre
     *  en la interfaz. 
     * 
     * 
     * @param array $data tabla de la base de datos
     * @param array $evaluated_data datos(columnas) que se utilizaran
     * @param integer $k cantidad segmentos en que se dividiran los datos
     * @return array $outcome arrelo de data-sets y su resultado
     * 
     */
    public function k_fold_cross_validation($data, $evaluated_data, $k)
    {
        shuffle($data); //Orden de los datos random

        $data_sets = array_chunk($data, count($data) / $k); //k data-sets iguales 

        //declaración de variables
        $error = 0.0;
        $outcome = array(); //Se almacenarán los sets de datos con su resultado
        $dataset_efficiency = 0;
        $smallest_error = 0;

        $i = 0;
        while ($i < $k) { //k iteraciones
            $control = 0;
            for ($set = 0; $set < $k; $set++) { //se recorre cada set de datos
                if ($set != $i) { //Que no sea el mismo que está como set de testing    
                    $error = $this->mean_squared_error($data_sets[$i], $data_sets[$set], $evaluated_data);
                    if ($control == 0) { //se guarda el primer error como el menor(solo primera vez)
                        $smallest_error = $error;
                        $dataset_efficiency = ['set' => $i, 'error' => $smallest_error]; //guarda el número del data-set y el resultado
                        $control++;
                    } elseif ($error < $smallest_error) { //Se compara si el nuevo error es menor
                        $smallest_error = $error;
                        $dataset_efficiency = ['set' => $i, 'error' => $smallest_error];
                    }
                }
            }
            $dataset_efficiency['data'] = $data_sets[$i]; // se agrega el set de datos 
            array_push($outcome, $dataset_efficiency); //se guarda en el arreglo de resultados

            $i++;
        }
        return $outcome;
    }
}
