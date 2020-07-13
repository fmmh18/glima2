<?php

    namespace App\Model;

    use Illuminate\Database\Eloquent\Model;

class budgetModel extends Model
{    
    
    protected $table = "budget";

    public function __construct()
    {
        parent::__construct();
    }

    public function listAllBudget()
    {
        return budgetModel::where('budget_status','=',1)->get();
    }

    public function insertBudget($data)
    {  
        $budget = new budgetModel;
        $budget->budget_name        = $data['budget_name'];
        $budget->budget_mail        = $data['budget_mail'];
        $budget->budget_message     = $data['budget_message'];
        $budget->budget_status      = 1;
        $budget->budget_phone       = $data['budget_phone'];
        $budget->budget_condominium = $data['budget_condominium'];
        $budget->budget_subject     = $data['budget_subject'];
        return $budget->save();
    }

}