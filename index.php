<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fileUpload</title>
</head>
<body>
    <!-- php.ini에서 post_max_size = 500M, upload_max_size = 10M, max_execution_time = 100 -->
    <!-- post_max_size는 보낼 수 있는 전체 크기, upload_max_size는 개당 보낼 수 있는 크기, max_execution_time은 전송 시간 -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myFile">
        <input type="submit" value="전송">
    </form>
</body>
</html>