<?php
require_once '../model/Session.php';
require_once '../model/Alerta.php';
require_once '../model/Usuario.php';

    class UsuarioController extends Controller
    {

        /**
         * No momento do cadastro a senha deve ser salva no banco
         * criptografada, utilizando funções do tipo "sha1" md5 ou outras.
         */
        public function cadastrar()
        {

        }

        /**
         * Editar completo, inclusive sua senha
         */
        public function editar()
        {

        }

        public function listar()
        {

        }

        public function deletar()
        {

        }

        /**
         * O Usuário pode alterar somente a sua propria senha.
         */

        public function alterar_senha()
        {

        }

        public function logar()
        {
            require_once '../view/Usuario/logar.php';
            $dados = $this->post();
            if ($dados) {
                $user = $dados->login;
                $pwd = $dados->senha;
                $usuariologar = new Usuario();
                $this->contar = $usuariologar->logar($dados);
                if ($this->contar == 1) {

                    $sessao = new Session();
                    $sessao->constroiSessao($user, $pwd);
                    $alertalog = new Alerta();
                    $alertalog->criarAlerta("success","Feito!","Usuário logado com sucesso!");
                    echo "<meta http-equiv='refresh' content='1, url=?controle=Agendamento&acao=listar'>";

                } else {

                    $alerta2 = new Alerta();
                    $alerta2->criarAlerta("danger","Atenção!","Usuário e senha não correspondem.");
                }

            }

        }

        public function Deslogar()
        {
           $deslogar = new Session();
           $deslogar->logoff();

        }



    }