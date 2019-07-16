<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- mycss樣式 -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <title>PHP名片製作小作業</title>
</head>

<body>
    <h1>名片製作器</h1>
    <div class="form_create">
        <form action="api.php" method="post" enctype="multipart/form-data">
            <p>姓名 | <input type="text" class="input" name="name" value="陳旻錡"></p>
            <p>職稱 | <input type="text" class="input" name="job" value="新手前端工程師"></p>
            <p>聯絡電話 | <input type="text" name="phone" class="input" value="0970-949-182"></p>
            <p>電子信箱 | <input type="text" name="email" class="input" value="tinac0108@gmail.com"></p>
            <p>技能簡介 | <textarea name="about" class="input" contenteditable="100" rows="10">UI/UX、PhotoShop影像處理及Logo設計、HTML/CSS網頁概念基礎、PHP/MySQL資料處理、JS/JQ前端網頁設計、敏捷式軟體開發之專案管理</textarea></p>
            <p>名片版型選擇 |
                <select name="layout">
                    <option name="select1" value="style_pre_blue" selected>時尚藍</option>
                    <option name="select2" value="style_pre_red">鮮豔紅</option>
                    <option name="select3" value="style_pre_green">俏皮綠</option>
                </select>
            </p>
            <p>上傳照片 | <input type="file" name="mypic1" id="file"></p>
        </div>
        <div class="review">
            <input type="submit" value="預覽名片" class="submit">
        </div>
        </form>
        
    

    <!-- PHP -->
    <?php
   
    
    ?>


</body>

</html>