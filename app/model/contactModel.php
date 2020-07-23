<?php 

    namespace App\Model;


    use Illuminate\Database\Eloquent\Model;

    class contactModel extends Model
    {
        protected $table = "contact";

        public function __construct()
        {
            parent::__construct();
        }

        public function contactList($data)
        {
            $contact = contactModel::paginate(15);
            return $contact;
        }

        public function contactDetail($data)
        {
            $contact = contactModel::where('contact_id','=',$data)->first();
            return $contact;
        }

        public function contactInsert($data)
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
        public function contactUpdate($data)
        {
            $contact = contactModel::where('contact_id','=',$data['contact_id'])->update(['contact_name' => $data['contact_name'],
            'contact_mail' => $data['contact_mail'],
            'contact_message' => $data['contact_message'],
            'contact_phone' => $data['contact_phone'],
            'contact_subject' => $data['contact_subject'],
            'updated_at' =>date('Y-m-d H:i:s')
            ]);
            return $contact;
        }
    
        public function contactDelete($data)
        {
            $contact = contactModel::where('contact_id','=',$data['contact_id'])->update(['contact_status' => 0]);
            return $contact;
        }
        public function contactUpdateRead($data)
        {
            $contact = contactModel::where('contact_id','=',$data)->update(['contact_read' => 1]);
            return $contact;
        }
    
    }