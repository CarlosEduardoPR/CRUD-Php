<!--Codigo da page de novo usuario, que liga cada input no arquivo salvarUser -->

   <h1>Novo Usuario</h1>
   
   <form action='?page=salvar' method='POST'>
   <input type='hidden' name='acao' value='cadastrar'>
<div class='form-group'>
    <label for='exampleFormControlInput1'>Nome</label>
    <input type='text' required='required' class='form-control' name='nome' id='exampleFormControlInput1' placeholder='Digite Seu Nome'>
  </div>
  <div class='form-group'>
    <label for='exampleFormControlInput1'>Email</label>
    <input type='email' class='form-control' name='email' id='exampleFormControlInput1' placeholder='Digite seu Email'>
  </div>
  <div class='form-group'>
    <label for='exampleFormControlInput1'>Senha</label>
    <input type='password' class='form-control' name='senha'id='exampleFormControlInput1' placeholder='Digite sua Senha'>
  </div>
  <div class='form-group'>
    <label for='exampleFormControlInput1'>Data de Nascimento</label>
    <input type='date' required='required' class='form-control' id='exampleFormControlInput1' min="1923-04-01" max="2005-02-28" name='data_nasc'>
  </div>
  <button type='submit' class='btn btn-primary'>Enviar</button>

