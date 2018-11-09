<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function send()
    {
        $objContact = new \stdClass();
        $objContact->demo_one = 'Demo One Value';
        $objContact->demo_two = 'Demo Two Value';
        $objContact->sender = 'SenderUserName';
        $objContact->receiver = 'ReceiverUserName';
 
        Mail::to("frkalderon@gmail.com")->send(new ContactMail($objContact));
    }
}