


<div class="panel panel-default">
    <div class="panel-heading">
      <ul class="nav navbar-nav">
        <h3 class="panel-title"><b>Consultas Agendadas</b></h3>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <a href="?controle=agendamento&acao=cadastrar">
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
      </a>
      </ul>


        <a href="?controle=agendamento&acao=cadastrar">
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
                  <b>  Usuario </b>
                </td>
                <td>
                  <b>  Paciente </b>
                 </td>
                 <td>
                   <b>Data/Hora</b>
                 </td>
                 <td>
                   <b>Status</b>
                 </td>
                 <td>
                   <b>Data</b>
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

            <?php foreach ($this->lista_agendamentos as $agendamento) : ?>
                <tr>
                  <td>
                      <?=$agendamento['id']?>
                  </td>
                    <td>
                        <?=$agendamento['usuario']?>
                    </td>
                    <td>
                        <?=$agendamento['paciente']?>
                    </td>
                    <td>
                        <?=$agendamento['data_hora']?>
                    </td>
                    <td>
                        <?=$agendamento['status']?>
                    </td>
                    <td>
                        <?=$agendamento['data']?>
                    </td>
                    <td>
                        <?=$agendamento['criado']?>
                    </td>
                    <td>
                        <?=$agendamento['alterado']?>
                    </td>
                    <td>
                      <a href="?controle=usuario&acao=editar&id=<?=$usuario['id']?>">
                        <span class="icon-editar glyphicon glyphicon-edit" aria-hidden="true"></span>
                    </a>
                    </td>
                    <td>
                      <a href="?controle=agendamento&acao=deletar&id=<?=$agendamento['id']?>">
                        <span class="icon-deletar glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </a>
                    </td>
                  </tr>
            <?php endforeach; ?>

        </table>
    </div>
</div>
