<?php

namespace App\Http\Controllers;

use App\Mail\ContactSendMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contactMail(Contact $contact)
    {
        return view('admin.emails.contact_mail', compact('contact'));
    }

    public function sendUserMail(Request $request)
    {
        $contactUser = [
            'name' => $request->name,
            'title' => $request->subject,
            'body' => $request->body,
        ];
        Mail::to($request->email)->send(new ContactSendMail($contactUser));

        return redirect()->route('admin.contact.index')->with('success', 'Mail Send Successfully');
    }
}
