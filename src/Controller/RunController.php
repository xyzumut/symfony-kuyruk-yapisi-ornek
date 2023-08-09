<?php

namespace App\Controller;

use App\Message\MyMessage;
use App\Message\MyMessage_2;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;

class RunController extends AbstractController
{
    private $messageBus;
    public function __construct(  MessageBusInterface $messageBus ) {
        $this->messageBus = $messageBus;
    }
    public function run( String $text ): Response {

        for ($i=0; $i < 1000; $i++) { 
            $message = new MyMessage( $text );
            $this->messageBus->dispatch( $message );
        }

        for ($i=0; $i < 1000; $i++) { 
            $message2 = new MyMessage_2( $text );
            $this->messageBus->dispatch( $message2 );
        }

        return new JsonResponse( [ 'status' => true ], 200 );
    }
}
?>
