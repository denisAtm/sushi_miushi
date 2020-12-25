<?php require '../parts/header.php'?>
<?php
require 'php/function.php';
session_start();
protect_page();
require ('../../php/db.php');
?>
<div class="container">
    <h1>Добавление слайда</h1>
    <form  enctype="multipart/form-data" action="/admin/banner/store.php" class="form" method="post">
        <div class="form-group">
            <label for="genre">Заголовок</label>
            <input type="text" class="form-control" name="name" id="genre" >
            <label for="price">Текст</label>
            <input type="text" class="form-control" name="text" id="genre" >
            <label for="img">Изображение</label>
            <input type="file" class="form-control" name="img" id="genre" value="">
        </div>
        <button class="btn btn-primary" name="send">Сохранить</button>
    </form>
</div>
<?php require '../parts/footer.php'?>
