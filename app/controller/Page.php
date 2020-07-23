<?php

    namespace App\Controller;

    use Illuminate\Http\Request;
    use App\Model\pageModel;
    use App\Model\userModel;
    use Illuminate\Support\Facades\Validator;


class Page
{
    public function pageList($data)
    {
        session_start();
        $pages = new pageModel();
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

        $pages = $pages->pageList($data['page']);
        
        $usuario = $usuarios->userInfo($_SESSION['uID']);

        $title = "GL Lima Terceirização & Serviços - Área restrita - Listar Páginas";
 
        require __DIR__."/../view/admin/page/list.php";
    }
    public function pageDetail($data)
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
        $pages    = new pageModel();

        $usuario = $usuarios->userInfo($_SESSION['uID']);

        $title = "GL Lima Terceirização & Serviços - Área restrita - Editar Usuário";

        $page = $pages->pageDetail($data);

        require __DIR__."/../view/admin/page/edit.php";
    }
    public function pageCreate($data)
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

        $title = "GL Lima Terceirização & Serviços - Área restrita - Adicionar Página";
 
        require __DIR__."/../view/admin/page/add.php";
    }
    public function pageStore($request)
    {
 
        $pages = new pageModel();
        $result   = $pages->pageInsert($request);

        if(!empty($result))
        {
            header('location: '.getenv("APP_HOST").'/admin/pagina/adicionar/sucesso');
        }
        else
        {
            header('location:'.getenv("APP_HOST").'/admin/pagina/adicionar/erro');
        }
    }   
    public function pageUpdate($request)
    {
        $pages = new pageModel();
        $result   = $pages->pageUpdate($request);

        if(!empty($result))
        {
            header('location: '.getenv("APP_HOST").'/admin/pagina/editar/'.$request["page_id"].'/sucesso');
        }
        else
        {
            header('location:'.getenv("APP_HOST").'/admin/pagina/editar/'.$request["page_id"].'/erro');
        }
    }   
    public function pageDelete($request)
    {
       $pages   = new pageModel();
       $result  = $pages->pageDelete($request['id']);
       if(!empty($result))
       {
           header('location: '.getenv("APP_HOST").'/admin/pagina/listar/0/sucesso');
       }
       else
       {
           header('location:'.getenv("APP_HOST").'/admin/pagina/listar/0/erro');
       }
    }
}