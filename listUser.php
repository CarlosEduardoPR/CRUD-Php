<h1>Lista de Usuarios</h1>
<br>

<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes do Usuário &nbsp;
                            <a href="main.php?page=novo" class="btn btn-primary float-end">Adicionar Usuario</a>
                        </h4>
                        </div>
                        
<?php
//Seleciona todos os usuarios no banco de dados, e diz que se tiver mais que 0, adiciona uma tabela com os dados, e mostra eles por meio da div $row, que é definida pela busca de dados pela query, buscando nesses dados a linha do banco pelos comandos "$row->DadoDesejado"
                    $sql = "SELECT * FROM usuarios";

                    $result = $connection->query($sql);

                    $quant = $result->num_rows;

                    if($quant > 0){
                        echo "<table class='table table-bordered'>";
                        echo "<tr>";
                            echo "<th>Id</th>";
                            echo "<th>Nome</th>";
                            echo "<th>Email</th>";
                            echo "<th>Data de Nascimento</th>";
                            echo "<th>Ações</th>";
                            echo "</tr>"; 
                            

                            

                        while($row = $result->fetch_object()){
                            echo "<tr>";
                            echo "<td>".$row->id."</td>";
                            echo "<td>".$row->nome."</td>";
                            echo "<td>".$row->email."</td>";  
                            echo "<td>".(new \DateTimeImmutable($row->data_nasc))->format('d/m/Y')."</td>";
                            echo "<td>
                            
                            <button type='button' onclick=\"location.href='?page=editar&acao=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                            
                            <button type='button' class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir o usuário?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" >Excluir</button>
                            </td>";
                            echo "</tr>"; 
                        }
                        echo "</table>";
                    }
                    else{
                        echo "<h4>&nbsp;Nao há Cadastros</h4>";
                    }
                    ?>