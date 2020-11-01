<?php
//ディレクトリ一覧を取得（１）
$directory = './upload/';
$files = array_slice(scandir($directory), 2); //scandir("階層 or フォルダ名")
//var_dump($files);


////画像を繰返し取得表示
foreach($files as $file){
    echo  $file."<br>";
}