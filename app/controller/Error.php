<?php

    namespace App\Controller;


class Error
{
    public function erro($data)
    {
        
        $error = $data["errcode"];
        $title = "Erro - ".$error;
        if($data["errcode"] == "404"){

            require __DIR__."/../view/erro.php";

        }else if($data["errcode"] == "400"){

            require __DIR__."/../view/erro.php";

        }else if($data["errcode"] == "500"){

            require __DIR__."/../view/erro.php";

        }
        

    }
}