<?php
$controle = $_GET['controle']."Controller";
define("CONTROLE", $_GET['controle']);
define("ACAO", $_GET['acao']);

//print_r($controle);
$acao = $_GET['acao'];

require_once "../model/Controller.php";
require_once "../controller/$controle.php";

session_start();
if (!isset($_SESSION['user_session']) && !isset($_SESSION['pwd_session'])){


    require_once "../view/template/topo.php";
    echo "<body>";
    $objeto = new $controle;
    $objeto->$acao();
    echo "

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"js/bootstrap.min.js\"></script>
</body>";
    require_once "../view/template/rodape.php";


} elseif (isset($_SESSION['user_session']) && isset($_SESSION['pwd_session'])) {

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
}