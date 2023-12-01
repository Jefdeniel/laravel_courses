<?php 

namespace App\Models;


class Message   {
    protected static $messages = ['Dieter' => 'Hallo', 'Peter' => 'Hi', 'Hans' => 'Servus'];

    public static function getMessageByUser($user) {
        return self::$messages[$user];
      }
}

?>