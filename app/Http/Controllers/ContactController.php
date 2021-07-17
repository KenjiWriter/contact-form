<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact-form');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required|max:500',
        ]);

        $data= [
            'e-mail' => $request['email'],
            'first_name' => $request['f_name'],
            'last_name' => $request['l_name'],
            'priority' => $request['priority'],
            'message' => $request['message'],
        ];

        Contact::create($data);
        return view(route('index'));
    }
}
