<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function PostMail()
    {
        $data=[
            'email'=>"samehlol19@gmail.com",
            'subject'=>'TestMail',
            'message'=>"test mail it's done successfully",
        ];

        Mail::send('mail.mail', $data, function ($message) use($data){
            $message->from('samehlol16@gmail.com', 'Sameh LOL');
            $message->to($data['email']);
            $message->subject('Test');
        });
        // 
        return redirect()->back();
    }

    public function send()  
    {
        
    }

   
}
