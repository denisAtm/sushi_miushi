<?php require '../parts/header.php'?>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>№</th>
            <th>Название</th>
            <th><td><a href="/admin/category/create.php" class="btn btn-success">Добавить запись</a></td></th>
        </tr>
        </thead>
        <tbody>
        <?php
        require ('../../php/db.php');
        $category = $bd->query('SELECT * FROM categories')->fetchAll();
        foreach ($category as $genre) :?>
            <tr>
                <td><?=$genre['id'];?></td>
                <td><?=$genre['name'];?></td>
                <td><a href="/admin/category/delete.php?id=<?=$genre['id']?>" class="btn btn-danger">Удалить</a></td>
                <td><a href="/admin/category/edit.php?id=<?=$genre['id']?>" class="btn btn-warning">Редактировать</a></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
<?php require '../parts/footer.php'?>
