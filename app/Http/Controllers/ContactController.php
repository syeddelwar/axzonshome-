<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function storeContactForm(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            // 'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        $is_contact_inserted = Contact::create($input);
        //  Send mail to admin
        \Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'message' => $input['message'],
        ), function ($message) use ($request) {
            $message->from(env('MAIL_USERNAME'));
            $message->to(env('MAIL_USERNAME'), 'Admin')->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
