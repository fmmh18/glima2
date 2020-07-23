<?php

    namespace App\Controller;
    use App\Model\userModel;
    use App\Model\contactModel;

class Contact
{
    public function contactList($data)
    {
        session_start();
        $contacts = new contactModel();
        $usuarios = new userModel();

        $contatos  = $contacts->contactList($data['page']);
        
        $usuario = $usuarios->userInfo($_SESSION['uID']);

        $title = "GL Lima Terceirização & Serviços - Área restrita - Listar Contatos";
 
        require __DIR__."/../view/admin/contact/list.php";         
    }    
    public function contactInfoDetail($data)
    {
        session_start();

        $usuarios = new userModel();
        $contacts    = new contactModel();

        $usuario = $usuarios->userInfo($_SESSION['uID']);

        $title = "GL Lima Terceirização & Serviços - Área restrita - Informação Contato";
        $contacts->contactUpdateRead($data);
        $contatos = $contacts->contactDetail($data);

        require __DIR__."/../view/admin/contact/info.php";

    }
    public function contactDetail($data)
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
        $contacts    = new contactModel();

        $usuario = $usuarios->userInfo($_SESSION['uID']);

        $title = "GL Lima Terceirização & Serviços - Área restrita - Editar Orçamento";
        $contacts->contactUpdateRead($data);
        $contato = $contacts->contactDetail($data);

        require __DIR__."/../view/admin/contact/edit.php";        
    }
    public function contactUpdate($data)
    {
        $contacts = new contactModel();
        $result   = $contacts->contactUpdate($data);

        if(!empty($result))
        {
            header('location: '.getenv("APP_HOST").'/admin/contato/editar/'.$data["budget_id"].'/sucesso');
        }
        else
        {
            header('location:'.getenv("APP_HOST").'/admin/contato/editar/'.$data["budget_id"].'/erro');
        }
    } 
    public function contactDelete($data)
    {
       $contacts   = new contactModel();
       $result  = $contacts->contactDelete($data['id']);
       if(!empty($result))
       {
           header('location: '.getenv("APP_HOST").'/admin/contato/listar/0/sucesso');
       }
       else
       {
           header('location:'.getenv("APP_HOST").'/admin/contato/listar/0/erro');
       }
    }
}



