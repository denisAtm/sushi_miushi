<?php

?>
    <!doctype html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
<?php require '../parts/header.php'?>
    <div class="container">
    <div class="cart-block mob-padding-25 mob-padding-10">
    <div id="cart_5175_0_0" class="line">
    <? foreach ($product as $genre): ?>
                <div class="product-img">
                    <img class="catalog__item-image" src="../../img/roll/<?=$genre['img_url'];?>">
                </div>

                <div class="product-info">
                    <div class="name">
                        <?=$genre['name'];?>
                    </div>
                    <div class="desc">
                        <p class="catalog__desk"><?=$genre['parametr1'];?> шт. | <?=$genre['parametr2'];?> г. | <?=$genre['parametr3'];?> Kkal</p>
                    </div>
                </div>

                <div class="product-sum">
                    <?=$genre['price'];?> <sup>руб.</sup>
                </div>
            </div>
            <?php endforeach;?>
           <div class="overall-sum mob-hide">Сумма заказа: <span id="sum_all">

                </span> руб</div>
            <div class="overall-buttons mob-hide">
                <a href="/" class="button-back"><i class="fa fa-arrow-left"></i> Вернуться к меню</a>
                <a href="order" class="button-next">Далее <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>


<?php require '../parts/footer.php'?>