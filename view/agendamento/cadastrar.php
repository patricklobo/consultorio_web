<<<<<<< HEAD
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><b>Agendar consulta</b></h3>
    </div>

    <div class="panel-body" >
      <form method="post" action="">
        <input type="hidden" name="id">
        <div class="form-group">
          <label>Usuario</label>
          <input type="text"  name="usuario" class="form-control" >
        </div>
        <div class="form-group">
          <label>Paciente</label>
          <input type="text"  name="paciente" class="form-control" >
        </div>
=======
<?php

?>


<div class="panel-body">
    <form method="post" action="">

>>>>>>> 6c401dd61aba298ca0eeb32deba86d27335b54d6
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