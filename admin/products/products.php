<?php require '../parts/header.php'?>
<?php require '../../php/function.php';
session_start();
protect_page();
?>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>№</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Штук</th>
            <th>Вес</th>
            <th>Каллории</th>
            <th>Новый</th>
            <th>Хит</th>
            <th>Веган</th>
            <th>Категория</th>
            <th>Изображение</th>
            <th><td><a href="/admin/products/create.php" class="btn btn-success">Добавить запись</a></td></th>
        </tr>
        </thead>
        <tbody>
        <?php
            require ('../../php/db.php');
            $products = $bd->query('SELECT products.id,products.name, products.price, products.parametr1, products.parametr2, products.parametr3, products.is_new, products.is_hit, products.is_veg, products.category_id, products.img_url, categories.name as categ_name FROM products INNER JOIN categories WHERE products.category_id = categories.id')->fetchAll();
            foreach ($products as $product) :?>
            <tr>
                <td><?=$product['id'];?></td>
                <td><?=$product['name'];?></td>
                <td><?=$product['price'];?></td>
                <td><?=$product['parametr1'];?> шт.</td>
                <td><?=$product['parametr2'];?> гр.</td>
                <td><?=$product['parametr3'];?> калл.</td>
                <td><?=$product['is_new'];?></td>
                <td><?=$product['is_hit'];?></td>
                <td><?=$product['is_veg'];?></td>
                <td><?=$product['categ_name'];?></td>
                <td>
                    <img src="/img/products/<?=$product['category_id'];?>/<?=$product['img_url'];?>" alt="">
                </td>
                <td><a href="/admin/products/delete.php?id=<?=$product['id']?>" class="btn btn-danger">Удалить</a></td>
                <td><a href="/admin/products/edit.php?id=<?=$product['id']?>" class="btn btn-warning">Редактировать</a></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<?php require '../parts/footer.php'?>
