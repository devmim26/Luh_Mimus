<?php

//Gestão da base de dados 


class Database{

    private $ligacao;


    //================================================================================
    private function ligar()
    {
        $this->ligacao = new PDO(

            //ligar a base de dados
            'mysql:'.
            'host='.MYSQL_SERVER.';'.
            'dbname='.MYSQL_DATABASE. ';'.
            'charset='.MYSQL_CHARSET,
            MYSQL_USER,
            MYSQL_PASS,
            array(PDO::ATTR_PERSISTENT => true)

        );

        //DEBUG -> Mode erro que apresenta erro
        $this->ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    //================================================================================
    private function desligar()   
    {
        //desligar a base de dados
        $this->ligacao = null;
    }

    //================================================================================
    public function select($sql, $parametros = null) //executa função de pesquisa de SQL
    {
        
        //====VERIFICA SE É UMA INSTRUÇÃO SELECT=====//
        if(!preg_match("/^SELECT/i", $sql)){
            throw new Exception('Base de dados - Não é uma instruçaõ Select');
        }



        //====LIGAR BD=====//
        $this->ligar();


        $resultados = null;


         //====COMUNICAR=====//
        try {
            //comunicação com bd
            if(!empty($parametros)){
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($parametros);
                $resultados = $executar->fetchAll(PDO::FETCH_CLASS);

            }else{
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
                $resultados = $executar->fetchAll(PDO::FETCH_CLASS);
            }

        } catch (PDOException $e) {
            //comunicação com bd
            return false;
        }

        //====COMUNICAR=====//
        $this->desligar();

        //devolveer os resultados obtidos
        return $resultados;
    }

}

