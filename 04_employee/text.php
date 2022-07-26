<?php
class Man
{
    public $name;
    private $salary;
    protected $wife;

    public function __construct($ts_name, $ts_salary, $ts_wife)
    {
        $this->name=$ts_name;
        $this->salary=$ts_salary;
        $this->wife=$ts_wife;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function getWife()
    {
        return $this->wife;
    }
}
$phongtam = new Man("tam", 20000000, "chua");
echo $phongtam->name;
echo $phongtam->salary;
echo $phongtam->wifi;

echo $phongtam->getSalary();
echo $phongtam->getWife();




?>