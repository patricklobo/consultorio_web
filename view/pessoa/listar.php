<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Lista de pessoas</h3>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <tr>
                <td>
                    Nome
                </td>
                <td>
                    Email
                </td>
            </tr>
            <?php foreach ($this->lista as $pessoa) : ?>
                <tr>
                    <td>
                        <?=$pessoa->nome?>
                    </td>
                    <td>
                        <?=$pessoa->email?>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</div>
