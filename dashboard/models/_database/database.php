<?php

class DataBase
{

    public function conexao()
    {
        $banco = "mysql:host=localhost;dbname=freeway";
        $usuario = "root";
        $senha = "";

        $conexao = new PDO($banco, $usuario, $senha);

        return $conexao;
    }

}
