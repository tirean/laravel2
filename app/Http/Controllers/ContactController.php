<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
}

public function contactPost(Request $request){
$this->validate($request, [
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|email',
                'tel' => 'required',
                'comment' => 'required'
        ]);

Mail::send('email', [
        'firstName' => $request->get('firstName'),
        'lastName' => $request->get('lastName'),
        'email' => $request->get('email'),
        'tel' => $request->get('tel'),
        'comment' => $request->get('comment') ],
        function ($message) {
                $message->from('test@adines.ro');
                $message->to('gheorghe.tirean@gmail.com', 'Gheorghe Tirean')
                ->subject('Down & Feather - Contact Form');
});

return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');

}
}
