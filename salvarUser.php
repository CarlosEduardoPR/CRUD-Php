<?php

//Codigo para inserir dados do formulario no mySql
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $data_nasc = $_POST['data_nasc'];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}')";

            $result = $connection->query($sql);

                if($result!=true){
                    echo "<script>alert('Cadastro realizado com sucesso!');</script>";
                    echo "<script>location.href='?page=listar';</script>";
                }
                else{
                    echo "<script>alert('Erro no cadastro, tente Novamente')</script>";
                }
                echo "<script>location.href='?page=novo';</script>";
        break;

         case 'editar':

         break;

         case 'excluir': 
         break;
    }
?>