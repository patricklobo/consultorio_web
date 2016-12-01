<?php
require_once '../model/Paciente.php';
require_once '../model/Alerta.php';


class PacienteController extends Controller
{


    public function cadastrar()
    {

        $dados = $this->post();
        if ($dados) {
            $paciente = new Paciente();
            $novo_paciente = $dados;//$Paciente->setPacienteCadastrar($dados);
            $alerta = new Alerta();

            if (empty($novo_paciente->nome) || empty($novo_paciente->endereco) || empty($novo_paciente->telefone) || empty($novo_paciente->datanasc) || empty($novo_paciente->email)) {
                $alerta->alertaCamposvazios();
            } else {
                $paciente->setPacienteCadastrar($dados);
                $alerta->alertaCadPaciente();
            }
        }
        $this->show();
    }

    public function editar()
    {

        //$this->listar();
        $pacientemostrar = new Paciente();
        $this->lista_pacientes = $pacientemostrar->getPaciente();

        $idedit = @$_GET['idedit'];


        $this->lista_pacientes2 = $pacientemostrar->mostrarPacienteEditar($idedit);

        $dados = $this->post();
        if ($dados) {
            $paciente = new Paciente();
            $alerta = new Alerta();
            if (empty($dados->nome) || empty($dados->endereco) || empty($dados->telefone) || empty($dados->datanasc) || empty($dados->email)) {
                $alerta->alertaCamposvazios();
            } else {
                $paciente->execUpdatePaciente($dados);
                $alerta->alertaAlterPaciente();
                echo "<meta http-equiv='refresh' content='1, url=?controle=Paciente&acao=listar'>";
            }

        }
        $this->show();

    }

    public function listar()
    {
        $paciente = new Paciente();
        $this->lista_pacientes = $paciente->getPaciente();
        $this->show();


    }

    /*public function auxLista(){
          $Paciente = new Paciente();
        $this->lista_pacientes = $Paciente->getPaciente();

        }*/

    public function deletar()
    {
        //$this->auxLista();
        $paciented = new Paciente();
        $this->lista_pacientes = $paciented->getPaciente();

        $iddelete = @$_GET['id'];



        $paciented->setPacienteDeletar($iddelete);
        echo "<meta http-equiv='refresh' content='0, url=?controle=Paciente&acao=listar'>";

    }

}