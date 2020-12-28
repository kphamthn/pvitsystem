<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;


class ContactController extends Controller {

    public function index() {
        return view('contact');
    }

    public function post(Request $request) {
        $translate = ['last_name.required' => __('contact.last_name_msg'),
            'email.required' => __('contact.email_msg'),
            'email.email' => __('contact.email_format_msg'),
            'message.required' => __('contact.message_msg'),
        ];
        $request->validate([
            'last_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
                ], $translate
        );
        
        $data = $request->post();
        
        $res = Contact::create([
            "first_name"=> $data["first_name"],
            "last_name"=> $data["last_name"],
            "email"=> $data["email"],
            "contact_phone"=> $data["phone"],
            "message"=> $data["message"],
            "gender"=> $data["gender"],
            "address"=> $data["address"]
        ]);
        Mail::to(['vulephuongnt@gmail.com'])->send(new ContactMessage($res));
        return redirect()->back()->with('success', __('contact.success'));
    }

}
