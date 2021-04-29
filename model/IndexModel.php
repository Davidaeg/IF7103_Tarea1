<?php

/**
 * 
 *
 * @author David
 */

class IndexModel
{
    public function __construct()
    {
        require_once 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }

    /*
        Descripción:
        Ejecuta procedimiento almacenado

        @param string $sp nombre del procedimiento almacenado

        @return array $result tabla resultante
    */
    public function exec_query($sp)
    {
        $query = $this->db->prepare('CALL ' . $sp . ';');
        $query->execute();
        $result = $query->fetchAll();
        $query->CloseCursor();
        return $result;
    }
}
