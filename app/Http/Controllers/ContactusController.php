<?php

namespace App\Http\Controllers;

use App\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    //
    public function store(Request $request)
    {

        Contactus::create([
            'name' => $request->name,
            'tel' => $request->tel,
            'email' => $request->email,
            'title' => $request->title,
            'message' => $request->message,
        ]);

        return redirect('index');

    }
    
}
