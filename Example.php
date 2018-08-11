<?php

use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;

$jeffrey = new Person('Jeffrey Way');

$staff = new Staff([$jeffrey]);

$laracasts = new Business($staff);

$jane = new Person('Jane Doe');

$laracasts->hire($jane);

var_dump($laracasts->getStaffMembers() );