<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->input();

        Message::create($data);

        return redirect()->route('home')->with('success', 'Votre message a été correctement envoyé');
    }
}
