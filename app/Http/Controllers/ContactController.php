<?php

namespace Gotrecillo\Http\Controllers;

use Gotrecillo\Http\Requests\ContactRequest;
use Gotrecillo\Mail\Contact;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact');
    }

    public function contact(ContactRequest $request)
    {
        \Mail::to('sergio.panadero.perez@gmail.com')->send(new Contact($request->all()));

        return redirect()->back()->withMessage('Thanks for contacting me!');
    }
}
