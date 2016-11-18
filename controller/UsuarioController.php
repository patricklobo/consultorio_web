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
            $id = $_GET['id'];
          //  debug($id);
            $usuario = new Usuario();
            $usuarioUni = $usuario->getUsuarioUni($id);
            debug($usuarioUni);
            //debug($usuario);
            $this->show();
            $dados = $this->post();
            debug($dados);
             if ($dados) {
                 $usuario = new Usuario();
                 $usuario->update($dados);
                 echo "<script>alert('Usuario alterado com sucesso.');</script>";
                 echo "<meta http-equiv='refresh' content='0, url=?controle=usuario&acao=editar'>";

             }else{
               echo "ERRO!";
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
