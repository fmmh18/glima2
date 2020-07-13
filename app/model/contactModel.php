<?php 

    namespace App\Model;


    use Illuminate\Database\Eloquent\Model;

    class contactModel extends Model
    {
        protected $guarded = ['id', 'contact_id'];
        protected $fillable = ['contact_name','contact_status','contact_mail','contact_message','contact_phone'];
        protected $table = "contact";

        public function __construct()
        {
            parent::__construct();
        }

        public function listAllContact()
        {
            $contact = Contact::where('contact_status', '=' , 1);
            return $contact;
        }

        public function detailContact($data)
        {
            $contact = Contact::find($data);
            return $contact;
        }

        public function insertContact($data)
        {  
            $contact = new contactModel;
            $contact->contact_name = $data['contact_name'];
            $contact->contact_mail = $data['contact_mail'];
            $contact->contact_message = $data['contact_message'];
            $contact->contact_status = 1;
            $contact->contact_phone = $data['contact_phone'];
            $contact->contact_subject = $data['contact_subject'];
            return $contact->save();
        }
    
    }