<?php

    namespace App\Controller;
    use App\Model\ServiceModel;
    use App\Model\userModel;

class Service
{
    public function serviceList($data)
    {
        session_start();
        $services = new ServiceModel();
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

        $servicos = $services->serviceList($data['page']);
        
        $usuario = $usuarios->userInfo($_SESSION['uID']);

        $title = "GL Lima Terceirização & Serviços - Área restrita - Listar Serviços";
 
        require __DIR__."/../view/admin/service/list.php";
    }
    public function serviceCreate($data)
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
                $message = "Criado com sucesso.";
            }
            else if($data['message'] == 'erro')
            {
                $status['message'] = 'erro' ;
                $message = "Opss! aconteceu algo que não previamos.";
            }
            else if($data['message'] == 'arquivo-invalido')
            {
                $status['message'] = 'arquivo-invalido' ;
                $message = "Opss! aconteceu algo que não previamos. O arquivo é inválido";
            }
            else if($data['message'] == 'erro-upload')
            {
                $status['message'] = 'erro-upload' ;
                $message = "Opss! aconteceu algo que não previamos. Erro ao enviar o arquivo.";
            }
        }

        $usuarios = new userModel();

        $usuario = $usuarios->userInfo($_SESSION['uID']);

        $title = "GL Lima Terceirização & Serviços - Área restrita - Adicionar Serviço";
 
        require __DIR__."/../view/admin/service/add.php";
    }
    public function serviceStore($data)
    {
        
        $services = new serviceModel();

        $uploaded = 1;
        $files = $_FILES;
        $file_new_name = md5($files['service_image']['name']).".".pathinfo($files['service_image']['name'], PATHINFO_EXTENSION);
     
        if($files['service_image']['error'] != 0)
        {
            if(pathinfo($files['service_image']['name'], PATHINFO_EXTENSION) != 'jpg')
            {
                header('location: '.getenv("APP_HOST").'/admin/servico/adicionar/arquivo-invalido');  
            }
            else
            {
                if(move_uploaded_file($file["service_image"]["tmp_name"], getenv('APP_UPLOADIMAGE')."/".$file_new_name))
                {
                    if($uploaded == 1)
                    { 
                        $result   = $services->serviceInsert($data);
    
                        if(!empty($result))
                        {
                            header('location: '.getenv("APP_HOST").'/admin/servico/adicionar/sucesso');
                        }
                        else
                        {
                            header('location:'.getenv("APP_HOST").'/admin/servico/adicionar/erro');
                        }
                    }
                    else
                    {
                        header('location: '.getenv("APP_HOST").'/admin/servico/adicionar/erro-upload');
                    }
                }
                else
                { 
                    header('location: '.getenv("APP_HOST").'/admin/servico/adicionar/erro-upload');
                }
            }   
        }
        else
        {
            $result   = $services->serviceInsert($data);

            if(!empty($result))
            {
                header('location: '.getenv("APP_HOST").'/admin/servico/adicionar/sucesso');
            }
            else
            {
                header('location:'.getenv("APP_HOST").'/admin/servico/adicionar/erro');
            }
        } 
    }

    public function serviceDetail($data)
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
                $message = "Criado com sucesso.";
            }
            else if($data['message'] == 'erro')
            {
                $status['message'] = 'erro' ;
                $message = "Opss! aconteceu algo que não previamos.";
            }
            else if($data['message'] == 'arquivo-invalido')
            {
                $status['message'] = 'arquivo-invalido' ;
                $message = "Opss! aconteceu algo que não previamos. O arquivo é inválido";
            }
            else if($data['message'] == 'erro-upload')
            {
                $status['message'] = 'erro-upload' ;
                $message = "Opss! aconteceu algo que não previamos. Erro ao enviar o arquivo.";
            }
        }

        $usuarios = new userModel();
        $services    = new serviceModel();

        $usuario = $usuarios->userInfo($_SESSION['uID']);

        $title = "GL Lima Terceirização & Serviços - Área restrita - Editar Serviço";

        $service = $services->serviceDetail($data);

        require __DIR__."/../view/admin/service/edit.php";
    }
    public function serviceUpdate($data)
    {
        
        $services = new serviceModel();

        $uploaded = 1;
        $files = $_FILES;
        $file_new_name = md5($files['service_image']['name']).".".pathinfo($files['service_image']['name'], PATHINFO_EXTENSION);
     
        if($files['service_image']['error'] != 0)
        {
            unlink($data['service_image_old']);
            if(pathinfo($files['service_image']['name'], PATHINFO_EXTENSION) != 'jpg')
            {
                header('location: '.getenv("APP_HOST").'/admin/servico/adicionar/arquivo-invalido');  
            }
            else
            {
                if(move_uploaded_file($file["service_image"]["tmp_name"], getenv('APP_UPLOADIMAGE')."/".$file_new_name))
                {
                    if($uploaded == 1)
                    { 
                        $result   = $services->serviceUpdate($data);
    
                        if(!empty($result))
                        {
                            header('location: '.getenv("APP_HOST").'/admin/servico/adicionar/sucesso');
                        }
                        else
                        {
                            header('location:'.getenv("APP_HOST").'/admin/servico/adicionar/erro');
                        }
                    }
                    else
                    {
                        header('location: '.getenv("APP_HOST").'/admin/servico/adicionar/erro-upload');
                    }
                }
                else
                { 
                    header('location: '.getenv("APP_HOST").'/admin/servico/adicionar/erro-upload');
                }
            }   
        }
        else
        {
            $result   = $services->serviceUpdate($data);

            if(!empty($result))
            {
                header('location: '.getenv("APP_HOST").'/admin/servico/adicionar/sucesso');
            }
            else
            {
                header('location:'.getenv("APP_HOST").'/admin/servico/adicionar/erro');
            }
        } 
    }
    public function serviceDelete($data)
    {
       $services   = new serviceModel();
       $result  = $services->serviceDelete($data['id']);
       if(!empty($result))
       {
           header('location: '.getenv("APP_HOST").'/admin/servico/listar/0/sucesso');
       }
       else
       {
           header('location:'.getenv("APP_HOST").'/admin/servico/listar/0/erro');
       }
    }
}