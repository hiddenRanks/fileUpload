<?php

$allowed_ext = ['jpg', 'png', 'git', 'jpeg'];

//2차원 배열 => 파일이름, 이름
$name = $_FILES['myFile']['name'];

$names = explode(".", $name);
$ext = array_pop($names); //배열의 마지막을 뽑는다, 확장자를 뽑는게 된다 현재는
var_dump($ext);

if(!in_array($ext, $allowed_ext)) {
    echo "허용되지 않는 확장자 입니다.";
    exit;
}

//tmp_name => 임시 파일명 / 이 임시 파일명을 upload라는 파일로 옮겨준다.
move_uploaded_file($_FILES['myFile']['tmp_name'], "upload/$name");

echo "성공적으로 업로드 <br>";

//넘어오는 것을 확인하기 위해 pre를 씀
echo "<pre>";
var_dump($_FILES);
echo "</pre>";