

<div class="container">
  <div class="panel panel-default">
<div class="panel-body" >
  <?php  foreach($this->lista_usuario2 as $usuariomostrar): ?>

  <form method="post" action="">

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Alterar usuario: <?php echo $usuariomostrar['nome']?></h3>
      </div>
    </div>
    <div class="form-group">
      <label>ID</label>
      <input class="form-control" name="id" type="text" readonly="true" value="<?php echo $usuariomostrar['id']?>">
    </div>

    <div class="form-group">
      <label>Nome</label>
      <input class="form-control" name="nome" type="text" value="<?php echo $usuariomostrar['nome']?>">
    </div>

    <div class="form-group">
      <label>E-mail</label>
      <input class="form-control" name="endereco" type="text" value="<?php echo $usuariomostrar['email']?>">
    </div>

    <div class="form-group">
      <label>Senha</label>
      <input class="form-control" name="telefone" type="text" value="<?php echo $usuariomostrar['senha']?>">
    </div>

    <button type="submit" class="btn btn-default">Salvar</button>
    <button type="submit" class="btn btn-default"><a href="?controle=paciente&acao=listar">Voltar</a></button>

  </form>
</div>
<?php endforeach;?>
</div>
</div>
</div>
