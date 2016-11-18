<?php
require_once '../model/Conexao.php';
require_once '../model/Usuario.php';

    class UsuarioController extends Controller {

        /**
         * No momento do cadastro a senha deve ser salva no banco
         * criptografada, utilizando funções do tipo "sha1" md5 ou outras.
         */
      public function cadastrar(){
         $dados = $this->post();
         debug($dados);
         if($dados){
             $usuario = new Usuario();
             $novo_usuario = $usuario->setUsuario($dados);
             if (!empty($novo_usuario)){
                 echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
                 echo "<meta http-equiv='refresh' content='0, url=?controle=usuario&acao=listar'>";
             } else {
                 echo "erro ao cadastrar";
             }
         }
 //require_once "../view/usuario/cadastrar.php";
          $this->show();
     }

        /**
         * Editar completo, inclusive sua senha
         */
        public function editar(){
            $usuariomostrar = new Usuario();
            $this->lista_usuario = $usuariomostrar->getUsuario();

            foreach ($this->lista_usuario as $usuario):
                $idedit = @$_GET['idedit'];
            endforeach;

            $this->lista_usuario2 = $usuariomostrar->getUsuarioUni($idedit);
            $this->show();
            $dados = $this->post();
            if ($dados) {
                $paciente = new Paciente();
                $paciente->execUpdatePaciente($dados);
                echo "<meta http-equiv='refresh' content='0, url=?controle=paciente&acao=listar'>";
                echo "<script>alert('Paciente alterado com sucesso.');</script>";
            } else {
                echo "";
            }

          }



           public function listar() {
           $usuario = new Usuario();
           //debug($usuario);
           $this->lista_usuarios = $usuario->getUsuario();
           //debug($this->lista_usuarios);
            $this->show();

        }

         public function deletar() {
           $usuario = new Usuario();
           //debug($usuario);
           $id = $_GET['id'];
           debug($id);
           $usuario->excluir($id);
           $this->show();
        }





        /**
         * O Usuário pode alterar somente a sua propria senha.
         */

       public function alterar_senha() {

        }


    }
