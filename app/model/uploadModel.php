<?php

    namespace App\Model;

    use Illuminate\Database\Eloquent\Model;

class uploadModel extends Model
{    
    
    protected $table = "upload";

    public function __construct()
    {
        parent::__construct();
    }

    public function listAllUpload()
    {
        return uploadModel::where('upload_status','=',1)->get();
    }

    public function uploadInsert($data)
    {  
        $upload = new uploadModel;
        $upload->upload_oldname     = $data['upload_oldname'];
        $upload->upload_name        = $data['upload_name'];
        $upload->upload_size        = $data['upload_size'];
        $upload->budget_status      = 1;
        return $upload->save();
    }

    public function uploadUpdate($data)
    {
        $upload = uploadModel::where('upload_id','=',$data['upload_id'])->update(['upload_oldname' => $data['upload_oldname'],
        'upload_name' => $data['upload_name'],
        'upload_size' => $data['upload_size'],
        'updated_at' =>date('Y-m-d H:i:s')
        ]);
        return $upload;


    }

}