<h1>Editar Usuario</h1>
  
<?php

$sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
$result = $connection->query($sql);
$row = $result->fetch_object();

if($result==true){
    echo "<script>alert('Cadastro realizado com sucesso!');</script>";
    echo "<script>location.href='?page=listar';</script>";
}
else{
    echo "<script>alert('Tente Novamente')</script>";
}
echo "<script>location.href='?page=novo';</script>";


?>

   <form action='?page=salvar' method='POST'>
   <input type='hidden' name='acao' value='cadastrar'>
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
    <input type='password' class='form-control' name='senha'id='exampleFormControlInput1' value="<?php echo $row->senha?>">
  </div>
  <div class='form-group'>
    <label for='exampleFormControlInput1'>Data de Nascimento</label>
    <input type='date' required='required' class='form-control' id='exampleFormControlInput1' min="1923-04-01" max="2005-02-28" name='data_nasc' value="<?php echo $row->data_nasc?>">
  </div>
  <button type='submit' class='btn btn-primary'>Enviar</button>