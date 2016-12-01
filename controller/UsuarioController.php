<?php
require_once '../model/Sessao.php';
require_once '../model/Conexao.php';
require_once '../model/Usuario.php';


class UsuarioController extends Controller {

       public function login(){
        $dados = $this->post();
        debug($dados);
        // $usuario = new Usuario();
        // $user = $usuario->login($dados->nome, $dados->senha);
        // debug($user);
        if($dados){
          $sessao = new Sessao();
          debug($sessao);
          $_sessao = $sessao->login($dados->nome, $dados->senha);
           //echo "<meta http-equiv='refresh' content='0, url=?controle=usuario&acao=listar'>";
        }
        debug($_SESSION);
        $this->show();
      }

        /**
         * No momento do cadastro a senha deve ser salva no banco
         * criptografada, utilizando funções do tipo "sha1", "md5" ou outras.
         */
      public function cadastrar(){
         $dados = $this->post();
         //debug($dados);
         if($dados){
             $usuario = new Usuario();
             //debug($usuario);
             $novo_usuario = $usuario->setUsuario($dados);
             debug($novo_usuario);
             if (!empty($novo_usuario)){
                 echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
                 echo "<meta http-equiv='refresh' content='0, url=?controle=usuario&acao=listar'>";
             } else {
                 //echo "erro ao cadastrar";
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
                $usuario = new Usuario();
                $usuario->update($idedit,$dados);
                echo "<meta http-equiv='refresh' content='0, url=?controle=usuario&acao=listar'>";
                echo "<script>alert('Usuario alterado com sucesso.');</script>";
            } else {
                echo "ERRO!";
            }
          }



           public function listar() {
             $usuario = new Usuario();
             $this->lista_usuarios = $usuario->getUsuario();
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


      //  public function alterar_senha() {
      //    $usuario = new Usuario();
      //    $this->lista_usuario = $usuario->getUsuario();
       //
      //    foreach ($this->lista_usuario as $usuario):
      //        $id = @$_GET['id'];
      //    endforeach;
       //
      //    $this->lista_usuario2 = $usuario->getUsuarioUni($id);
      //    $this->show();
      //    $dados = $this->post();
      //    if ($dados) {
      //        $usuario = new Usuario();
      //        $usuario->updateSenha($id,$dados);
      //        echo "<meta http-equiv='refresh' content='0, url=?controle=usuario&acao=listar'>";
      //        echo "<script>alert('Senha alterado com sucesso.');</script>";
      //    } else {
      //        echo "";
      //    }
      //   }


        // public function login(){
        //   //$this->show();
        //   if(!empty($_POST)){
        //   if($this->sessao->login($_POST['nome'], $_POST['senha'])){
        //   header("Location: ../?controle=usuario&acao=listar");
        // }else {
        //   echo "login e/ou senha incorreto(s)!";
        // }
        //  }
        //  $this->show();
        // }

        public function alterar_senha() {
          $dados = $this->post();
          if(!empty($_POST)){
               if($_POST['senha'] == $_POST['senha2']){
                 $usuario = new Usuario();
                 $user->usuario->updateSenha($id, $dados->senha);
                 echo "<meta http-equiv='refresh' content='0, url=?controle=usuario&acao=listar'>";
                 echo "<script>alert('Usuario alterado com sucesso.');</script>";
               }else{
                 echo "ERRO!";
               }
           }
          $this->show();
        }


    }
