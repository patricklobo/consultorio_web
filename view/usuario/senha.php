

<div class="container">
  <div class="panel panel-default">
<div class="panel-body" >
  <?php  foreach($this->lista_usuario2 as $usuario): ?>

  <form method="post" action="">

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Alterar usuario: <?php echo $usuario['nome']?></h3>
      </div>
    </div>
    <div class="form-group">
      <label>ID</label>
      <input class="form-control" name="id" type="text" readonly="true" value="<?php echo $usuario['id']?>">
    </div>

    <div class="form-group">
      <label>Nome</label>
      <input class="form-control" name="nome" type="text" value="<?php echo $usuario['nome']?>">
    </div>

    <div class="form-group">
      <label>senha</label>
      <input class="form-control" name="senha" type="text" >
    </div>

    <div class="form-group">
      <label>Confirme a Senha</label>
      <input class="form-control" name="senha2" type="text">
    </div>

    <button type="submit" class="btn btn-default">Salvar</button>
    <button type="submit" class="btn btn-default"><a href="?controle=usuario&acao=listar">Voltar</a></button>

  </form>
</div>
<?php endforeach;?>
</div>
</div>
</div>
