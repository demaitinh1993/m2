<?php
include_once "./model/listModel.php";

class ListController
{
    function index()
    {
        $obj = new ListModel;
        $object = $obj->getList();

        include "./views/index/index.php";
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // $name = $_REQUEST['name'];
            // $price = $_REQUEST['price'];
            // $detail = $_REQUEST['detail'];
            // print_r($_FILES['upload_file']);
            //     die();
            $obj = new ListModel;

            // if ($request->hasFile('image')) {
            //     $file = $request->file('image');
            //     $filenameWithExt = $request->file('image')->getClientOriginalName();
            //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //     $extension = $request->file('image')->getClientOriginalExtension();
            //     $fileNameToStore = $filename . '_' . date('mdYHis') . uniqid() . '.' . $extension;
            //     $path = 'storage/' . $request->file('image')->store('/category', 'public');
            //     $category->image = $path;
            // }
            // print_r($_FILES['upload_file']); 
            // die(); 

            if (isset($_FILES['upload_file'])) {
                $image = $_FILES['upload_file']['name'];
                move_uploaded_file($_FILES['upload_file']['tmp_name'], '../image/img/' . $_FILES['upload_file']['name']);
            }
            $_REQUEST['image'] = $image;///////////request image ấy thông qua FILES chứ k lấy trực tiếp từ request được
            $object = $obj->creat($_REQUEST);
            header('location: index.php?controller=listController&action=index');
        }
        include "./views/add.php";
    }
    public function edit()
    {
        $id = $_REQUEST['id'];
        $obj = new ListModel;
        $object = $obj->getOne($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $detail = $_REQUEST['detail'];
            $image = $_REQUEST['image'];
            if ($_REQUEST['image'] == "") {
                $_REQUEST['image'] = $object->image;
            }
            $item = $obj->update($id, $_REQUEST);
            header('location: index.php?controller=listController&action=index');
        }

        include "./views/edit.php";
    }
    public function delete()
    {
        $id = $_REQUEST['id'];
        $obj = new ListModel;
        $object = $obj->destroy($id);
        header('location: index.php?controller=listController&action=index');
    }
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search = $_REQUEST['search'];
            $obj = new ListModel;
            $object = $obj->find($search);
        }
        include "../views/search.php";
    }
}


// $obj = new ListController;
// if (isset($_REQUEST['action'])) {
//     $action = $_REQUEST['action'];
// } else {
//     $action = 'index';
// }

// switch ($action) {
//     case 'index':
//         $obj->index();
//         break;
//     case 'add':
//         $obj->add();
//         break;
//     case 'edit':
//         $obj->edit();
//         break;
//     case 'delete':
//         $obj->delete();
//         break;
//     case 'search':
//         $obj->search();
//         break;
//     default:

//         break;
// }
