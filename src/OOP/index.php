<?php

require_once __DIR__.'../../../vendor/autoload.php';

use App\OOP\PHP\Employee;


$employee = new Employee('Diaa', 23, 5000);

echo $employee->getName();