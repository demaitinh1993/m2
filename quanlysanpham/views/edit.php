<?php
include_once "../quanlysanpham/views/layout/header.php";
?>
<h4>Edit Product</h4><br>
<a href="index.php?controller=listController&action=index">Back</a>
<form action="" method="post">
    Name of Product<br>
    <input type="text" name='name' value="<?=$object->name;?>"><br>
    Price of Product<br>
    <input type="text" name='price' value="<?=number_format($object->price);?>"><br>
    Detail of Product<br>
    <input type="text" name='detail' value="<?=$object->detail;?>"><br>
    Image of Product<br>
    <td><img src="./image/img/<?= $object->image ?>" width="90px" height="90px" alt=""></td><br>
    <input accept="image/*" type='file' id="imgInp" name="image" /><br><br>
    <img type="hidden" width="90px" height="90px" id="blah" src="#" alt="" /> <br>
    <button type="submit">submit</button>
</form>
<script>
    jQuery(document).ready(function() {
        $('#blah').hide();
        jQuery('#imgInp').change(function() {
            $('#blah').show();
            const file = jQuery(this)[0].files;
            if (file[0]) {
                jQuery('#blah').attr('src', URL.createObjectURL(file[0]));
            }
        });
    });
</script>

<?php
include_once "../quanlysanpham/views/layout/footer.php";
?>