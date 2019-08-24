<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    //

    public function submit (Request $request){

    //validation. validate without creating your own request

    $this->validate($request,[
        'name' => "required",
        "email" => "required"

    ]);

    // return $request->input('name');

    //create new message in database

         Form::create($request->all());

         session()->flash('success', "message submitted");

        return redirect('/');

//        $message = new Message;
//        $message->name = $request->input('name');
//        $message->email = $request->input('email');
//        $message->message = $request->input('message');
//
//        $message->save();
//
    }


    public function getMessages(){
        $messages = Form::all();

        return view("messages", compact("messages"));
    }
}
