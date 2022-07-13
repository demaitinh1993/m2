<?php
class Employee
{
    private string $first;
    private string $name;
    private string $birthday;
    private string $address;
    private string $job;

    public function __construct($first='',$name='',$birthday='',$address='',$job='')
    {
        $this->first=$first;
        $this->name=$name;
        $this->birthday=$birthday;
        $this->address=$address;
        $this->job=$job;
    }
    
    public function setFirst($first_1)
    {
        $this->first=$first_1;
    }
    public function set($name_1)
    {
        $this->name=$name_1;
    }
    public function setBirthday($birthday_1)
    {
        $this->birthday=$birthday_1;
    }
    public function setAddress($address_1)
    {
        $this->address=$address_1;
    }
    public function setJob($job_1)
    {
        $this->job=$job_1;
    }
    public function getFirst()
    {
        return $this->first;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getBirthday()
    {
        return $this->birthday;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function getJob()
    {
        return $this->job;
    }
}