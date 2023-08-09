<?php 

namespace App\Message;

class MyMessage
{

    private string $text;

    public function __construct( $text ) {
        $this->text = $text;
    }

    public function getText(): string
    {
        return $this->text;
    }
}


?>