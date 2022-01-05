<?php

namespace App\OOP\PHP;

class Employee
{
    private string $name;
    private int  $age;
    private float $salary;

    public function __construct(string $name, int $age, float $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function setAge(int $age) : void
    {
        $this->age = $age;
    }
    public function getAge() : int
    {
        return $this->age ; 
    }
    public function setSalary(float $salary)
    {
        $this->salary = $salary;
    }
    public function getSalary() : float
    {
        return $this->salary;
    }
}