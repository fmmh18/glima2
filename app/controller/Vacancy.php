<?php

    namespace App\Controller;
    use App\Model\vacancyModel;
    use App\Model\userModel;

class Vacancy
{
    public function vacancyList($data)
    {
        session_start();
        $vacancys = new vacancyModel();
        $usuarios = new userModel();

        if(!empty($data['message']))
        {
            if($data['message'] == 'sucesso')
            {
                $status['message'] = 'sucesso' ;
                $message = "Excluído com sucesso.";
            }
            else if($data['message'] == 'erro')
            {
                $status['message'] = 'erro' ;
                $message = "Opss! aconteceu algo que não previamos.";
            }
        }

        $vagas = $vacancys->vacancyList($data['page']);
        
        $usuario = $usuarios->userInfo($_SESSION['uID']);

        $title = "GL Lima Terceirização & Serviços - Área restrita - Listar Vagas";
 
        require __DIR__."/../view/admin/vacancy/list.php";
    }
    public function vacancyDetail($data)
    {
        session_start();

        if(empty($_SESSION['uID']))
        {
            header("location: ".getenv('APP_HOST')."/admin");
        }

        if(!empty($data['message']))
        {
            if($data['message'] == 'sucesso')
            {
                $status['message'] = 'sucesso' ;
                $message = "Alterado com sucesso.";
            }
            else if($data['message'] == 'erro')
            {
                $status['message'] = 'erro' ;
                $message = "Opss! aconteceu algo que não previamos.";
            }
        }

        $usuarios = new userModel();
        $vacancys    = new vacancy();

        $usuario = $usuarios->userInfo($_SESSION['uID']);

        $title = "GL Lima Terceirização & Serviços - Área restrita - Editar Vagas";

        $vacancy = $vacancys->vacancyDetail($data);

        require __DIR__."/../view/admin/vacancy/edit.php";
    }
    public function vacancyCreate($data)
    {
        session_start();

        if(empty($_SESSION['uID']))
        {
            header("location: ".getenv('APP_HOST')."/admin");
        }

        if(!empty($data['message']))
        {
            if($data['message'] == 'sucesso')
            {
                $status['message'] = 'sucesso' ;
                $message = "Alterado com sucesso.";
            }
            else if($data['message'] == 'erro')
            {
                $status['message'] = 'erro' ;
                $message = "Opss! aconteceu algo que não previamos.";
            }
        }

        $usuarios = new userModel();

        $usuario = $usuarios->userInfo($_SESSION['uID']);

        $title = "GL Lima Terceirização & Serviços - Área restrita - Adicionar Vagas";
 
        require __DIR__."/../view/admin/vacancy/add.php";
    }
    public function pageStore($data)
    {
 
        $vacancys = new vacancy();
        $result   = $vacancys->vacancyInsert($data);

        if(!empty($result))
        {
            header('location: '.getenv("APP_HOST").'/admin/pagina/vaga/sucesso');
        }
        else
        {
            header('location:'.getenv("APP_HOST").'/admin/pagina/vaga/erro');
        }
    }   
    public function vacancyUpdate($data)
    {
        $vacancys = new vacancyModel();
        $result   = $vacancys->vacancyUpdate($data);

        if(!empty($result))
        {
            header('location: '.getenv("APP_HOST").'/admin/vaga/editar/'.$data["page_id"].'/sucesso');
        }
        else
        {
            header('location:'.getenv("APP_HOST").'/admin/vaga/editar/'.$data["page_id"].'/erro');
        }
    }   
    public function vacancyDelete($data)
    {
       $vacancys   = new vacancyModel();
       $result  = $vacancys->vacancyDelete($data['id']);
       if(!empty($result))
       {
           header('location: '.getenv("APP_HOST").'/admin/vaga/listar/0/sucesso');
       }
       else
       {
           header('location:'.getenv("APP_HOST").'/admin/vaga/listar/0/erro');
       }
    }
    
}