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
        </table>
