<?php


class Task {
    public $description;
    public $completed = false;

    public function __construct($description) {
        //Automatically triggred on instatiation
        $this->description = $description;
    }

    public function isComplete() {
        return $this->completed;
    }

    public function complete() {
        $this->completed = true;
    }
}


$tasks = [
    new Task('go to the store'),
    new Task('finish my work'),
    new Task('clean my room')
];


$tasks[0]->complete();


require 'index.view.php';
