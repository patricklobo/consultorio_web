<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>
<div class="panel-body">
<form class="navbar-form navbar-left" method="post" action="">
    <div class="form-group">
        <input type="date" class="form-control" placeholder="Buscar por data" name="consultapesquisa">
    </div>
    <button type="submit" class="btn btn-default">Buscar</button>
</form>
</div>
<?php

if (empty($_POST['consultapesquisa'])){
    echo " ";
} else {


    ?>

    <div class="panel panel-default">

    <div class="panel-body">
    <div class="panel panel-default">
        <div class="panel-heading"><b>Consultas agendadas para o dia <?php echo $_POST['consultapesquisa'] ?></b></div>
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

        <?php foreach ($this->lista_resultado as $agendamento): ?>
        <tr>
            <td>
                <?= $agendamento['datahora'] ?>
            </td>
            <td>
                <?= $agendamento['nomepaciente'] ?>
            </td>
            <td>
                <?= $agendamento['datacriado'] ?>
            </td>
            <td>
                <?= $agendamento['nomeusuario'] ?>
            </td>
            <td>
                <?= $agendamento['dataalterado'] ?>
            </td>
            <?php endforeach; ?>
        </tr>
    </table>
    <?php
}
?>


