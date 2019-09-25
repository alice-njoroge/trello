<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('pages.index');
    }


    public function create(){
        return view('pages.create');
    }

    public function store(){
        //dd(request()->all());
        $data = request()->validate([
            'name'=> 'required|string',
            'email'=> 'required|email',
            'message'=>'required'
        ]);
        //send the mail
        Mail::to('test@test.com')->queue(new ContactFormMail($data));
        return redirect(route('contact'))->with('message', 'Thank you for your email '.$data['name']);
    }

}
