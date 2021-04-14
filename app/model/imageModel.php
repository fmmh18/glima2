<?php 

    namespace App\Model;

    use Illuminate\Database\Eloquent\Model;

class imageModel extends Model
{
    
    protected $table = "image";

    public function __construct()
    {
        parent::__construct();
    }
 }