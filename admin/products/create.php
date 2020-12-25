<?php require '../parts/header.php'?>
<?php
require 'php/function.php';
session_start();
protect_page();
require ('../../php/db.php');
?>
<div class="container">
    <h1>Добавление продукта</h1>
    <form  enctype="multipart/form-data" action="/admin/products/store.php" class="form" method="post">
        <div class="form-group">
            <label for="genre">Название</label>
            <input type="text" class="form-control" name="name" id="genre" >
            <label for="price">Цена</label>
            <input type="text" class="form-control" name="price" id="genre" >
            <label for="parametr1">Параметр1</label>
            <input type="text" class="form-control" name="parametr1" id="genre>
            <label for="parametr2">Параметр2</label>
            <input type="text" class="form-control" name="parametr2" id="genre">
            <label for="parametr3">Параметр3</label>
            <input type="text" class="form-control" name="parametr3" id="genre" value="">
            <select  name="is_new" class="form-control mt-3 mr-4">
                <option disabled selected>Новый</option>
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
            <select  name="is_hit" class="form-control mt-3 mr-4">
                <option disabled selected>Хит</option>
                <option  value="0">Нет</option>
                <option value="1">Да</option>
            </select>
            <select  name="is_veg" class="form-control mt-3 mr-4">
                <option disabled selected>Веган</option>
                <option  value="0">Нет</option>
                <option value="1">Да</option>
            </select>
            <select  name="category_id" class="form-control mt-3 mr-4">
                <option disabled selected>Категория</option>
                <?php
                require ('../../php/db.php');
                $category = $bd->query('SELECT * FROM categories')->fetchAll();
                foreach ($category as $value) :?>
                     <option  value="<?=$value['id'];?>"><?=$value['name'];?></option>
                <?php endforeach;?>
            </select>
            <label for="img">Изображение</label>
            <input type="file" class="form-control" name="img" id="genre" value="">
        </div>
        <button class="btn btn-primary" name="send">Сохранить</button>
    </form>
</div>
<?php require '../parts/footer.php'?>
