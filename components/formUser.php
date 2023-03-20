<?php

  if(isset($_GET['metodo'])){

    $metodo = $_GET['metodo'];	
    $acao = 'inserir';



    foreach($users as $indice => $users){

      $id=$users->id; 
      $nome=$users->nome; 
      $email=$users->email; 

    }  
  }

?>

<center>
    <div class="col-md-4 col-md-offset-4 login-form">
    <form action="controller/users.controller.php?acao=<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>" method="post">
        <h2 class="form-title text-center">Cadastrar</h2>
        <div class="form-group">
        <input type="text" name="nome" class="validate form-control" placeholder="Nome" value="<?php if(isset($nome)){echo $nome;}else{echo '';}?>" required>
        </div>
        <div class="form-group">
        <input type="email" name="email" class="validate form-control" placeholder="Email" value="<?php if(isset($email)){echo $email;}else{echo '';}?>" required>
        </div>
        <div class="form-group">
        <input type="password" name="senha" class="validade form-control" placeholder="Senha" value="<?php if(isset($senha)){echo $senha;}else{echo '';}?>" required>
        </div>
        <div class="form-group">
        <button type="submit" class="form-btn btn btn btn-outline-light btn-block" name="submit" value="<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>">Criar Conta</button>
        </div>
    </form>
    </div>
</center>

