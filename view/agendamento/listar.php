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
    </div>
<?php

?>

<div class="panel panel-default">

  <div class="panel-body">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Consultas agendadas</b></div>
        </div>

        <table class="table table-striped">
            <tr>
                <td>
                    <b>Data/Hora</b>
                </td>
                <td>
                    <b>Paciente</b>
                </td>
                <td>
                    <b>Dia de criação</b>
                </td>
                <td>
                    <b>Agendado por</b>
                </td>
                <td>
                    <b>Ultima alteração</b>
                </td>
            </tr>

            <?php  foreach($this->lista_agendamentos as $agendamento): ?>
            <tr>
                <td>
                    <?=$agendamento['datahora']?>
                </td>
                <td>
                    <?=$agendamento['nomepaciente']?>
                </td>
                <td>
                    <?=$agendamento['datacriado']?>
                </td>
                <td>
                    <?=$agendamento['nomeusuario']?>
                </td>
                <td>
                    <?=$agendamento['dataalterado']?>
                </td>
                <?php endforeach;?>
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
                      <a href="?controle=agendamento&acao=editar&id=<?=$agendamento['id']?>">
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
