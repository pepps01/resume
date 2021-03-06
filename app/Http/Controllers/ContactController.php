<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\User;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => ['required'],
        //     'email' => ['required'],
        //     'message' => ['required'],
        // ]);


        // $contact =  new Contact();
        // $contact->name = $request->name;
        // $contact->email = $request->email;
        // $contact->message = $request->message;
        // $contact->save();

        // return redirect('/')->with('status', 'Message Sent!');


        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
         ]);

        //  Store data in database
                $contact =  new Contact();
                $contact->name = $request->name;
                $contact->email = $request->email;
                $contact->message = $request->message;
                $contact->save();

        // 
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         return view('contact');

    }

}
