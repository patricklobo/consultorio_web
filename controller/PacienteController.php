<?php
require_once '../model/Paciente.php';


class PacienteController extends Controller
{


    public function cadastrar()
    {

        $dados = $this->post();
        if ($dados) {
            $paciente = new Paciente();
            $novo_paciente = $paciente->setPacienteCadastrar($dados);

            if (empty($novo_paciente->nome)) {
                echo "<script>alert('Paciente cadastrado com sucesso.');</script>";
                echo "<meta http-equiv='refresh' content='0, url=?controle=paciente&acao=listar'>";
            } else {
                echo "erro ao cadastrar";
            }
        }
        //require_once "../view/paciente/cadastrar.php";
        $this->show();
    }

    public function editar()
    {

        //$this->listar();
        $pacientemostrar = new Paciente();
        $this->lista_pacientes = $pacientemostrar->getPaciente();

        foreach ($this->lista_pacientes as $paciente):
            $idedit = @$_GET['idedit'];
        endforeach;

        $this->lista_pacientes2 = $pacientemostrar->mostrarPacienteEditar($idedit);
        $this->show();
        $dados = $this->post();
        if ($dados) {
            $paciente = new Paciente();
            $paciente->execUpdatePaciente($dados);
            echo "<meta http-equiv='refresh' content='0, url=?controle=paciente&acao=listar'>";
            echo "<script>alert('Paciente alterado com sucesso.');</script>";
        } else {
            echo "ERRO!";
        }

    }

    public function listar()
    {
        $paciente = new Paciente();
        $this->lista_pacientes = $paciente->getPaciente();
        $this->show();


    }

    /*public function auxLista(){
          $paciente = new Paciente();
        $this->lista_pacientes = $paciente->getPaciente();

        }*/

    public function deletar()
    {
        //$this->auxLista();
        $paciented = new Paciente();
        $this->lista_pacientes = $paciented->getPaciente();
        foreach ($this->lista_pacientes as $paciente):
            $iddelete = @$_GET['id'];

        endforeach;

        $paciented->setPacienteDeletar($iddelete);
        echo "<meta http-equiv='refresh' content='0, url=?controle=paciente&acao=listar'>";

    }

}
