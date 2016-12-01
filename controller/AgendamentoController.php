<?php

require_once '../model/Agendamento.php';
require_once '../model/Paciente.php';
require_once '../model/Alerta.php';
require_once '../model/Medico.php';

class AgendamentoController extends Controller
{

    public function cadastrar()
    {
        $alerta = new Alerta();
        $dados = $this->post();
        $paciente = new Paciente();
        $medico = new Medico();
        $this->paciente_select = $paciente->getPacienteSelect();
        $this->medicos_select = $medico->getMedicoSelect();
        if ($dados) {
            $agendamento = new Agendamento();
            $novo_agendamento = $dados;//

            if (empty($novo_agendamento->data) || (empty($novo_agendamento->hora) || (empty($novo_agendamento->idpaciente)))) {
                $alerta->alertaCamposvazios();
            } else {
                $agendamento->cadAgendamento($dados);
                $alerta->alertaCadConsulta();
                echo "<meta http-equiv='refresh' content='1, ?controle=Agendamento&acao=listar'>";
            }
        }
        $this->show();

    }

    public function deletar()
    {
        $alertadelete = new Alerta();
        $agendamentodeletar = new Agendamento();
        $id = @$_GET['id'];
        $agendamentodeletar->agendamentoDeletar($id);
        $alertadelete->criarAlerta("success", "Feito!", "Agendamento deletado com sucesso.");
        echo "<meta http-equiv='refresh' content='1, url=?controle=Agendamento&acao=listar'>";

    }

    public function listar()
    {

        $agendamento = new Agendamento();
        $this->lista_agendamentos = $agendamento->getAgendamento();
        $this->show();


    }

    public function editar()
    {
        $pacienteedit = new Paciente();
        $agendaalterar = new Agendamento();
        $medicoselect = new Medico();
        $this->paciente_select_editar = $pacienteedit->getPacienteSelect();
        $this->medicos_select_editar = $medicoselect->getMedicoSelect();
        $id = @$_GET['id'];
        $this->agenda_alterar = $agendaalterar->selectDetalhar($id);

        foreach ($this->agenda_alterar as $agenda):
        switch ($agenda['statusagendamento']){

            case 0:
                $this->statusagendamento = 'Cancelada';
                break;
            case 1:
                $this->statusagendamento = 'Aguardando';
                break;
            case 2:
                $this->statusagendamento = 'Executada';
                break;

        }
        endforeach;



        $this->show();

    }

    public function buscar() {

        $dados = $this->post();
        $alerta = new Alerta();
        if ($dados){
            $agendamento = new Agendamento();
            if (empty($dados->consultapesquisa)) {
                $alerta->alertaDataVazia();
            } else {
                $this->lista_resultado = $agendamento->getAgendamentoUni($dados);
                $this->contador = $agendamento->countAgendamento($dados);
                if (empty($this->lista_resultado)) {
                    $alerta->criarAlerta("info", "Atenção!", "Não há consultas para a data informada.");

                }
            }
        }


        $this->show();


    }

    public function detalhar(){

        $agendadetalhar = new Agendamento();
        $this->id = @$_GET['id'];
        $this->agenda_detalhada = $agendadetalhar->selectDetalhar($this->id);


        $this->show();

    }


}