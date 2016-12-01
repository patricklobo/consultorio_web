<?php
require_once "../model/Conexao.php";
require_once "../model/Agendamento.php";

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

    }

      public function cadastrar1(){
         //echo "testando";
        $dados = $this->post();
        debug($dados);
        if($dados){
            $agendamento = new Agendamento();
            $novo_agendamento = $agendamento->setAgendamento($dados);
            if (!empty($novo_agendamento)){
                echo "<script>alert('Consulta agendada!.');</script>";
                echo "<meta http-equiv='refresh' content='0, url=?controle=agendamento&acao=listar'>";
            }else{
                echo "erro ao cadastrar";
            }
        }
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


    public function editar(){
        $agendamento = new Agendamento();
        $this->lista_agendamento = $agendamento->getAgendamento();

        foreach ($this->lista_agendamento as $agendamento):
            $id = @$_GET['id'];
        endforeach;

        debug($agendamento);
        // $this->lista_agendamento2 = $agendamento->getAgendamentoUni($id);
        // $this->show();
        // $dados = $this->post();
        // if ($dados) {
        //     $agendamento = new Agendamento();
        //     $agendamento->update($dados);
        //     echo "<meta http-equiv='refresh' content='0, url=?controle=agendamento&acao=listar'>";
        //     echo "<script>alert('Dados de consulta alterada com sucesso.');</script>";
        // } else {
        //     echo "";
        // }

      }
}
?>

}
