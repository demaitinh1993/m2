<?php
include_once "../../quanlysanpham/views/layout/header.php";
// print_r($object);

?>
<h4>Search Product</h4><br>
<form action="listController.php?action=search" method='post'>
    <input type="text" name="search">
    <button type="submit">Search</button>
</form>
<a href="listController.php?action=index">Back</a>
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
            <td><img src="../image/<?php echo $item->image ?>" width="90px" height="90px" alt=""></td>
            <td>
                <a href="listController.php?action=edit&id=<?= $item->id; ?>">Edit</a>
                <a href="listController.php?action=delete&id=<?= $item->id; ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>


<?php
include_once "../../quanlysanpham/views/layout/footer.php";
?>