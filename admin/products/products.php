<?php require '../parts/header.php'?>
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
            $category = $bd->query('SELECT products.id,products.name, products.price, products.parametr1, products.parametr2, products.parametr3, products.is_new, products.is_hit, products.is_veg, products.category_id, products.img_url, categories.name as categ_name FROM products INNER JOIN categories WHERE products.category_id = categories.id')->fetchAll();
            foreach ($category as $genre) :?>
            <tr>
                <td><?=$genre['id'];?></td>
                <td><?=$genre['name'];?></td>
                <td><?=$genre['price'];?></td>
                <td><?=$genre['parametr1'];?> шт.</td>
                <td><?=$genre['parametr2'];?> гр.</td>
                <td><?=$genre['parametr3'];?> калл.</td>
                <td><?=$genre['is_new'];?></td>
                <td><?=$genre['is_hit'];?></td>
                <td><?=$genre['is_veg'];?></td>
                <td><?=$genre['categ_name'];?></td>
                <td><?=$genre['img_url'];?></td>
                <td><a href="/admin/products/delete.php?id=<?=$genre['id']?>" class="btn btn-danger">Удалить</a></td>
                <td><a href="/admin/products/edit.php?id=<?=$genre['id']?>" class="btn btn-warning">Редактировать</a></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<?php require '../parts/footer.php'?>
