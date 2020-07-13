<?php 

    namespace App\Model;

    use Illuminate\Database\Eloquent\Model;

class logModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function saveLog($data)
    {
        $log = new logModel();

        $log->log_ip    = $data['ip'];
        $log->log_user  = $data['user'];
        $log->log_page  = $data['page']; 
        
        return $log->save();
    
    }
}