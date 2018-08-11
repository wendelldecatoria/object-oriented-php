<?php

class Task {

    public $title;
    public $description;

    public $completed = false;

    public function __construct($title, $description){
        $this->title = $title;
        $this->description = $description;
    }

    public function complete(){
        $this->completed = true;
    }
}

$task = new Task('Learn OOP', 'This is about learing Object Oriented PHP');
$task->complete();

$task2 = new Task('Go Shopping','Description Pick up groceries');

var_dump($task2);