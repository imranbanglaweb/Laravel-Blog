<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact as Contact;
class ContactController extends Controller {

	 public function ContactList(){
	 $contacts = Contact::orderBy('id', 'DESC')->get();
    	return view('admin.Contact.contactlist')
    	->with('contacts',$contacts);
    }

    // public function getContact()
    // {
    //     return view('admin.Contact.contactlist');
    // }
    public function postContact(Request $request)
    {    
         $this->validate($request, [
            'cname' => 'required',
            'email' => 'required|email',
            'cbody'=>'required'
        ]);
      Contact::create($request->all());
       $notification = array(
            'message' => 'Thanks! We shall get back to you soon.', 
            'alert-type' => 'success'
        );
       return redirect('/')->with($notification);
    }
}
