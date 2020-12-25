<div class="new__wrapper">
    <h2 class="visually-hidden">Новинки, акции</h2>
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item breadcrumb--active">
            <a href="#">Новинки</a>
        </li>
        <li  class="breadcrumbs__item">
            <a href="#">Акции</a>
        </li>
    </ul>
    <ul class="catalog__list owl-carousel owl-theme">
        <?php
        require 'php/db.php';
        $categories = $bd->query('SELECT products.id,products.name, products.price, products.parametr1, products.parametr2, products.parametr3, products.is_new, products.is_hit, products.is_veg, products.category_id, products.img_url, categories.name as categ_name FROM products INNER JOIN categories WHERE products.category_id = categories.id AND products.is_new = 1')->fetchAll();
        foreach ($categories as $category): ?>
        <li class="catalog__item">
            <?php
            if ($category['is_veg'] == 1){
                echo ' <div class="veg"><span>veg</span></div>';
            }
            if ($category['is_hit'] == 1){
                echo '  <div class="hot">
							<picture>
								<source media="(min-width: 1170px)" srcset="img/fire@1x.png, img/fire@2x.png 2x">
								<source media="(min-width: 750px )" srcset="img/fire@1x.png, img/fire@2x.png 2x">
								<img src="img/fire@1x.png" srcset="img/fire@2x.png 2x" alt="HOT">
							</picture>
						</div>';
            }
            if ($category['is_new'] == 1){
                echo ' 	<div class="new-flag">new</div>';
            }

            ?>
            <div class="new-flag">new</div>
            <div class="catalog__image">
                <div class="catalog__image">
                    <picture>
                        <source srcset="
                      <?php
                        if ($category['category_id'] == 1){
                            echo '../../img/products/1/';
                        }
                        if ($category['category_id'] == 2){
                            echo '../../img/products/2/';
                        }
                        if ($category['category_id'] == 3){
                            echo '../../img/products/3/';
                        }
                        if ($category['category_id'] == 4){
                            echo '../../img/products/4/';
                        }?><?=$category['img_url'];?>,
                          <?php
                        if ($category['category_id'] == 1){
                            echo '../../img/products/1/';
                        }
                        if ($category['category_id'] == 2){
                            echo '../../img/products/2/';
                        }
                        if ($category['category_id'] == 3){
                            echo '../../img/products/3/';
                        }
                        if ($category['category_id'] == 4){
                            echo '../../img/products/4/';
                        }?><?=$category['img_url'];?>,2x">
                        <source srcset="
                          <?php
                        if ($category['category_id'] == 1){
                            echo '../../img/products/1/';
                        }
                        if ($category['category_id'] == 2){
                            echo '../../img/products/2/';
                        }
                        if ($category['category_id'] == 3){
                            echo '../../img/products/3/';
                        }
                        if ($category['category_id'] == 4){
                            echo '../../img/products/4/';
                        }?><?=$category['img_url'];?>,
                          <?php
                        if ($category['category_id'] == 1){
                            echo '../../img/products/1/';
                        }
                        if ($category['category_id'] == 2){
                            echo '../../img/products/2/';
                        }
                        if ($category['category_id'] == 3){
                            echo '../../img/products/3/';
                        }
                        if ($category['category_id'] == 4){
                            echo '../../img/products/4/';
                        }?><?=$category['img_url'];?>, 2x">
                        <img class="catalog__item-image" src="
                         <?php
                        if ($category['category_id'] == 1){
                            echo '../../img/products/1/';
                        }
                        if ($category['category_id'] == 2){
                            echo '../../img/products/2/';
                        }
                        if ($category['category_id'] == 3){
                            echo '../../img/products/3/';
                        }
                        if ($category['category_id'] == 4){
                            echo '../../img/products/4/';
                        }?><?=$category['img_url'];?>, srcset="
                             <?php
                             if ($category['category_id'] == 1){
                                 echo '../../img/products/1/';
                             }
                             if ($category['category_id'] == 2){
                                 echo '../../img/products/2/';
                             }
                             if ($category['category_id'] == 3){
                                 echo '../../img/products/3/';
                             }
                             if ($category['category_id'] == 4){
                                 echo '../../img/products/4/';
                             }?><?=$category['img_url'];?>, 2x" alt="">
                    </picture>
                </div>
            </div>
            <div class="catalog__info">
                <p class="catalog__name"><?=$category['name'];?></p>
                <p class="catalog__desk"><?=$category['parametr1'];?> шт. | <?=$category['parametr2'];?> г. | <?=$category['parametr3'];?> Kkal</p>
                <div class="catalog__price__wrapper">
                    <p class="catalog__price"><?=$category['price'];?> <sup>руб.</sup></p>
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