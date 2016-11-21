<?php

?>


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
                echo "<option value=''> Selecione o paciente...</option>";
            foreach($this->lista_pacientes3 as $paciente)
            {
                echo "<option value=$paciente[id]> $paciente[nome] </option>";
            }

            echo "</select>";
            ?>

        </div> </br>

        <button type="submit" class="btn btn-default">Agendar</button>
    </form>
</div>
</div>