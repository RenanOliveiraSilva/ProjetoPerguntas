<?php    
/*
    foreach ($users as $indice => $users) {
        $nome=$users->nome;
        $email=$email->email;
        $senha=$senha->senha;
    }*/


?>

<center>
    <div class="col-md-4 col-md-offset-4 login-form">
    <form action="controller/users.controller.php?acao=logar" method="post">
        <h2 class="form-title text-center">Entrar na Conta</h2>
        <div class="form-group">
        <input type="email" name="email" class="validate form-control" placeholder="Email" value="<?php if(isset($email)){echo $email;}else{echo '';}?>" required>
        </div>
        <div class="form-group">
        <input type="password" name="senha" class="validade form-control" placeholder="Senha" value="<?php if(isset($senha)){echo $senha;}else{echo '';}?>" required>
        </div>
        <div class="form-group">
        <button type="submit" class="form-btn btn btn btn-outline-light btn-block" name="submit" value="logar">Entrar na Conta</button>
        </div>
    </form>
    </div>
</center>

