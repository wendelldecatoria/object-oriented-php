<?php

class LightSwitch {

    public function on(){

    }

    public function off(){

    }

    private function connect(){

    }

    protected function activate(){

    }

    /**
     *  private vs. proctedted
     *  private cannot be accessed outside the class declaration
     *  protected can be accessed class has been extended by another class
     */
}

$switch = new LightSwitch;
$switch->activate();