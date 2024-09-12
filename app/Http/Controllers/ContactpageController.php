<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactpageController extends Controller
{
    public function ContactPage()
    {
        return view('pages.contactpage');
    }

    public function send()
    {
        $data = request()->validate([
            'fname'   => 'required',
            'lname'   => 'required',
            'email'   => 'required',
            'phone'   => 'required',
            'message' => 'required',

        ]);

        Mail::to('aminul@gmail.com')->send(new ContactUs($data));
        return redirect()->back()->with('success ', 'Message Send Successfully');
    }
}
