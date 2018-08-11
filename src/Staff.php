<?php

namespace Acme;

use Acme\Users\Person;

class Staff{

    protected $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function members() // can be getMembers
    {
        return $this->members;
    }
}