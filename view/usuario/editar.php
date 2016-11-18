<?php
foreach ($usuarioUni as $key => $lista) :
   ?>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><b>Editando usuário</b></h3>
    </div>

    <div class="panel-body" >

      <form method="post" action="">
        <input type="hidden" name="id" >
        <div class="form-group">
          <label>ID</label>
          <input type="text"  name="id" value="<?= $usuarioUni['id']?>" class="form-control" >
        </div>
        <div class="form-group">
          <label>Nome</label>
          <input type="text"  name="nome" value="<?= $usuarioUni['nome']?>" class="form-control" >
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text"  name="email" value="<?= $usuarioUni['email']?>"  class="form-control" >
        </div>
        <div class="form-group">
          <label>Senha</label>
          <input type="password" name="senha" value="<?= $usuarioUni['senha']?>"   class="form-control" >
        </div>
        <button type="submit" class="btn btn-default">Salvar</button>
      </form>
    </div>
  </div>
<?php endforeach ?>
