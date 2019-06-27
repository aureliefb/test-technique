<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;

class MessagesController extends Controller
{
    public function create() {
      return view('messages.form');
    }

    public function store(MessageRequest $request) {
      $msg = new Message;
      $msg->last_name = $request->last_name;
      $msg->first_name = $request->first_name;
      $msg->email = $request->email;
      $msg->phone = $request->phone;
      $msg->subject = $request->subject;
      $msg->save();

      return redirect()->route('message_path');
    }

}
