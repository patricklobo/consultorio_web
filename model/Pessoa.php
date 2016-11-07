<?php

/**
* 
*/
class Pessoa 
{
	public function getNome()
	{
		return "Patrick";
	}
	public function getPessoas(){

	    $lista = [];
        $obj = new stdClass();
        $obj->nome = "Patrick";
        $obj->email = "lobo@lobo";
        $lista[] = $obj;
        $obj = new stdClass();
        $obj->nome = "Gheisy";
        $obj->email = "gheisey@lobo";
        $lista[] = $obj;
        $obj = new stdClass();
        $obj->nome = "Jordam";
        $obj->email = "jordam@lobo";
        $lista[] = $obj;

        return $lista;
    }
}