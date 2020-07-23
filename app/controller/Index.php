<?php

    namespace App\Controller;

    use App\Model\serviceModel;
    use App\Model\companyModel;
    use App\Model\pageModel;
    use App\Model\contactModel;
    use App\Model\budgetModel;
    use App\Model\uploadModel;

class Index
{
    public function home($data)
    {
        $pages = new pageModel();
        $page = $pages->detailPage('sobre');

        $companys = new companyModel();
        $company = $companys->companyDetail();

        $services = new serviceModel();
        $service = $services->serviceListAll();
        
        $title = "GL Lima Terceirização & Serviços - Home";
        require __DIR__."/../view/home.php";
    }
    public function company($data)
    {
        $pages = new pageModel();
        $page = $pages->detailPage('sobre');

        $companys = new companyModel();
        $company = $companys->companyList();

        $title = "GL Lima Terceirização & Serviços - Empresa";
        require __DIR__."/../view/sobre.php";
    }
    public function contact($data)
    {
        $companys = new companyModel();
        $company = $companys->companyList();

        if(!empty($data['message']))
        {
            if($data['message'] == 'sucesso')
            {
                $status['message'] = 'sucesso' ;
                $message = "Enviado com sucesso.";
            }
            else if($data['message'] == 'erro')
            {
                $status['message'] = 'erro' ;
                $message = "Opss! aconteceu algo que não previamos.";
            }
        }
        
        $title = "GL Lima Terceirização & Serviços - Contato";
        require __DIR__."/../view/contact.php";

    }
    public function work($data)
    {
        $companys = new companyModel();
        $company = $companys->companyList();

        if(!empty($data['message']))
        {
            if($data['message'] == 'sucesso')
            {
                $status['message'] = 'sucesso' ;
                $message = "Enviado com sucesso.";
            }
            else if($data['message'] == 'erro')
            {
                $status['message'] = 'erro' ;
                $message = "Opss! aconteceu algo que não previamos.";
            }
            else if($data['message'] == 'arquivo-invalido')
            {
                $status['message'] = 'arquivo-invalido' ;
                $message = "Opss! aconteceu algo que não previamos. O arquivo enviado é diferente do que são aceitos DOC, DOCX ou PDF";
            }
            else if($data['message'] == 'erro-upload')
            {
                $status['message'] = 'erro-upload' ;
                $message = "Opss! aconteceu algo que não previamos. O arquivo não pode ser enviado.";
            }
            
        }

        $title = "GL Lima Terceirização & Serviços - Trabalhe";
        require __DIR__."/../view/work.php";

    }
    public function budget($data)
    {
        $companys = new companyModel();
        $company = $companys->companyList();

        if(!empty($data['message']))
        {
            if($data['message'] == 'sucesso')
            {
                $status['message'] = 'sucesso' ;
                $message = "Enviado com sucesso.";
            }
            else if($data['message'] == 'erro')
            {
                $status['message'] = 'erro' ;
                $message = "Opss! aconteceu algo que não previamos.";
            }
        }

        $title = "GL Lima Terceirização & Serviços - Orçamento";
        require __DIR__."/../view/budget.php";

    }
    public function contactSend($data)
    {   
        $contacts = new contactModel();
        $result   = $contacts->contactInsert($data);

        if(!empty($result))
        {
            header('location: '.getenv("APP_HOST").'/contato/sucesso');
        }
        else
        {
            header('location: '.getenv("APP_HOST").'/contato/erro');
        }
    }
    public function budgetSend($data)
    {   
        $budgets = new budgetModel();
        $result   = $budgets->budgetInsert($data);

        if(!empty($result))
        {
            header('location: '.getenv("APP_HOST").'/orcamento/sucesso');
        }
        else
        {
            header('location: '.getenv("APP_HOST").'/orcamento/erro');
        }
    }
    public function workSend($data)
    {   
        $uploaded = 1;
        $files = $_FILES;
        $file_new_name = md5($files['user_curriculum']['name']).".".pathinfo($files['user_curriculum']['name'], PATHINFO_EXTENSION);
        $file = array('upload_name'=> $file_new_name,'upload_oldname'=> $files['user_curriculum']['name'],
                      'upload_type'=> $files['user_curriculum']['type'],'upload_size'=> $files['user_curriculum']['size']);

        if($files['user_curriculum']['error'] != 0)
        {
            if(pathinfo($files['user_curriculum']['name'], PATHINFO_EXTENSION) != 'pdf' || pathinfo($files['user_curriculum']['name'], PATHINFO_EXTENSION) != 'doc' || pathinfo($files['user_curriculum']['name'], PATHINFO_EXTENSION) != 'docx')
            {
                header('location: '.getenv("APP_HOST").'/trabalhe/arquivo-invalido');  
            }
            else
            {
                if(move_uploaded_file($file["user_curriculum"]["tmp_name"], getenv('APP_UPLOADFILE')."/".$file_new_name))
                {
                    $uploaded = 1;
                    $uploads = new uploadModel();
                    $info = $uploads->uploadInsert($file);
                }
                else
                {
                    $uploaded = 0;
                }

                if($uploaded == 1)
                {
                    $users = new userModel();
                    $result   = $users->userInsert($data);

                    if(!empty($result))
                    {
                        header('location: '.getenv("APP_HOST").'/trabalhe/sucesso');
                    }
                    else
                    {
                        header('location:'.getenv("APP_HOST").'/trabalhe/erro');
                    }
                }
                else
                {
                    header('location: '.getenv("APP_HOST").'/trabalhe/erro-upload');
                }
            }   
        }
    }
}