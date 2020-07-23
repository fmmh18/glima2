<?php

    namespace App\Model;

    use Illuminate\Database\Eloquent\Model;

class pageModel extends Model
{    
    
    protected $table = "page";
    protected $fillable = ['page_id', 'page_name', 'page_tag','page_html','page_status'];
    protected $guarded = ['id', 'page_id'];

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
    public function pageDetail($id)
    {  
        return pageModel::Where('page_id','=',$id)->get();
    }

    public function pageInsert($data)
    {
        $page = new pageModel;
        $page->page_name    = $data['page_name'];
        $page->page_tag     = $data['page_tag'];
        $page->page_html    = $data['page_html'];
        $page->page_status  = 1;
        return $page->save();
    }
    public function pageUpdate($data)
    {
        $page = pageModel::where('page_id','=',$data['page_id'])->update(['page_name' => $data['page_name'],
        'page_tag' => $data['page_tag'],
        'page_html' => $data['page_html'],
        'updated_at' =>date('Y-m-d H:i:s')]);
        return $page;
    }
    public function pageDelete($data)
    {
        $page = pageModel::where('page_id','=',$data)->update(['page_status' => 0]);
        return $page;
    }

}