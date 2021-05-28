<?php


namespace App;


class Student
{
    private $name;
    private $age;
    private $class;

    public function __construct($name = null, $age = null, $class = null)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setClass($class);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setClass($class)
    {
        $this->class = $class;
    }
    public function getAge()
    {
        return $this->age;
    }

public function getStudent(){
        return $this->name . $this->age . $this->class;
}


}