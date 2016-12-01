<?php


?>

<div class="panel panel-default">

  <div class="panel-body">
    <div class="panel panel-default">
      <div class="panel-heading"><b>Pacientes cadastrados</b></div>
    </div>

    <table class="table table-striped">
      <tr>
        <td>
          <b>ID</b>
        </td>
        <td>
          <b>Nome</b>
        </td>
        <td>
          <b>Endereço</b>
        </td>
        <td>
          <b>Telefone</b>
        </td>
        <td>
          <b>Data de Nascimento</b>
        </td>
        <td>

        </td>
        <td>

        </td>
        <td>
          <b>Alterar</b>
        </td>
        <td>
          <b>Deletar</b>
        </td>
      </tr>

      <?php  foreach($this->lista_usuario as $usuario): ?>
      <tr>
        <td>
          <?=$usuario['id']?>
        </td>
        <td>
          <?=$usuario['nome']?>
        </td>
        <td>
          <?=$usuario['email']?>
        </td>
        <td>
          <?=$usuario['criado']?>
        </td>
        <td>
          <?=$usuario['alterado']?>
        </td>

        <td>

        </td>
        <td>

        </td>
        <td>

          <a href="?controle=usuario&acao=editar&idedit=<?php echo $usuario['id']?>">
            <span class="icon-editar glyphicon glyphicon-edit" aria-hidden="true"></span>
            <?php $idedit=@$_GET['idedit']?>
          </a>
        <td>
          <a href="?controle=usuario&acao=deletar&id=<?php echo $usuario['id']?>">
            <span class="icon-deletar glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
          </a>
        </td>
        <?php endforeach;?>
      </tr>
    </table>
    </form>
    </td>
  </div>
</div>

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