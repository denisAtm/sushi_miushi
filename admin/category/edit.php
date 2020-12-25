<?php
require 'php/function.php';
session_start();
protect_page();
require ('../../php/db.php');
$text = $_POST['genre'];
$genre = $bd->query('SELECT * FROM `categories` WHERE `id` = "' . $_GET['id'] . '";')->fetch();
if (isset($_POST["send"])) {
  $bd->query('UPDATE `categories` SET `name` = "'.$text.'" WHERE `categories`.`id` = "' . $_GET['id'] . '";');
    header('Location: /admin/category/category.php');
}
?>
<?php require '../parts/header.php'?>
    <div class="container">
        <h1>Изменение категории</h1>
        <form action="" class="form" method="post">
            <div class="form-group">
                <label for="genre">Название категории</label>
                <input type="text" class="form-control" name="genre" id="genre" value="<?=$genre['name']?>">
                <input type="hidden" class="form-control"  value="<?=$genre['id']?>">
            </div>
            <button class="btn btn-primary" name="send">Изменить</button>
        </form>
    </div>
<?php require '../parts/footer.php'?>