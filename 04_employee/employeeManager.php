<?php
class EmployeeManager
{   
    private array $Employee;
    static array $ds;
    public function __construct()
    {
        $this->Employee=[];
        self::$ds=[];
    }
    public function add($employees)///thêm nhân sự
    {
        $this->Employee[]=$employees;
    }
    public function getEmployee(): array///in ra chi tiết nhân sự
    {
        return $this->Employee;
    }
  
    public function find($id)
    {
        return $this->Employee[$id];
    }

}