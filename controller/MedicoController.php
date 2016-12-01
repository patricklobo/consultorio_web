<?php

require_once "../model/Medico.php";
require_once "../model/Alerta.php";

class MedicoController extends Controller {

    public function cadastrar() {

        $alerta = new Alerta();
        $dados = $this->post();
        $medico = new Medico();
        $this->especialidade_select = $medico->getEspecialidadeSelect();
        if ($dados) {
            //$novo_medico = $dados;
            if (empty($dados->nome) || empty($dados->idespecialidade) ) {
                $alerta->alertaCamposvazios();
            } else {
                $medico->cadMedico($dados);
                $alerta->criarAlerta("success", "Feito!", "Médico cadastrado com sucesso!");
                echo "<meta http-equiv='refresh' content='1, ?controle=medico&acao=listar'>";
            }
        }
        $this->show();
    }

    public function listar() {

        $medico = new Medico();
        $this->lista_medicos = $medico->getMedico();
        $this->show();


    }

    public function editar() {
        $medicomostrar = new Medico();
        $this->lista_medicos = $medicomostrar->getMedico();
        $this->especialidade_select_edit = $medicomostrar->getEspecialidadeSelect();

        $idedit = @$_GET['idedit'];


        $this->medicoeditar = $medicomostrar->mostrarMedicoEditar($idedit);

        $dados = $this->post();
        if ($dados) {
            $medico= new Medico();
            $alerta = new Alerta();
            if (empty($dados->id) || empty($dados->nome) || empty($dados->idespecialidade)) {
                $alerta->alertaCamposvazios();
            } else {
                $medico->execUpdateMedico($dados);
                $alerta->criarAlerta("success", "Feito!", "Médico alterado com sucesso!");
                echo "<meta http-equiv='refresh' content='1, url=?controle=medico&acao=listar'>";
            }

        }
        $this->show();

    }

    public function deletar() {

        $alerta = new Alerta();
        $medicodelete = new Medico();
        $iddelete = @$_GET['id'];
        $medicodelete->medicoDeletar($iddelete);
        $alerta->criarAlerta("success", "Feito!", "Médico deletado com sucesso.");
        echo "<meta http-equiv='refresh' content='1, url=?controle=medico&acao=listar'>";



    }


}