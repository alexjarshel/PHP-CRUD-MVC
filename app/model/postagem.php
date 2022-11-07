<?php

class postagem
{
    public static function selecionatodos()
    {
        $con = conection::getconn();
        
        $sql = "SELECT * FROM postagem ORDER BY id DESC";
        $sql = $con->prepare($sql);
        $sql->execute();

        $resultado = array();

        while($row = $sql->fetchobject('postagem')){
            $resultado[] = $row;
        }

        if(!$resultado){
            throw new Exception("não foram encontrados regsitros");
        }

        return $resultado;

    }
}