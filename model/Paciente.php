<?php
require_once "../model/Conexao.php";
class Paciente
{
private $sql = null;
    private $iddeletar;


    function __construct()
    {
        $this->conexao = new Conexao();
        $this->conexao->conectar();

    }




    public function getPaciente()
    {
        $this->sql = "SELECT id, nome, endereco, telefone, datanasc, email FROM paciente";
        $this->conexao->execSQL($this->sql);
        $lista = [];
        while ($row = $this->conexao->listarResultados()) {
            $lista[] = $row;
        }
        return $lista;
    }

    public function setPacienteCadastrar($paciente) {
        $this->sql = "INSERT INTO paciente(nome, endereco, telefone, datanasc, email) VALUES ('$paciente->nome', '$paciente->endereco', '$paciente->telefone', '$paciente->datanasc', '$paciente->email')";
        $this->conexao->execSQL ( $this->sql );
        //return $this->conexao->getId();
    }

    public function setPacienteDeletar($id) {

        $this->sql = "DELETE FROM paciente WHERE id = '$id'";
        $this->conexao->execSQL($this->sql);


    }

    public function pacienteEditar() {

    }

    public function mostrarPacienteEditar($idedit){
        $this->sql = "SELECT id, nome, endereco, telefone, datanasc, email FROM paciente WHERE id='$idedit'";
        $this->conexao->execSQL($this->sql);
        $listae = [];
        while ($row = $this->conexao->listarResultados()) {
            $listae[] = $row;
        }
        return $listae;


    }

    public function execUpdatePaciente($pacienteupdate){
        $this->sql = "UPDATE paciente SET nome='$pacienteupdate->nome', endereco='$pacienteupdate->endereco', telefone='$pacienteupdate->telefone', datanasc='$pacienteupdate->datanasc', email='$pacienteupdate->email' WHERE id='$pacienteupdate->id'";
        $this->conexao->execSQL($this->sql);

    }

    public function getPacienteSelect() {
        $this->sql = "SELECT id, nome FROM paciente";
        $this->conexao->execSQL($this->sql);
        $lista = [];
        while ($row = $this->conexao->listarResultados()) {
            $lista[] = $row;
        }
        return $lista;
        //$result = $this->conexao->execSQL($this->sql);
        //$row = mysql_fetch_array($result);
        //return $row;

    }
}
