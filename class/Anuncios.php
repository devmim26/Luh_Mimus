<?php

use core\classes\Database;

class Anuncios{

    public function listar_anuncios()
    {
        $bd = new Database();
        $anuncios = $bd->select("SELECT *  FROM anuncios");

        return $anuncios;
    }
}