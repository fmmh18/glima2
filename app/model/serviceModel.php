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

    public function serviceListAll()
    {
        return serviceModel::where('service_status','=',1)->paginate(3);
    }
    public function serviceList($data)
    {
        $services = serviceModel::paginate(15);
        return $services;
    }
    public function serviceDetail($data)
    { 
        return serviceModel::where('service_id','=',$data)->first();
    }
    public function serviceInsert($data)
    {
        $service = new serviceModel;
        $service->service_name          = $data['service_name'];
        $service->service_description   = $data['service_description'];
        $service->service_image         = $data['service_image'];
        $service->service_status        = 1;
        return $service->save();
    }
    public function pageUpdate($data)
    {
        $service = serviceModel::where('service_id','=',$data['service_id'])->update(['service_name' => $data['service_name'],
        'service_description' => $data['service_description'],
        'service_image' => $data['service_image'],
        'updated_at' =>date('Y-m-d H:i:s')]);
        return $service;
    }
    public function serviceDelete($data)
    {
        $service = serviceModel::where('service_id','=',$data)->update(['service_status' => 0]);
        return $service;
    }
}