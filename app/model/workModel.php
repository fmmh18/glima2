<?php

    namespace App\Model;

    use Illuminate\Database\Eloquent\Model;

class workModel extends Model
{    
    
    protected $table = "budget";

    public function __construct()
    {
        parent::__construct();
    }

    public function listAllBudget()
    {
        return workModel::where('work_status','=',1)->get();
    }

    public function insertUserWork($data)
    {  
        $work = new workModel;
        $work->work_name        = $data['work_name'];
        $work->work_mail        = $data['work_mail'];
        $work->work_message     = $data['work_message'];
        $work->work_status      = 1;
        $work->work_phone       = $data['work_phone'];
        $work->work_condominium = $data['work_condominium'];
        $work->work_subject     = $data['work_subject'];
        return $work->save();
    }

}