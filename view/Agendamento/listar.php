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
                    <b>Médico - Especialidade</b>
                </td>
                <td>
                    <b>Agendado por</b>
                </td>
                <td>
                    <b>Dia de criação</b>
                </td>
                <td>
                    <b>Detalhar</b>
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
                    <?=$agendamento['nomemedico']?> - <?=$agendamento['nomeespecialidade'] ?>
                </td>
                <td>
                    <?=$agendamento['nomeusuario']?>
                </td>
                <td>
                    <?=$agendamento['datacriado']?>
                </td>
                <td>
                    <a href="?controle=agendamento&acao=detalhar&id=<?php echo $agendamento['id']?>">
                        <span class="icon-deletar glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
        </table>
    </div>
</div>

