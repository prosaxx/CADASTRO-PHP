<?php 
        define('HOST',  'localhost');
        define('USER', 'root');
        define('PASS', '');
        define('BASE', 'CADASTRO');

        $conn = new mysqli(HOST,USER,PASS,BASE);

        //condição para validar se houve conexão com o banco de dados
        // if ($conn->connect_errno) 
        // {
        //         echo "Erro";
        // }
        // else
        // {
        //   echo"Conexão com o Banco de Dados OK!";
        // }
?>