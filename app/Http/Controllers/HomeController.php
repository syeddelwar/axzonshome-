<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class HomeController extends Controller
{

    public function storeHomeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();
        $is_contact_inserted = Contact::create($input);
        //  Send mail to admin
        \Mail::send('homeContactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => $input['subject'],
            'messages' => $input['message'],
        ), function ($message) use ($request) {
            $message->from(env('MAIL_USERNAME'));
            $message->to(env('MAIL_USERNAME'), 'Admin')->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
