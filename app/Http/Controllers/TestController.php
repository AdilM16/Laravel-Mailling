<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function sendMail(Request $request){
        $user = [
            'email' => 'user@user.test', 
            'name' => 'Moula'
        ];
        $contenuMail = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];
        Mail::to('test@mail.test')->send(new TestMail($contenuMail));
        return view('welcome');
    }
}
