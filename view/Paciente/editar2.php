<div class="panel-body" >
    <form method="post" action="?contole=paciente&acao=cadastrar">

        <?php  foreach($this->lista_pacientes as $pacientemostrar): ?>
        <div class="panel panel-default">
            <div class="panel-heading"><b>Alterar paciente: <?php echo $pacientemostrar['nome']?></b></div>
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
            <input class="form-control" name="datanasc" type="text" value="<?php echo $pacientemostrar['datanasc']?>">
        </div>

        <div class="form-group">
            <label>E-mail</label>
            <input class="form-control" name="email" type="text" value="<?php echo $pacientemostrar['email']?>">
        </div>


        <button type="submit" class="btn btn-default">Salvar</button>
        <button type="submit" class="btn btn-default"><a href="?controle=paciente&acao=listar" value="voltar">Voltar</a></button>

    </form>
</div>
<?php endforeach;?>
</div>
