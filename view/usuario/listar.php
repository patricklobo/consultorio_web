


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
                   <b>  Nivel </b>
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
                        <?=$usuario['nivel']?>
                    </td>
                    <td>
                        <?=$usuario['criado']?>
                    </td>
                    <td>
                        <?=$usuario['alterado']?>
                    </td>
                    <td>
                      <a href="?controle=usuario&acao=editar&idedit=<?=$usuario['id']?>">
                        <span class="icon-editar glyphicon glyphicon-pencil" aria-hidden="true"></span>
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
