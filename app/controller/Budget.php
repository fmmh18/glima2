<?php

    namespace App\Controller;
    use App\Model\BudgetModel;
    use App\Model\userModel;

class Budget
{
    public function budgetList($data)
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
                $message = "Excluído com sucesso.";
            }
            else if($data['message'] == 'erro')
            {
                $status['message'] = 'erro' ;
                $message = "Opss! aconteceu algo que não previamos.";
            }
        }

        $budgets = new BudgetModel();
        $usuarios = new userModel();

        $orcamentos  = $budgets->budgetList($data['page']);
        
        $usuario = $usuarios->userInfo($_SESSION['uID']);

        $title = "GL Lima Terceirização & Serviços - Área restrita - Listar Orçamentos";
 
        require __DIR__."/../view/admin/budget/list.php";        
    }
    public function budgetInfoDetail($data)
    {
        session_start();

        $usuarios = new userModel();
        $budgets    = new BudgetModel();

        $usuario = $usuarios->userInfo($_SESSION['uID']);

        $title = "GL Lima Terceirização & Serviços - Área restrita - Informação Orçamento";
        $budgets->budgetUpdateRead($data);
        $orcamentos = $budgets->budgetDetail($data);

        require __DIR__."/../view/admin/budget/info.php";

    }
    public function budgetDetail($data)
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
        $budgets    = new BudgetModel();

        $usuario = $usuarios->userInfo($_SESSION['uID']);

        $title = "GL Lima Terceirização & Serviços - Área restrita - Editar Orçamento";
        $budgets->budgetUpdateRead($data);
        $orcamento = $budgets->budgetDetail($data);

        require __DIR__."/../view/admin/budget/edit.php";        
    }
    public function budgetUpdate($data)
    {
        $budgets = new budgetModel();
        $result   = $budgets->budgetUpdate($data);

        if(!empty($result))
        {
            header('location: '.getenv("APP_HOST").'/admin/orcamento/editar/'.$data["budget_id"].'/sucesso');
        }
        else
        {
            header('location:'.getenv("APP_HOST").'/admin/orcamento/editar/'.$data["budget_id"].'/erro');
        }
    } 
    public function budgetDelete($data)
    {
       $budgets   = new budgetModel();
       $result  = $budgets->budgetDelete($data['id']);
       if(!empty($result))
       {
           header('location: '.getenv("APP_HOST").'/admin/orcamento/listar/0/sucesso');
       }
       else
       {
           header('location:'.getenv("APP_HOST").'/admin/orcamento/listar/0/erro');
       }
    }
    
}