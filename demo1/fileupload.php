<?php
if(isset($_FILES["image"])){
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

   $file = $_FILES["image"]["name"];    
   $file_size = $_FILES["image"]["size"];    
   $file_tmp = $_FILES["image"]["tmp_name"];    
   $file_type = $_FILES["image"]["type"];    
    
   if(move_uploaded_file($file_tmp , "upload-images/" . $file)){
    echo "Thanks your image is upload";
   }else{
    echo "Could not upload the file";
   }
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>
         file upload
    </title>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image"><br/><br/>
        <input type="submit">
    </form>
</body>
</head>

</html>














