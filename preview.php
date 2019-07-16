<!-- PHP -->
<?php
session_start();
$image = $_SESSION['mypic1']['name']; /* Displaying Image*/
// var_dump($image);

// 版型session
$layout = $_SESSION['layout'];
$img = "upload/" . $image;
// var_dump($img);
?>


<!-- HTML -->
<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- mycss樣式 -->
    <link rel="stylesheet" href="css/<?= $_SESSION['layout'] ?>.css" />
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>

</body>

</html>


<h1>名片製造器成果</h1>
<div class="preview">
    <img src=<?= $img ?> alt="照片" class="photo_pre">
    <div class="title">關於 | <?= $_SESSION['name'] ?>__<?= $_SESSION['job'] ?> </div>
    <hr>
    <p>
        <?= $_SESSION['phone'] ?>
    </p>

    <p><?= $_SESSION['email'] ?></p>


    <p class="about"><?= $_SESSION['about'] ?></p>


</div>