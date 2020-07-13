<?php

    namespace App\Model;

    use Illuminate\Database\Eloquent\Model;

class pageModel extends Model
{    
    
    protected $table = "page";

    public function __construct()
    {
        parent::__construct();
    }
    public function pageList($data)
    {
        $page = pageModel::paginate(15);
        return $page;
    }
    public function detailPage($data)
    { 
        return pageModel::where('page_status','=',1)->Where('page_tag','=',$data)->first();
    }

}