<?php
include_once "./db.php";

class ListModel
{
    function getList()
    {
        global $conn;
        $sql = "SELECT * FROM san_pham";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //fetchALL se tra ve du lieu nhieu hon 1 ket qua
        $rows = $stmt->fetchAll();
        return $rows;

    }
    public function creat($data)
    {
        global $conn;
        $name=$data['name'];
        $price=$data['price'];
        $detail=$data['detail'];
        $image=$data['image'];
        $sql="INSERT INTO san_pham (name,price,image,detail) VALUE ('$name','$price','$image','$detail')";
        $conn->query($sql);
    }
    public function update($id,$data)
    {
        global $conn;
        $name=$data['name'];
        $price=$data['price'];
        $detail=$data['detail'];
        $image=$data['image'];
        $sql="UPDATE `san_pham` SET `name`='$name',`price`='$price',`image`='$image',`detail`='$detail' 
        WHERE id='$id'";
        $conn->exec($sql);
    }
    public function getOne($id)
    {
        global $conn;
        $sql = "SELECT * FROM `san_pham` WHERE id = '$id'";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetch();
        return $rows;
    }
    public function destroy($id)
    {
        global $conn;
        $sql="DELETE FROM san_pham WHERE id='$id'";
        $conn->exec($sql);
    }
    public function find($search)
    {
        global $conn;
        $sql = "SELECT * FROM san_pham 
        WHERE name LIKE '%$search%' 
        OR id LIKE '%$search%' 
        OR price LIKE '%$search%'
        OR detail LIKE '%$search%'";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchAll();
        return $rows;
    }
}
