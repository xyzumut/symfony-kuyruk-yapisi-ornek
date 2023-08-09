<?php

namespace App\MessageHandler;

use App\Message\MyMessage;
use Exception;
use Random\Randomizer;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class MyMessageHandler
{
    public function __invoke( MyMessage $message )
    {
        file_put_contents( 'cikti.txt', $message->getText().PHP_EOL, FILE_APPEND );
    }
}


?>