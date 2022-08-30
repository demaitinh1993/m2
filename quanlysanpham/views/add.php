<?php
include_once "../quanlysanpham/views/layout/header.php";
?>
<h4>Add Product</h4><br>
<a href="index.php?controller=listController&action=index">Back</a>
<form action="index.php?controller=listController&action=add" method="post"  enctype="multipart/form-data">
    Name of Product<br>
    <input type="text" name='name'><br>
    Price of Product<br>
    <input type="text" name='price'><br>
    Detail of Product<br>
    <input type="text" name='detail'><br>
    Image of Product<br>
    <img type="hidden" width="120px" height="100px" id="blah" src="#" alt="your image" /> <br>
    <input  type='file' id="imgInp" name="upload_file" ><br><br>
    <button type="submit">submit</button>
</form>
<script>
    jQuery(document).ready(function() {
        jQuery('#imgInp').change(function() {
            const file = jQuery(this)[0].files;
            console.log(file);
            if (file[0]) {
                jQuery('#blah').attr('src', URL.createObjectURL(file[0]));
            }
        });
    });
</script>


<?php
include_once "../quanlysanpham/views/layout/footer.php";
?>