<?php

    namespace App\Model;

    use Illuminate\Database\Eloquent\Model;

class companyModel extends Model
{    
    
    protected $table = "company";

    public function __construct()
    {
        parent::__construct();
    }

    public function listCompany()
    {
        return companyModel::where('company_status','=',1)->first();
    }

}