<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request){
      $this->validate($request, [
        'name'=> 'required',
        'email' => 'required'
      ]);
      //create new message
      $message = new Message;
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');

      $message->save();
      return redirect('/home')->with('success', "Message Submitted!");
    }
    public function getMessages(){
      $message = Message::all();
      return view('messages')->with('messages', $message);
    }
}
