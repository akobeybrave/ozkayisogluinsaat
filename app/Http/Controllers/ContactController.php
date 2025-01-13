<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Mail\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


    public function sendEmail(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);


        Mail::to('info@ozkayisogluinsaat.com')->send(new ContactUs($data));

        $notification = array(
            'message' => 'Mesajınız alındı, size dönüş yapacağız.',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

     }


}
