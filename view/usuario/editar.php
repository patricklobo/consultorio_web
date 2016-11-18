<div class="panel panel-default">
    <div class="panel-heading">
      <ul class="nav navbar-nav">
        <h3 class="panel-title"><b>Lista de usuários</b></h3>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <a href="?controle=usuario&acao=cadastrar">
          <span class="glyphicon glyphicon-plus" aria-hidden="true">Novo usuário</span>
      </a>
      </ul>


        <a href="?controle=usuario&acao=cadastrar">
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
      </a>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <tr>
                <td>
                     <b>ID</b>
                </td>
                <td>
                  <b>  Nome </b>
                </td>
                <td>
                  <b>  Email </b>
                 </td>
                <td>
                  <b>Criado</b>
                </td>
                <td>
                  <b>Alterado</b>
                </td>
                <td>
                  <b>Editar</b>
                </td>
                <td>
                  <b>Excluir</b>
                </td>
            </tr>

            <?php foreach ($this->lista_usuarios as $usuario) : ?>
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
                      <a href="?controle=usuario&acao=editar&id=<?=$usuario['id']?>">
                        <span class="icon-editar glyphicon glyphicon-edit" aria-hidden="true"></span>
                        <?php $id=@$_GET['id']?>
                    </a>
                    </td>
                    <td>
                      <a href="?controle=usuario&acao=deletar&id=<?=$usuario['id']?>">
                        <span class="icon-deletar glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </a>
                    </td>
                  </tr>
            <?php endforeach; ?>

        </table>
    </div>
</div>



<?php
 foreach($this->lista_usuario2 as $usuario): ?>

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
          <input type="text"  name="id" value="<?php echo $usuario['id']?>" class="form-control" >
        </div>
        <div class="form-group">
          <label>Nome</label>
          <input type="text"  name="nome" value="<?= $usuario['nome']?>" class="form-control" >
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text"  name="email" value="<?= $usuario['email']?>"  class="form-control" >
        </div>
        <div class="form-group">
          <label>Senha</label>
          <input type="password" name="senha" value="<?= $usuario['senha']?>"   class="form-control" >
        </div>
        <button type="submit" class="btn btn-default">Salvar</button>
      </form>
    </div>
  </div>
<?php endforeach ?>
