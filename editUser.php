<h1>Editar Usuario</h1>
  
<?php

$sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
$result = $connection->query($sql);
$row = $result->fetch_object();

//Mostra as informacoes anteriormente salvas do usuario no formulario de ediçao. Por meio do "echo->'...'" ela é feita e redireciona todos os dados pelo metodo POST para a pagina salvarUser, por meio do 'action' do form
?>

   <form action='?page=salvar' method='POST'>
   <input type='hidden' name='acao' value='editar'>
   <input type='hidden' name='id' value="<?php echo $row->id;?>">
<div class='form-group'>
    <label for='exampleFormControlInput1'>Nome</label>
    <input type='text' required='required' class='form-control' name='nome' id='exampleFormControlInput1' value="<?php echo $row->nome?>">
  </div>
  <div class='form-group'>
    <label for='exampleFormControlInput1'>Email</label>
    <input type='email' class='form-control' name='email' id='exampleFormControlInput1' value="<?php echo $row->email?>">
  </div>
  <div class='form-group'>
    <label for='exampleFormControlInput1'>Senha</label>
    <input type='password' class='form-control' name='senha' id='exampleFormControlInput1' value="<?php $row->senha?>">
  </div>
  <div class='form-group'>
    <label for='exampleFormControlInput1'>Data de Nascimento</label>
    <input type='date' required='required' class='form-control' id='exampleFormControlInput1' min="1923-04-01" max="2005-02-28" name='data_nasc' value="<?php echo $row->data_nasc?>">
  </div>
  <button type='submit' class='btn btn-primary'>Enviar</button>
