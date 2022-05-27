<?php

namespace App;

class EmailService {

    // attributes
    private $from;
    private $to;
    private $title;
    private $message;


    // methods
    public function __construct(
        string $from = 'contato@email.com',
        string $to = '',
        string $title = '',
        string $message = '',
    ) {
        $this->from = $from;
        $this->to = $to;
        $this->title = $title;
        $this->message = $message;
    }

    public static function dispararEmail() {
        return "E-mail disparado com sucesso!";
    }
}