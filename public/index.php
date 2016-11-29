<?php
require_once '../model/Conexao.php';
require_once '../model/Usuario.php';
require_once '../model/Sessao.php';


$sessao= new Sessao;

//$sessao->verifica();
// if($controle == "" && $acao == ""){
//   if($sessao -> verifica()){
//     header("Location: ?controle=usuario&acao=listar   ");
//   } else {
//     header("Location: ?controle=usuario&acao=login");
//   }
// }

function debug($array){
  echo "<pre>";
  print_r($array);
  echo "</pre>";
}



$controle = $_GET['controle']."Controller";
define("CONTROLE", $_GET['controle']);
define("ACAO", $_GET['acao']);

//print_r($controle);
$acao = $_GET['acao'];

require_once "../model/Controller.php";
require_once "../controller/$controle.php";


require_once "../view/template/topo.php";
echo "<body>";
require_once "../view/template/menu.php";
$objeto = new $controle;
$objeto->$acao();
echo "

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"js/bootstrap.min.js\"></script>
</body>";
require_once "../view/template/rodape.php";
