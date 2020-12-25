<?php
require 'php/function.php';
session_start();
protect_page();
require ('../../php/db.php');
$name = $_POST['name'];
$price = $_POST['price'];
$parametr1 = $_POST['parametr1'];
$parametr2 = $_POST['parametr2'];
$parametr3 = $_POST['parametr3'];
$is_new = $_POST['is_new'];
$is_hit = $_POST['is_hit'];
$is_veg = $_POST['is_veg'];
$category_id = $_POST['category_id'];
$img =  $_FILES['img']['name'];
$folder =  '../../img/products/'.$category_id.'/';
move_uploaded_file($_FILES['img']['tmp_name'], $folder.$img);
$products = $bd->query('SELECT * FROM `products` WHERE `id` = "' . $_GET['id'] . '";')->fetch();
if (isset($_POST["send"])) {
    $bd->query('UPDATE `products` SET `name` = "'.$name.'",`price` = "'.$price.'",`parametr1` = "'.$parametr1.'",`parametr2` = "'.$parametr2.'",`parametr3` = "'.$parametr3.'",`is_new` = "'.$is_new.'",`is_hit` = "'.$is_hit.'",`is_veg` = "'.$is_veg.'",`img_url` = "'.$img.'",`category_id` = "'.$category_id.'" WHERE `products`.`id` = "' . $_GET['id'] . '";');
    header('Location: /admin/products/products.php');
}
?>
<?php require '../parts/header.php'?>
    <div class="container">
        <h1>Изменение продукта</h1>
        <form enctype="multipart/form-data" action="" class="form" method="post">
            <div class="form-group">
                <label for="genre">Название</label>
                <input type="text" class="form-control" name="name" id="genre" value="<?=$products['name']?>">
                <label for="price">Цена</label>
                <input type="text" class="form-control" name="price" id="genre" value="<?=$products['price']?>">
                <label for="parametr1">Параметр1</label>
                <input type="text" class="form-control" name="parametr1" id="genre" value="<?=$products['parametr1']?>">
                <label for="parametr2">Параметр2</label>
                <input type="text" class="form-control" name="parametr2" id="genre" value="<?=$products['parametr2']?>">
                <label for="parametr3">Параметр3</label>
                <input type="text" class="form-control" name="parametr3" id="genre" value="<?=$products['parametr3']?>">
                <select  name="is_new" class="form-control mt-3 mr-4">
                    <option disabled>Новый</option>
                    <option value="0"
                        <?php
                        if ($products['is_new'] == '0'){
                            echo 'selected';
                        }
                    ?>
                    >Нет</option>
                    <option value="1"
                        <?php
                        if ($products['is_new'] == '1'){
                            echo 'selected';
                        }
                        ?>
                    >Да</option>
                </select>
                <select  name="is_hit" class="form-control mt-3 mr-4">
                    <option disabled>Хит</option>
                    <option  value="0"
                        <?php
                        if ($products['is_hit'] == '0'){
                            echo 'selected';
                        }
                        ?>
                    >Нет</option>
                    <option value="1"
                        <?php
                        if ($products['is_hit'] == '1'){
                            echo 'selected';
                        }
                        ?>
                    >Да</option>
                </select>
                <select  name="is_veg" class="form-control mt-3 mr-4">
                    <option disabled >Веган</option>
                    <option  value="0"
                        <?php
                        if ($products['is_veg'] == '0'){
                            echo 'selected';
                        }
                        ?>
                    >Нет</option>
                    <option value="1"
                        <?php
                        if ($products['is_veg'] == '1'){
                            echo 'selected';
                        }
                        ?>
                    >Да</option>
                </select>
                <select  name="category_id" class="form-control mt-3 mr-4">
                    <option disabled>Категория</option>
                    <?php
                    require ('../../php/db.php');
                    $category = $bd->query('SELECT * FROM categories')->fetchAll();
                    foreach ($category as $value) :?>
                        <option  value="<?=$value['id'];?>"><?=$value['name'];?></option>
                    <?php endforeach;?>
                </select>
                <img src="/img/products/<?=$products['category_id'];?>/<?=$products['img_url'];?>" alt="">
                <label for="img">Изображение</label>
                <input type="file" class="form-control" name="img" id="genre" value="">
            </div>
            <button class="btn btn-primary" name="send">Изменить</button>
        </form>
    </div>
<?php require '../parts/footer.php'?>