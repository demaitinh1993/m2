<?php
include_once "../quanlysanpham/views/layout/header.php";
// print_r($object);

?>
<form action="controller=listController&action=search" method='post'>
    <input type="text" name="search">
    <button type="submit">Search</button>
</form>
<a href="index.php?controller=listController&action=add">Add product</a>
<table>
    <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Price</th>
        <th>Detail</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    <?php foreach ($object as $key => $item) : ?>
        <tr>
            <td><?= $key + 1; ?></td>
            <td><?= $item->name; ?></td>
            <td><?= number_format($item->price); ?></td>
            <td><?= $item->detail; ?></td>
            <td><img src="image/img/<?php echo $item->image; ?>" width="90px" height="100px" alt=""></td>
            <td>
                <a href="index.php?controller=listController&action=edit&id=<?=$item->id; ?>">Edit</a>
                <a href="index.php?controller=listController&action=delete&id=<?=$item->id; ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>


<?php
include_once "../quanlysanpham/views/layout/footer.php";
?>