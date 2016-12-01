<?php
?>
<div class="container">
<div class="panel panel-default">
    <div class="panel-body">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Consulta Detalhada</b></div>
        </div>

        <table class="table table-striped">

            <?php foreach ($this->agenda_detalhada as $detalha):?>

            <tr>
                <td>
                    <b>Identificador</b>
                </td>
                <td>
                    <?=$detalha['id']?>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Data/Hora da consulta:</b>
                </td>
                <td>
                    <?=$detalha['datahora']?>
                </td>

            </tr>
            <tr>
                <td>
                    <b>Paciente:</b>
                </td>
                <td>
                    <?=$detalha['nomepaciente']?>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Médico/Especialidade:</b>
                </td>
                <td>
                    <?=$detalha['nomemedico']?> - <?=$detalha['nomeespecialidade']?>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Estado do agendamento:</b>
                </td>
                <td>
                    <?=$detalha['statusagendamento']?>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Agendado por:</b>
                </td>
                <td>
                    <?=$detalha['nome']?>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Data de criação:</b>
                </td>
                <td>
                    <?=$detalha['datacriado']?>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Ultima alteração:</b>
                </td>
                <td>
                    <?=$detalha['dataalterado']?>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Fazer alteração</b>
                </td>
                <td>
                    <a href="?controle=agendamento&acao=editar&id=<?php echo $detalha['id']?>">
                        <span class="icon-editar glyphicon glyphicon-edit" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>

                <tr>
                    <td>
                        <b>Excluir consulta</b>
                    </td>
                    <td>
                        <a href="?controle=agendamento&acao=deletar&id=<?php echo $detalha['id']?>">
                            <span class="icon-deletar glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            <?php endforeach;?>

<!--            --><?php // //foreach($this->lista_agendamentos as $Agendamento): ?>
<!--            <tr>-->
<!--                <td>-->
<!--                    Teste-->
<!--                </td>-->
<!--                <td>-->
<!--                    Teste-->
<!--                </td>-->
<!--                <td>-->
<!--                    Teste-->
<!--                </td>-->
<!--                <td>-->
<!--                    Teste-->
<!--                </td>-->
<!--                <td>-->
<!--                    Teste-->
<!--                </td>-->
<!--                <td>-->
<!--                    <a href="?controle=Agendamento&acao=detalhar&id=--><?php ////echo $Agendamento['id']?><!--">-->
<!--                        <span class="icon-deletar glyphicon glyphicon-edit" aria-hidden="true"></span>-->
<!--                    </a>-->
<!--                </td>-->
<!--                --><?php ////endforeach;?>
<!--            </tr>-->
        </table>
   </div>
</div>
</div>
