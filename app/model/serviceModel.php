<?php

    namespace App\Model;

    use Illuminate\Database\Eloquent\Model;

class serviceModel extends Model
{
    protected $table = "service";

    public function __construct()
    {
        parent::__construct();
    }

    public function listAllService()
    {
        return serviceModel::where('service_status','=',1)->get();
    }
}