<?php

class ExampleClass {

    private $message;

    public function __construct() {
        $this->message = 'Hello World!';
    }

    public function printMessage() {
        print $this->message;
    }

}
