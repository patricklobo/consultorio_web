<?php
?>


<div class="container">
    <div class="panel panel-default">
        <div class="panel-body" >
            <?php  foreach($this->medicoeditar as $medicomostrar): ?>

            <form method="post" action="">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Alterar médico: <?php echo $medicomostrar['nomemedico']?></b></div>
                </div>
                <div class="form-group">
                    <label>ID</label>
                    <input class="form-control" name="id" type="text" readonly="true" value="<?php echo $medicomostrar['id']?>">
                </div>

                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control" name="nome" type="text" value="<?php echo $medicomostrar['nomemedico']?>">
                </div>

                <div class="form-group">
                    <label>Especialidade</label>
                    <?php

                    echo "<select class='form-control' name='idespecialidade'>";
                    echo "<option value='$medicomostrar[idespecialidade]'> $medicomostrar[nomeespecialidade] </option>";
                    foreach($this->especialidade_select_edit as $especialidade)
                    {
                        echo "<option value=$especialidade[id]> $especialidade[nome] </option>";
                    }

                    echo "</select>";
                    ?>

                </div> </br>


                <button type="submit" class="btn btn-default">Salvar</button>
                <button type="submit" class="btn btn-default"><a href="?controle=medico&acao=listar">Voltar</a></button>

            </form>
        </div>
        <?php endforeach;?>
    </div>
</div>
</div>

