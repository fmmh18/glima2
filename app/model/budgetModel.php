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

    public function budgetListAll()
    {
        $budget = budgetModel::Where('budget_status','=',1)->get();
        return $budget;
    }
    public function budgetList($data)
    {
        $budget = budgetModel::paginate(15);
        return $budget;
    }
    public function budgetDetail($data)
    {
        $budget = budgetModel::where('budget_id','=',$data)->first();
        return $budget;
    }

    public function budgetInsert($data)
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

    public function budgetUpdate($data)
    {
        $budget = budgetModel::where('budget_id','=',$data['budget_id'])->update(['budget_name' => $data['budget_name'],
        'budget_mail' => $data['budget_mail'],
        'budget_message' => $data['budget_message'],
        'budget_phone' => $data['budget_phone'],
        'budget_condominium' => $data['budget_condominium'],
        'budget_subject' => $data['budget_subject'],
        'updated_at' =>date('Y-m-d H:i:s')
        ]);
        return $budget;
    }

    public function budgetDelete($data)
    {
        $budget = budgetModel::where('budget_id','=',$data['budget_id'])->update(['budget_status' => 0]);
        return $budget;
    }

    public function budgetUpdateRead($data)
    {
        $budget = budgetModel::where('budget_id','=',$data)->update(['budget_read' => 1]);
        return $budget;
    }

}