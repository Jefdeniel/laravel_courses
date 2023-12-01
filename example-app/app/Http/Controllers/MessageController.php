<?php 

namespace App\Http\Controllers;

use App\Models\Message;

class MessageController extends Controller {
    public function index($name = 'unknown') {

        $messages = Message::all();
        
        // dd($messages); // dump and die
        
        return view('messages.list', [
            'name' => $name,
            'messages'=> $messages
        ]);
    }

    public function detail($id) {
        $message = Message::find($id);

        if(!$message) {
            return redirect('/error-404');
        }

        return view('messages.detail', [
            'message' => $message
        ]);
    }
}

?>