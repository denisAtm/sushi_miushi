<?php require '../parts/header.php'?>
<?php
require 'php/function.php';
session_start();
protect_page();
require ('../../php/db.php');
?>
<div class="container">
    <h1>Добавление категории</h1>
    <form action="/admin/category/store.php" class="form" method="post">
        <div class="form-group">
            <label for="genre">Название категории</label>
            <input type="text" class="form-control" name="genre" id="genre">
        </div>
        <button class="btn btn-primary" name="send">Сохранить</button>
    </form>
</div>
<?php require '../parts/footer.php'?>
