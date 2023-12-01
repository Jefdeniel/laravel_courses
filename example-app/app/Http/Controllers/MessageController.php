<?php 

namespace App\Http\Controllers;

use App\Models\Message;

class MessageController extends Controller {
    public function index($name = 'unknown') {

        $messages = Message::all();
        dd($messages); // dump and die 
    }
}

?>