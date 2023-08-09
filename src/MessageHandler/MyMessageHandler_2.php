<?php

namespace App\MessageHandler;

use App\Message\MyMessage_2;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class MyMessageHandler_2
{
    public function __invoke( MyMessage_2 $message )
    {
        file_put_contents( 'cikti2.txt', $message->getText().PHP_EOL, FILE_APPEND );
    }
}


?>