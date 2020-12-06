<?php
 //**********************************************************
 // *  fileupload2.php
 // *  FileList（画像ファイル一覧表示）
 //**********************************************************

////ディレクトリパス
$img_path = "upload";
// //走査するディレクトリを指定
$directry= new RecursiveDirectoryIterator($img_path);
////指定したディレクトリから反復処理でデータを取得
$files = new RecursiveIteratorIterator($directry);

////画像を繰返し取得表示
foreach($files as $file){
    if( $file->isFile() ){
        $list .= '<img src="'.$file->getPathname() . '"><br>';
    }
}






?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>写真アップロード</title>
<style>
#photarea{padding:5%;width:100%;background:black;}
img{height:200px;}
</style>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="main">


<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="#">写真アップロード</a></div>
      <ul class="pager">
      <li class="previous"><a href="file_chek.html">← カメラ／写真選択</a></li>
      <li class="next disabled"><a href="file_view.php">画像一覧</a></li>
      </ul>
     </div>
  </nav>
</header>
<!-- Head[End] -->


<!-- IMG_LIST[Start] -->
 <div class="container-fluid">

 <p><input id="img_width_range" type="range" step="10" max="400" min="50" value="200"></p>
  <div class="jumbotron"><span id="heigth_txt">200px</span>
    <div id="photarea"><?=$list?></div>
  </div>
</div>
<!-- IMG_LIST[END] -->



<!-- *** jQuery読み込み！！ *** -->
<script src="js/jquery-2.1.3.min.js"></script>
<script>






</script>
</body>
</html>



