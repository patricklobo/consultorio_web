<?php
?>

<div class="panel panel-default">

    <div class="panel-body">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Médicos cadastrados</b></div>
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
                    <b>Especialidade</b>
                </td>

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

            <?php  foreach($this->lista_medicos as $medico): ?>
<tr>
    <td>
        <?=$medico['id']?>
    </td>
    <td>
        <?=$medico['nomemedico']?>
    </td>
    <td>
        <?=$medico['nomeespecialidade']?>
    </td>

    <td>

    </td>
    <td>

    </td>
    <td>

        <a href="?controle=medico&acao=editar&idedit=<?php echo $medico['id']?>">
            <span class="icon-editar glyphicon glyphicon-edit" aria-hidden="true"></span>
        </a>
        </form>
    </td>
    <td>
        <a href="?controle=medico&acao=deletar&id=<?php echo $medico['id']?>">
            <span class="icon-deletar glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
        </a>
    </td>
    <?php endforeach;?>
</tr>
</table>
</div>
</div>