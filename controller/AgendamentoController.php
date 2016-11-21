<?php

require_once '../model/Agendamento.php';
require_once '../model/Paciente.php';
require_once '../model/Alerta.php';

class AgendamentoController extends Controller
{

    public function cadastrar()
    {
        $alerta = new Alerta();
        $dados = $this->post();
        if ($dados) {
            $agendamento = new Agendamento();
            $novo_agendamento = $dados;//$agendamento->cadAgendamento($dados);

            if (empty($novo_agendamento->data) || (empty($novo_agendamento->hora) || (empty($novo_agendamento->idpaciente)))) {
                $alerta->alertaCamposvazios();
            } else {
                $agendamento->cadAgendamento($dados);
                $alerta->alertaCadConsulta();
            }
        }
        $this->show();

    }

    public function deletar()
    {



    }

    public function listar()
    {

        $agendamento = new Agendamento();
        $this->lista_agendamentos = $agendamento->getAgendamento();
        $this->show();


    }

    public function alterar()
    {



    }

    public function buscar() {

        $dados = $this->post();
        $alerta = new Alerta();
        if ($dados){
            $agendamento = new Agendamento();
            if (empty($dados->consultapesquisa)) {
                $alerta->alertaCamposvazios();
            } else {
                $this->lista_resultado = $agendamento->getAgendamentoUni($dados);
            }
        }


        $this->show();


    }


}