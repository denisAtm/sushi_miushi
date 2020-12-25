<?php
require 'php/function.php';
session_start();
protect_page();
require ('../../php/db.php');
$name = $_POST['name'];
$text = $_POST['text'];
$img =  $_FILES['img']['name'];
$folder =  '../../img/banner/';
move_uploaded_file($_FILES['img']['tmp_name'], $folder.$img);
$banners = $bd->query('SELECT * FROM `banner` WHERE `id` = "' . $_GET['id'] . '";')->fetch();
if (isset($_POST["send"])) {
    $bd->query('UPDATE `banner` SET `title` = "'.$name.'",`subtitle` = "'.$text.'",`img` = "'.$img.'" WHERE `banner`.`id` = "' . $_GET['id'] . '";');
    header('Location: /admin/banner/banner.php');
}
?>
<?php require '../parts/header.php'?>
    <div class="container">
        <h1>Изменение продукта</h1>
        <form enctype="multipart/form-data" action="" class="form" method="post">
            <div class="form-group">
                <label for="genre">Заголовок</label>
                <input type="text" class="form-control" name="name" id="genre" value="<?=$banners['title']?>">
                <label for="price">Текст</label>
                <input type="text" class="form-control" name="price" id="genre" value="<?=$banners['subtitle']?>">
                <img src="/img/banner/<?=$banners['img'];?>" alt="" width="800" height="500">
                <label for="img">Изображение</label>
                <input type="file" class="form-control" name="img" id="genre" value="">
            </div>
            <button class="btn btn-primary" name="send">Изменить</button>
        </form>
    </div>
<?php require '../parts/footer.php'?>