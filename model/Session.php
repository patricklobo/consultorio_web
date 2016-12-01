<?php

class Session {

    public function constroiSessao($user, $pwd) {
        $_SESSION['user_session'] = $user;
        $_SESSION['pwd_session'] = $pwd;
    }


    public function verificaSessao() {
        if (!isset($_SESSION['user_session']) && !isset($_SESSION['pwd_session'])) {
            echo "<meta http-equiv='refresh' content='0, ?controle=Usuario&acao=logar'>";
        }

    }



    public function logoff() {
    //deslogar
        unset($_SESSION['user_session']);
        unset($_SESSION['pwd_session']);
        echo "<meta http-equiv='refresh' content='0, url=?controle=Usuario&acao=logar'>";

    }

}


?>

