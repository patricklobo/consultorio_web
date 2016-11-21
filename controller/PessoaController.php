<?php

/**
* 
*/
require_once "../model/Pessoa.php";
class PessoaController extends Controller
{
	public function listar()
	{
	    $pessoa = new Pessoa();
        $this->nome = $pessoa->getNome();
        $this->lista = $pessoa->getPessoas();
        $this->show();
	}

    public function editar()
    {

        $this->show();
    }

    public function deletar()
    {
        $this->show();

    }
	
}