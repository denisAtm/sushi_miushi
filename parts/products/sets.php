
<div class="set">
    <h3 class="catalog__title">Сеты</h3>
    <ul class="catalog__list owl-carousel owl-theme">
        <?php
        require 'php/db.php';
        $category = $bd->query('SELECT products.id,products.name, products.price, products.parametr1, products.parametr2, products.parametr3, products.is_new, products.is_hit, products.is_veg, products.category_id, products.img_url, categories.name as categ_name FROM products INNER JOIN categories WHERE products.category_id = categories.id AND products.category_id = 1')->fetchAll();
        foreach ($category as $genre): ?>
        <li class="catalog__item">
            <?php
                if ($genre['is_veg'] == 1){
                    echo ' <div class="veg"><span>veg</span></div>';
                }
                   if ($genre['is_hit'] == 1){
                    echo '  <div class="hot">
							<picture>
								<source media="(min-width: 1170px)" srcset="img/fire@1x.png, img/fire@2x.png 2x">
								<source media="(min-width: 750px )" srcset="img/fire@1x.png, img/fire@2x.png 2x">
								<img src="img/fire@1x.png" srcset="img/fire@2x.png 2x" alt="HOT">
							</picture>
						</div>';
                }
                    if ($genre['is_new'] == 1){
                    echo ' 	<div class="new-flag">new</div>';
                }

            ?>
            <div class="catalog__image">
                <picture>
                    <source srcset="../../img/products/set/<?=$genre['img_url'];?>, ../../img/set/<?=$genre['img_url'];?>2x">
                    <source srcset="../../img/products/set/<?=$genre['img_url'];?>, ../../img/set/<?=$genre['img_url'];?> 2x">
                    <img class="catalog__item-image" src="../../img/set/<?=$genre['img_url'];?>" srcset="../../img/products/set/<?=$genre['img_url'];?> 2x" alt="">
                </picture>
            </div>

            <div class="catalog__info">
                <p class="catalog__name"><?=$genre['name'];?></p>
                <p class="catalog__desk"><?=$genre['parametr1'];?> шт. | <?=$genre['parametr1'];?> г. | <?=$genre['parametr3'];?> Kkal</p>
                <div class="catalog__price__wrapper">
                    <p class="catalog__price"><?=$genre['price'];?> <sup>руб.</sup></p>
                    <div class="catalog__count">
                        <button class="count count-min" name="min">−</button>
                        <input class="catalog-input" type="text" name="count" pattern="[0-9]*" value="1">
                        <button class="count count-max" name="max">+</button>
                    </div>
                </div>
                <a class="catalog__btn btn">
                    <span>В корзину</span>
                    <svg class="shopping-cart">
                        <use xlink:href="img/sprite.svg#online-shopping"></use>
                    </svg>
                </a>
            </div>
        </li>
        <?php endforeach?>
    </ul>
</div>
