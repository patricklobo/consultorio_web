<?php
class Controller {


    public function show(){

        if (isset($_SESSION['user_session']) && isset($_SESSION['pwd_session'])) {

            require_once "../view/".CONTROLE."/".ACAO.".php";

        } else {

            echo "<meta http-equiv='refresh' content='0, ?controle=Usuario&acao=logar'>";
        }



    }

    ////////////////////////////////////////////////////////////////////////

    public static function converte_objeto($array)
    {
        if(!function_exists("array_to_obj")){
            function array_to_obj($array, &$obj)
            {
                foreach ($array as $key => $value)
                {
                    if (is_array($value))
                    {
                        $obj->$key = new \stdClass();
                        array_to_obj($value, $obj->$key);
                    }
                    else
                    {
                        $obj->$key = $value;
                    }
                }
                return $obj;
            }
        }
        $object= new \stdClass();
        return array_to_obj($array,$object);
    }

    public function post()
    {
        if(!empty($_POST)) return Controller::converte_objeto($_POST);
        else false;
    }


}