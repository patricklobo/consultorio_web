<?php
require_once '../model/Agendamento.php';
require_once '../model/Conexao.php';

 class AgendamentoController extends Controller{

      public function listar(){
        $agendamento = new Agendamento();
        //debug($usuario);
        $this->lista_agendamentos = $agendamento->getAgendamento();
        //debug($this->lista_usuarios);
         $this->show();
      }

      public function cadastrar(){
        // echo "testando";
        $dados = $this->post();
        debug($dados);
        // if($dados){
        //     $agendamento = new Agendamento();
        //     $novo_agendamento = $agendamento->setAgendamento($dados);
        //     if (!empty($novo_agendamento)){
        //         echo "<script>alert('Consulta agendada!.');</script>";
        //         echo "<meta http-equiv='refresh' content='0, url=?controle=agendamento&acao=listar'>";
        //     }else{
        //         echo "erro ao cadastrar";
        //     }
        // }
        $this->show();
      }


    public function deletar($id){
      $agendamento = new Agendamento();
      //debug($usuario);
      $id = $_GET['id'];
      debug($id);
      $agendamento->deletar($id);
      $this->show();
    }

}
?>
