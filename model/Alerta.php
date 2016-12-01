<?php


class Alerta {

    public function alertaCadConsulta() {

    echo "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <strong>Feito!</strong> Agendamento cadastrado com sucesso.
              </div>" ;

}

    public function alertaCamposvazios() {

        echo "<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <strong>Atenção!</strong> Preencha todos os campo para concluir.
              </div>" ;

    }
    public function alertaCadPaciente() {

        echo "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <strong>Feito!</strong> Paciente cadastrado com sucesso.
              </div>" ;

    }
    public function alertaAlterPaciente() {

        echo "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <strong>Feito!</strong> Paciente alterado.
              </div>" ;

    }
    public function alertaDataVazia() {

        echo "<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <strong>Atenção!</strong> Por favor, preencha o campo de data.
              </div>" ;

    }

    public function alertaSemConsulta() {

        echo "<div class=\"alert alert-info alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <strong>Atenção!</strong> Não existem consultas para a data informada.
              </div>" ;

    }



    public function criarAlerta($tipo, $title, $mensagem) {

        echo "<div class=\"alert alert-$tipo alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <strong>$title</strong> $mensagem
              </div>" ;

    }



}