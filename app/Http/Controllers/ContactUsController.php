<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Services\Mail\ContactUsMailer;
use Illuminate\Http\Request;


class ContactUsController extends Controller
{
    public function contactUs(Request $request)
    {

        return view('pages/contactUs');
        
    }

    public function storeContactInfo(ContactUsRequest $request, ContactUsMailer $mailer)
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
    // $data['messageText']=$data['message'];

    //dd($request->validated());

    $mailer->send($data);


    return redirect(route('contactUs.show'))
        ->with('message', 'The message was sent successfully!')
        ->withInput($data);
    }
}
