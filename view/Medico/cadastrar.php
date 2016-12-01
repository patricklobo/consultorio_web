<?php


?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <form method="post" action="">

                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control" name="nome" type="text" placeholder="">
                </div>


                <div class="form-group">
                    <label>Especialidade</label>
                    <?php

                    echo "<select class='form-control' name='idespecialidade'>";
                    echo "<option value=''>...Selecione a especialidade...</option>";
                    foreach($this->especialidade_select as $especialidade)
                    {
                        echo "<option value=$especialidade[id]> $especialidade[nome] </option>";
                    }

                    echo "</select>";
                    ?>

                </div> </br>

                <button type="submit" class="btn btn-default">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
</div>
