<?php require '../parts/header.php';
require 'php/function.php';
session_start();
protect_page();?>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>№</th>
            <th>Заголовок</th>
            <th>Подзаголовок</th>
            <th>Изображение</th>
            <th><td><a href="/admin/banner/create.php" class="btn btn-success">Добавить слайд</a></td></th>
        </tr>
        </thead>
        <tbody>
        <?php
        require ('../../php/db.php');
        $banners = $bd->query('SELECT * FROM `banner`')->fetchAll();
        foreach ($banners as $banner) :?>
            <tr>
                <td><?=$banner['id'];?></td>
                <td><?=$banner['title'];?></td>
                <td><?=$banner['subtitle'];?></td>
                <td>
                    <img src="/img/banner/<?=$banner['img'];?>" alt="" width="800" height="500">
                </td>
                <td><a href="/admin/banner/delete.php?id=<?=$banner['id']?>" class="btn btn-danger">Удалить</a></td>
                <td><a href="/admin/banner/edit.php?id=<?=$banner['id']?>" class="btn btn-warning">Редактировать</a></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
<?php require '../parts/footer.php'?>
