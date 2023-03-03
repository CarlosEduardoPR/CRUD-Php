<?php

//Insere dados do formulario no mySql, buscando dados pela query, e inserindo dados pelo metodo POST, com uma mensagem de sucesso ou erro no final
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $data_nasc = $_POST['data_nasc'];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}')";

            $result = $connection->query($sql);

                if($result==true){
                    echo "<script>alert('Cadastro realizado com sucesso!');</script>";
                    echo "<script>location.href='?page=listar';</script>";
                }
                else{
                    echo "<script>alert('Erro no cadastro, tente Novamente')</script>";
                }
                echo "<script>location.href='?page=novo';</script>";
        break;

//Edita dados do formulario no mySql, reinserindo dados pelo metodo POST, e atualizando pelo UPDATE, buscando os dados pelo 'id' no REQUEST, com uma mensagem de sucesso ou erro no final
         case 'editar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $data_nasc = $_POST['data_nasc'];

            $sql = "UPDATE usuarios SET 
            nome='{$nome}',
            email='{$email}',
            senha='{$senha}',
            data_nasc='{$data_nasc}'
            WHERE id=".$_REQUEST["id"];

            $result = $connection->query($sql);

                if($result==true){
                    echo "<script>alert('Usuário Editado com sucesso!');</script>";
                    echo "<script>location.href='?page=listar';</script>";
                }
                else{
                    echo "<script>alert('Erro ao Editar Usuário, tente Novamente')</script>";
                }
                echo "<script>location.href='?page=novo';</script>";
            
         break;

//Exclui dados do formulario no mySql, buscando eles por uma query, fazendo um request para busacar o id do usuario selecionado, e usando um DELETE para exclusao do usuario, bucando ele pelo 'id' no REQUEST com uma mensagem de sucesso ou erro no final
         case 'excluir':
            
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
            
            $result = $connection->query($sql);

                if($result==true){
                    echo "<script>alert('Usuário Excluído com sucesso!');</script>";
                    echo "<script>location.href='?page=listar';</script>";
                }
                else{
                    echo "<script>alert('Erro ao Excluir Usuário, tente Novamente')</script>";
                }
                echo "<script>location.href='?page=novo';</script>";

         break;
    }
?>