<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Nhap vao mot gia tri bat ky: ";
    $data = fgets(fopen("php://stdin","r"));echo "Ban vua nhap vao gia tri:","\n";
    echo $data;
    ?>
</body>
</html>