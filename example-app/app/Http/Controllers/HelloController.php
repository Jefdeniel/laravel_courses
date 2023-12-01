<?php 

namespace App\Http\Controllers;

use App\Models\Message;

class HelloController extends Controller {
    public function index($name = 'unknown') {

        $message = Message::getMessageByUser($name);

        return view('hello', ['name' => $name, 'message' => $message]);
    }
}

?>