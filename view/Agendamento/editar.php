<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>


<div class="container">
    <div class="panel panel-default">
        <div class="panel-body" >
            <?php  foreach($this->agenda_alterar as $agenda): ?>

            <form method="post" action="">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Fazer alteração em c onsulta</b></div>
                </div>
                <div class="form-group">
                    <label>ID</label>
                    <input class="form-control" name="id" type="text" readonly="true" value="<?php echo $agenda['id']?>">
                </div>

                <div class="form-group">
                    <label>Data/Hora da consulta</label>
                    <input class="form-control" name="nome" type="text" value="<?php echo $agenda['datahora']?>">
                </div>

                    <div class="form-group">
                        <label>Paciente</label>
                        <?php

                        echo "<select class='form-control' name='idpacienteagenda'>";
                        echo "<option value='$agenda[idpaciente]'> Selecionado:$agenda[nomepaciente]</option>";
                        foreach($this->paciente_select_editar as $paciente)
                        {
                            echo "<option value=$paciente[id]> $paciente[nome] </option>";
                        }

                        echo "</select>";
                        ?>

                    </div>

                <div class="form-group">
                    <label>Médico</label>
                    <?php

                    echo "<select class='form-control' name='idmedicoagenda'>";
                    echo "<option value='$agenda[idmedico]'> $agenda[nomemedico] - $agenda[nomeespecialidade]</option>";
                    foreach($this->medicos_select_editar as $medico)
                    {
                        echo "<option value=$medico[idmedico]> $medico[nomemedico] - $medico[nomeespecialidade] </option>";
                    }

                    echo "</select>";
                    ?>

                </div>

                <div class="form-group">
                    <label>Estado do agendamento</label>
                <?php

                echo "<select class='form-control' name='idstatusagendamento'>";
                echo "<option value='$agenda[statusagendamento]'> Selecionado: $this->statusagendamento </option>";
                echo "<option value='0'> Cancelada </option>";
                echo "<option value='1'> Aguardando </option>";
                echo "<option value='2'> Executada </option>";

                echo "</select>";
                ?>
                </div>

                <div class="form-group">
                    <label>Agendado por</label>
                    <input class="form-control" name="email" type="text" readonly="true" value="<?php echo $agenda['nome']?>">
                </div>

                <div class="form-group">
                    <label>Data de criação</label>
                    <input class="form-control" name="email" type="text" readonly="true" value="<?php echo $agenda['datacriado']?>">
                </div>

                <div class="form-group">
                    <label>Data de alteração</label>
                    <input class="form-control" name="email" readonly="true" type="text" value="<?php echo $agenda['dataalterado']?>">
                </div>


                <button type="submit" class="btn btn-default">Salvar</button>
                <button type="submit" class="btn btn-default"><a href="?controle=paciente&acao=listar">Voltar</a></button>

            </form>
        </div>
        <?php endforeach;?>
    </div>
</div>
</div>
