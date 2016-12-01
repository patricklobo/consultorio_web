<?php

//$paciente = new PacienteController();


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
                    </a>
                    </form>
                </td>
                <td>
                    <a href="?controle=paciente&acao=deletar&id=<?php echo $paciente['id']?>">
                        <span class="icon-deletar glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
        </table>
    </div>
</div>