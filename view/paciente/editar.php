<?php

//$paciente = new PacienteController();
//$pacientemostrar = new PacienteController();
?>

<div class="panel panel-default">

    <div class="panel-body">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Pacientes cadastrados</b></div>
        </div>

        <table class="table table-striped">
            <tr>
                <td>
                    <b>ID</b>
                </td>
                <td>
                    <b>Nome</b>
                </td>
                <td>
                    <b>Endereço</b>
                </td>
                <td>
                    <b>Telefone</b>
                </td>
                <td>
                    <b>Data de Nascimento</b>
                </td>
                <td>
                    <b>E-mail</b>
                </td>
                <td>

                </td>
                <td>

                </td>
                <td>
                    <b>Alterar</b>
                </td>
                <td>
                    <b>Deletar</b>
                </td>
            </tr>

            <?php  foreach($this->lista_pacientes as $paciente): ?>
            <tr>
                <td>
                    <?=$paciente['id']?>
                </td>
                <td>
                    <?=$paciente['nome']?>
                </td>
                <td>
                    <?=$paciente['endereco']?>
                </td>
                <td>
                    <?=$paciente['telefone']?>
                </td>
                <td>
                    <?=$paciente['datanasc']?>
                </td>
                <td>
                    <?=$paciente['email']?>
                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                    <a href="?controle=paciente&acao=editar&idedit=<?php echo $paciente['id']?>">
                        <span class="icon-editar glyphicon glyphicon-edit" aria-hidden="true"></span>
                        <?php $idedit=@$_GET['idedit']?>
                    </a>
                <td>
                    <a href="?controle=paciente&acao=deletar&id=<?php echo $paciente['id']?>">
                        <span class="icon-deletar glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
        </table>
        </form>
        </td>
    </div>
</div>
<div class="container">
<div class="panel panel-default">
<div class="panel-body" >
    <?php  foreach($this->lista_pacientes2 as $pacientemostrar): ?>

    <form method="post" action="">

        <div class="panel panel-default">
            <div class="panel-heading"><b>Alterar paciente: <?php echo $pacientemostrar['nome']?></b></div>
        </div>
        <div class="form-group">
            <label>ID</label>
            <input class="form-control" name="id" type="text" readonly="true" value="<?php echo $pacientemostrar['id']?>">
        </div>

        <div class="form-group">
            <label>Nome</label>
            <input class="form-control" name="nome" type="text" value="<?php echo $pacientemostrar['nome']?>">
        </div>

        <div class="form-group">
            <label>Endereço</label>
            <input class="form-control" name="endereco" type="text" value="<?php echo $pacientemostrar['endereco']?>">
        </div>

        <div class="form-group">
            <label>Telefone</label>
            <input class="form-control" name="telefone" type="text" value="<?php echo $pacientemostrar['telefone']?>">
        </div>

        <div class="form-group">
            <label>Data de nascimento</label>
            <input class="form-control" name="datanasc" type="date" value="<?php echo $paciente['datanasc']?>">
        </div>

        <div class="form-group">
            <label>E-mail</label>
            <input class="form-control" name="email" type="email" value="<?php echo $pacientemostrar['email']?>">
        </div>


        <button type="submit" class="btn btn-default">Salvar</button>
        <button type="submit" class="btn btn-default"><a href="?controle=paciente&acao=listar">Voltar</a></button>

    </form>
</div>
<?php endforeach;?>
</div>
</div>
</div>
