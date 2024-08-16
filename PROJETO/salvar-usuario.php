<?php
switch ($_REQUEST["acao"]){
    case 'cadastrar':
        cadastrar($_POST,$conn); //function na linha 44
        break;
    case 'editar':
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $data_nasci = $_POST["data_nasci"];

        $sql = "UPDATE usuario SET
                        nome='{$nome}',
                        cpf='{$cpf}',
                        data_nasci='{$data_nasci}'
                where
                     cpf=".$_REQUEST["cpf"];

        $res = $conn->query($sql);

        if ($res==true){
            print "<script>alert('Editado com Sucesso');</script>";
            print "<script>location.href='?page=listar';</script?";
        }else{
            print "<script>alert('Não foi Possível Editar');</script>";
            print "<script>location.href='?page=listar';</script?";
        }
        break;
    case 'excluir':

        $sql ="DELETE FROM usuario WHERE cpf=".$_REQUEST["cpf"];

        $res = $conn->query($sql);

        if ($res==true){
            print "<script>alert('Excluído com Sucesso');</script>";
            print "<script>location.href='?page=listar';</script?";
        }else{
            print "<script>alert('Não foi Possível Excluir');</script>";
            print "<script>location.href='?page=listar';</script?";
        }
            break;    
}

function cadastrar($post,$conn){
    try {
        $nome = $post["nome"];
        $cpf = $post["cpf"];
        $data_nasci = $post["data_nasci"];

        $sql = "INSERT INTO USUARIO (nome, cpf, data_nasci) VALUES (
            '{$nome}', '{$cpf}', '{$data_nasci}')";

        
        $res = $conn->query($sql);

      

        if ($res==true){
            print "<script>alert('Cadastrado com Sucesso');</script>";
            print "<script>location.href='?page=listar';</script?";
        }else{
            print "<script>alert('Não foi Possível Cadastrar');</script>";
            print "<script>location.href='?page=listar';</script?";
        }
    } catch (\Throwable $th) {
        print "<script>alert('CPF JÁ EXISTE EM NOSSA BASE');</script>";
            print "<script>location.href='?page=listar';</script?";
    }
}