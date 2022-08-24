<?php 
namespace Utdevnp\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Utdevnp\Contact\Models\Contact;
use Utdevnp\Contact\Mail\ContactMailable;

class ContactController extends Controller {

    public function index(){
        return view("contact::contact");
    }

    public function send(Request $request){
        Contact::create($request->all());
        Mail::to(config("contact.send_email_to"))->send(new ContactMailable($request->message, $request->fullname));
        return redirect()->route("contact");
    }
}