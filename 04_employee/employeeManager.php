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
    // static function getEmployee1(): array///in ra danh sách nhân sự
    // {

    //     return self::$ds;
    // }

    public function find($id)
    {
        return $this->Employee[$id];
    }
    // public function show($id)
    // {
    //     return $this->Employee[$id];
    // }
}