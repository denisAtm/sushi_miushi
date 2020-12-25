<?php require '../php/function.php';
session_start();
protect_page();
?>
<?php require 'parts/header.php'?>
<main class="container  py-5 mt-4" style="display: flex;align-items: center;justify-content: space-between;flex-direction: column;">
    <h3>Что отредактировать</h3>
    <div style="display: flex;align-items: center;flex-direction: row;justify-content: space-between;    width: 40%;" class="mt-5">
        <div class="">
            <a href="category/category.php" class="btn btn-info">Категории</a>
        </div>
        <div class="">
            <a href="banner/banner.php" class="btn btn-info">Баннер</a>
        </div>
        <div class="">
            <a href="products/products.php" class="btn btn-info">Продукты</a>
        </div>
    </div>
</main>
<?php require 'parts/footer.php'?>