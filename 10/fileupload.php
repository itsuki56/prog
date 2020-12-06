<?php
if (isset($_FILES["upfile"] ) && $_FILES["upfile"]["error"] ==0 ) {
    $file_name = $_FILES["upfile"]["name"];  //"1.jpg"ファイル名取得
   $tmp_path  = $_FILES["upfile"]["tmp_name"]; //"/usr/www/tmp/1.jpg"アップロード先のTempフォルダ
   $file_dir_path = "upload/";  //画像ファイル保管先
   $img=""; 
   // FileUpload [--Start--]
   if ( is_uploaded_file( $tmp_path ) ) {
       if ( move_uploaded_file( $tmp_path, $file_dir_path . $file_name ) ) {
               chmod( $file_dir_path . $file_name, 0644 );
               //echo $file_name . "をアップロードしました。";
               $img = '<img src="'. $file_dir_path . $file_name . '" >';
       } else {
               $img = "Error:アップロードできませんでした。";
       }
   }
 // FileUpload [--End--]
 }else{
     $img = "画像が送信されていません";
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <main>
    <!-- ヘッダー -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="file_view.php">写真アップロード</a></div>
            </div>
        </nav>
    </header>
    <!-- ヘッダー -->
    <?=$img?>
</main>
<script src="js/jquery-2.1.3.min.js"></script>
<script>
    
    
</script>
</body>
</html>