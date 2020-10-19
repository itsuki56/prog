<?php
//"upfile"を受け取る
if(isset($_FILES["upfile"])&& $_FILES["upfile"]["error"]==0){
    $file_name =$_FILES["upfile"]["name"];
    $tmp_path =$_FILES["upfile"]["tmp_name"];
    $file_dir_path = "upload/";

    $token = sha1(uniqid(mt-rand(),true));

    if(is_uploaded_file($tmp_path)){
        if(move_uploaded_file($tmp_path,$file_dir_path.$token)){
            chmod($file_dir_path.$token, 0644);
            $img = '<img src="'.$file_dir_path.$token.'">';
        }
    }
}else{

}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
<?php
echo $img;
?>    




</body>
</html>