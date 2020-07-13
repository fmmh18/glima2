<?php

    namespace App\Model;

    use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{    
    protected $table = "user";
    protected $guarded = ["user_id"];

    public function __construct()
    {
        parent::__construct();
    }    

    public function userList($data)
    {
        $users = userModel::paginate(15);
        return $users;
    }

    public function userAuthenticate($data)
    {
        $login      = $data['user_mail'];
        $password   = md5($data['user_password']);

        $users = userModel::where('user_mail','=',$login)
                    ->where('user_password','=',$password)
                    ->where('user_status','=',1)->get();
        return $users;
    }
    public function userInfo($data)
    {
        $users = userModel::where('user_id','=',$data)->get();
        return $users;
    }
    public function userDelete($data)
    {
        $users = userModel::where('user_id','=',$data)->update(['user_status' => 0]);
        return $users;
    }
    public function userInsert($data)
    {
        $user = new userModel;
        $user->user_name            = $data['user_name'];
        $user->user_mail            = $data['user_mail']; 
        $user->user_status          = 1;
        $user->user_level           = 2;
        $user->user_password        = md5('glima'.date('Y'));
        $user->user_phone           = $data['user_phone'];
        $user->user_zipcode         = $data['user_zipcode'];
        $user->user_address         = $data['user_address'];
        $user->user_neighborhood    = $data['user_neighborhood'];
        $user->user_complement      = $data['user_complement'];
        $user->user_city            = $data['user_city'];
        $user->user_state           = $data['user_state'];
        $user->user_cpf             = $data['user_cpf'];
        return $user->save();
    }

    public function userUpdate($data)
    {
        $user = userModel::where('user_id','=',$data['user_id'])
                          ->update(['user_name'=>$data['user_name'],'user_cpf'=>$data['user_cpf'],'user_date'=>$data['user_date'],
                          'user_phone'=>$data['user_phone'],'user_zipcode'=>$data['user_zipcode'],'user_address'=>$data['user_address'],
                          'user_complement'=>$data['user_complement'],'user_neighborhood'=>$data['user_neighborhood'],'user_city'=>$data['user_city'],
                          'user_state'=>$data['user_state'],'user_state'=>$data['user_state'],'user_password'=>$data['user_password']]);

        return $user;
    }
}