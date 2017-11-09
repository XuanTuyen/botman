<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 19-Oct-17
 * Time: 03:22 PM
 */
namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class chatBox extends Conversation
{
    public function chatBoxbegin(){

    }
    public function run()
    {
        $this->askQuestion();
    }
}