<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactanos;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(StoreContactanos $request)
    {
        $correo = new ContactanosMailable($request->all());
        Mail::to('stiwar.asprilla1998@gmail.com')->send($correo);
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }
}
