<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Mail;

class ContactUsController extends Controller
{
    public function contactUs(Request $request)
    {

        return view('pages/contactUs');
        
    }

    public function storeContactInfo(ContactUsRequest $request)
    {
    // dd($request->all());
    // $contactUsRequest = $request->validated();
    // dd($request->validated());

    // $callback = function ($input ='') {
    //    return $input.'text';
    // };

    // \Log::debug($callback(), $request->all());
    // \Log::info($callback('Test Validated data'), $request->validated());
    // \Mail::raw(
    //    'Test email that is used to see data in Mailhog', 
    //    function (Message $message) {
    //        $message->to('test@test.com');


    $data = $request->validated();
    $data['messageText']=$data['message'];

    //dd($request->validated());

    Mail::send(
        'emails/contactUs',
        $data,

        function (Message $message) use ($data) {
            $message->to('test@test.com');
            $message->subject('Contact Us request form ', $data['name'].' '.$data['email']);
            $message->replyto($data['email']);
            }
    );


    return redirect(route('contactUs.show'))
        ->with('message', 'The message was sent successfully!')
        ->withInput($data);
    }
}
