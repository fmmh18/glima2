<?php 

    namespace App\Model;

    use Illuminate\Database\Eloquent\Model;

class logModel extends Model
{
    
    protected $table = "log";

    public function __construct()
    {
        parent::__construct();
    }
    public function logCreate($data)
    {
        $log = new logModel;

        $log->log_ip    = $data['ip'];
        $log->log_user  = $data['user'];
        $log->log_page  = $data['page']; 
        
        return $log->save();
    
    }
}