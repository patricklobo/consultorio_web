<?php

?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
    <form method="post" action="">

        <div class="form-group">
            <label>Dia</label>
            <input class="form-control" name="data" type="date" placeholder="">
        </div>

        <div class="form-group">
            <label>Hora</label>
            <input class="form-control" name="hora" type="time" placeholder="">
        </div>


        <div class="form-group">
            <label>Paciente</label>
            <?php

            echo "<select class='form-control' name='idpaciente'>";
                echo "<option value=''> Selecione o Paciente...</option>";
            foreach($this->paciente_select as $paciente)
            {
                echo "<option value=$paciente[id]> $paciente[nome] </option>";
            }

            echo "</select>";
            ?>

        </div>

        <div class="form-group">
            <label>Médico</label>
            <?php

            echo "<select class='form-control' name='idmedico'>";
            echo "<option value=''> Selecione o médico...</option>";
            foreach($this->medicos_select as $medico)
            {
                echo "<option value=$medico[idmedico]> $medico[nomemedico] - $medico[nomeespecialidade] </option>";
            }

            echo "</select>";
            ?>

        </div> </br>

        <button type="submit" class="btn btn-default">Agendar</button>
    </form>
</div>
</div>
</div>
</div>