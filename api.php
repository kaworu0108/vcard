<?php

// html表單寫入的資料
$name = $_POST['name'];
$job = $_POST['job'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$about = $_POST['about'];
$pic = $_FILES['mypic1'];

//html表單中的版型
$layout=$_POST['layout'];
var_dump($select1);


//宣告seesion
session_start();
//先存進去

$_SESSION['name'] = $name;
$_SESSION['job'] = $job;
$_SESSION['phone'] = $phone;
$_SESSION['email'] = $email;
$_SESSION['about'] = $about;
$_SESSION['mypic1'] = $pic;
$_SESSION['layout']=$layout;

var_dump($pic);

// 如果兩個值都不為空則存入session
if (
    isset($_POST['name']) &&
    empty($_POST['job']) &&
    empty($_POST['phone']) &&
    empty($_POST['email']) &&
    empty($_POST['about'])&&
    empty($_FILES['mypic1'])&&
    empty($_POST['layout'])


    
) {

    $_SESSION['name'] = $name;
    $_SESSION['job'] = $job;
    $_SESSION['phone'] = $phone;
    $_SESSION['email'] = $email;
    $_SESSION['about'] = $about;
    $_SESSION['mypic1'] = $pic;
    $_SESSION['layout'] = $layout;
    
};

//將圖片搬移到UPLOAD
if (!empty($_FILES)) {
    $pic = $_FILES['mypic1']['name'];
    copy($_FILES['mypic1']['tmp_name'], "upload/".$pic);
};

//根據選擇的版型轉拋SESSION

//導向preview.php
header('location:preview.php');
