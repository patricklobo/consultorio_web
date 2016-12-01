<?php

require_once '../model/Conexao.php';

class Medico {

    private $sql = null;


    function __construct()
    {
        $this->conexao = new Conexao();
        $this->conexao->conectar();

    }


    public function getMedico()
    {
        $this->sql = "SELECT m.id, m.nome AS nomemedico, e.nome AS nomeespecialidade FROM medico m, especialidade e WHERE m.especialidade_id = e.id";
        $this->conexao->execSQL($this->sql);
        $lista = [];
        while ($row = $this->conexao->listarResultados()) {
            $lista[] = $row;
        }
        return $lista;
    }

    public function cadMedico($medico) {

        $this->sql = "INSERT INTO medico (nome, especialidade_id) VALUES ('$medico->nome', '$medico->idespecialidade')";
        $this->conexao->execSQL ( $this->sql );


    }

    public function getEspecialidadeSelect()
    {
        $this->sql = "SELECT id, nome FROM especialidade ORDER BY nome";
        $this->conexao->execSQL($this->sql);
        $lista = [];
        while ($row = $this->conexao->listarResultados()) {
            $lista[] = $row;
        }
        return $lista;
    }

    public function getMedicoSelect()
    {
        $this->sql = "SELECT m.id AS idmedico, m.nome AS nomemedico, e.nome AS nomeespecialidade FROM medico m, especialidade e WHERE m.especialidade_id = e.id ORDER BY m.nome";
        $this->conexao->execSQL($this->sql);
        $lista = [];
        while ($row = $this->conexao->listarResultados()) {
            $lista[] = $row;
        }
        return $lista;
    }

    public function mostrarMedicoEditar($idedit){
        $this->sql = "SELECT m.id, m.nome AS nomemedico, e.id AS idespecialidade, e.nome AS nomeespecialidade FROM medico m, especialidade e WHERE m.especialidade_id = e.id AND m.id='$idedit'";
        $this->conexao->execSQL($this->sql);
        $listae = [];
        while ($row = $this->conexao->listarResultados()) {
            $listae[] = $row;
        }
        return $listae;


    }

    public function execUpdateMedico($update){
        $this->sql = "UPDATE medico SET nome='$update->nome', especialidade_id='$update->idespecialidade' WHERE id='$update->id'";
        $this->conexao->execSQL($this->sql);

    }

    public function medicoDeletar($id) {

        $this->sql = "DELETE FROM medico WHERE id = '$id'";
        $this->conexao->execSQL($this->sql);


    }


}