<?php

    namespace App\Model;

    use Illuminate\Database\Eloquent\Model;

class vacancyModel extends Model
{   
    protected $table = "vacancy";

    public function __construct()
    {
        parent::__construct();
    } 
    public function vacancyList($data)
    {
        $vacancy = vacancyModel::paginate(15);
        return $vacancy;
    }

    public function vacancyDetail($id)
    {  
        return vacancyModel::Where('vacancy_id','=',$id)->first();
    }

    public function vacancyInsert($data)
    {
        $vacancy = new vacancyModel;
        $vacancy->vacancy_id_service    = $data['vacancy_id_service'];
        $vacancy->vacancy_date_initial  = $data['vacancy_date_initial'];
        $vacancy->page_date_final       = $data['page_date_final'];
        $vacancy->vacancy_status        = 1;
        return $vacancy->save();
    }
    public function vacancyUpdate($data)
    {
        $vacancy = vacancyModel::where('vacancy_id','=',$data['vacancy_id'])->update(['vacancy_id_service' => $data['vacancy_id_service'],
        'vacancy_date_initial' => $data['vacancy_date_initial'],
        'page_date_final' => $data['page_date_final'],
        'updated_at' =>date('Y-m-d H:i:s')]);
        return $vacancy;
    }
    public function vacancyDelete($data)
    {
        $vacancy = vacancyModel::where('page_id','=',$data)->update(['page_status' => 0]);
        return $vacancy;
    }
}