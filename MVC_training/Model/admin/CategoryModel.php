<?php
include "./MVC_training/dp.php";
class Categorymodel
{
    private $table = "categories";
    function getAll()
    {
        global $connect;
        $sql = "SELECT * FROM $this->table";
        $stmt = $connect->query($sql);

        $stmt->setFetchMode(PDO::FETCH_OBJ);

        $rows=$stmt->fetchAll();

        return $rows;
    }
}
?>