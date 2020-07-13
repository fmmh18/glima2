<?php

    namespace App\Controller;

    use App\Model\userModel;
    use App\Model\logModel;
    use App\Model\uploadModel;

class User
{
    public function userLogin($data)
    {
        $title = "GL Lima Terceirização & Serviços - Área restrita - Login";
        require __DIR__."/../view/admin/login.php";
    }

    public function userAuthenticate($data)
    {
        session_start();

        if(!empty($_SESSION['uID']))
        {
            header("location: ".getenv('APP_HOST')."/admin/principal");
        }

        $login      = $data['user_mail'];
        $password   = $data['user_password'];

        if(empty($login) && empty($password))
        {
            header("location: ".getenv('APP_HOST')."/admin/semdados");
        }
        else if(empty($login))
        {
            header("location: ".getenv('APP_HOST')."/admin/emailbranco");
        
        }
        else if(empty($password))
        {
            header("location: ".getenv('APP_HOST')."/admin/senhabranco");
        
        }
        else
        {
                $usuarios = new userModel();
                $usuario = $usuarios->userAuthenticate($data);

                if(!empty($usuario))
                {
                    $_SESSION['uID'] = $usuario[0]['user_id'];
                    header("location: ".getenv('APP_HOST')."/admin/principal");
                }
                else
                {
                    session_destroy();
                    header("location: ".getenv('APP_HOST')."/admin");
                }
        }
    }
    public function userDashboard($data)
    {
        session_start();

        $usuarios = new userModel();

        $usuario = $usuarios->userInfo($_SESSION['uID']); 
         
        $title = "GL Lima Terceirização & Serviços - Área restrita - Dashboard";
        require __DIR__."/../view/admin/principal.php";
    }
    public function userLogout()
    {
        session_start();
        session_destroy();
        session_unset($_SESSION['uID']);
        header("location: ".getenv('APP_HOST')."/admin");
    }

    public function userDetail($data)
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

        $title = "GL Lima Terceirização & Serviços - Área restrita - Editar Usuário";

        $user = $usuarios->userInfo($data);

        require __DIR__."/../view/admin/user/edit.php";
    }
    public function userEdit($data)
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
                header('location: '.getenv("APP_HOST").'/admin/usuario/editar/'.$data["user_id"].'/arquivo-invalido');  
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
                        header('location: '.getenv("APP_HOST").'/admin/usuario/editar/'.$data["user_id"].'/sucesso');
                    }
                    else
                    {
                        header('location:'.getenv("APP_HOST").'/admin/usuario/editar/'.$data["user_id"].'/erro');
                    }
                }
                else
                {
                    header('location: '.getenv("APP_HOST").'/admin/usuario/editar/'.$data["user_id"].'/erro-upload');
                }
            }   
        }
        else
        {
            $users = new userModel();
            $result   = $users->userInsert($data);

            if(!empty($result))
            {
                header('location: '.getenv("APP_HOST").'/admin/usuario/editar/sucesso');
            }
            else
            {
                header('location:'.getenv("APP_HOST").'/admin/usuario/editar/erro');
            }
        }
            
    }
    public function userFormAdd($data)
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

        $title = "GL Lima Terceirização & Serviços - Área restrita - Adicionar Usuário";
 
        require __DIR__."/../view/admin/user/add.php";
    }
    public function userAdd($data)
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
                header('location: '.getenv("APP_HOST").'/admin/usuario/adicionar/arquivo-invalido');  
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
                        header('location: '.getenv("APP_HOST").'/admin/usuario/adicionar/sucesso');
                    }
                    else
                    {
                        header('location:'.getenv("APP_HOST").'/admin/usuario/adicionar/erro');
                    }
                }
                else
                {
                    header('location: '.getenv("APP_HOST").'/admin/usuario/adicionar/erro-upload');
                }
            }   
        }
        else
        {
            $users = new userModel();
            $result   = $users->userInsert($data);

            if(!empty($result))
            {
                header('location: '.getenv("APP_HOST").'/admin/usuario/adicionar/sucesso');
            }
            else
            {
                header('location:'.getenv("APP_HOST").'/admin/usuario/adicionar/erro');
            }
        } 
    }
    public function userList($data)
    {
        session_start();
        $usuarios = new userModel();

        $users = $usuarios->userList($data['page']);
        
        $usuario = $usuarios->userInfo($_SESSION['uID']);

        $title = "GL Lima Terceirização & Serviços - Área restrita - Listar Usuário";
 
        require __DIR__."/../view/admin/user/list.php";
    }
}