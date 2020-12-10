<?php require 'parts/header.php'?>
<main>

	<section class="action">
<h2 class="visually-hidden">Акции</h2>
		<div class="action__wrapper owl-carousel owl-theme">
			<div class="action__item">
				<p class="action__title">Счастливые часы</p>
				<p class="action__desk">с 11:00 до 16:00 в будние дни</p>
				<div class="action__discount">
					<p>скидка 15%</p>
				</div>
				<a href="#" class="action__btn btn">Подробнее</a>
			</div>

			<div class="action__item">
				<p class="action__title">Счастливые часы</p>
				<p class="action__desk">с 11:00 до 16:00 в будние дни</p>
				<div class="action__discount">
					<p>скидка 15%</p>
				</div>
				<a href="#" class="action__btn btn">Подробнее</a>
			</div>

			<div class="action__item">
				<p class="action__title">Счастливые часы</p>
				<p class="action__desk">с 11:00 до 16:00 в будние дни</p>
				<div class="action__discount">
					<p>скидка 15%</p>
				</div>
				<a href="#" class="action__btn btn">Подробнее</a>
			</div>
		</div>

	</section>

	<section class="catalog">
		<div class="catalog__wrapper">
			<h2 class="visually-hidden">Сеты, роллы, суши</h2>

            <?php require 'parts/products/sets.php' ?>
            <?php require 'parts/products/roll.php' ?>
            <?php require 'parts/products/pizza.php' ?>
            <?php require 'parts/products/wok.php' ?>


	</section>

	<section class="new">
        <?php require 'parts/products/new.php' ?>
	</section>

	<section class="advantages">
		<div class="advantages__wrapper">
			<h2 class="advantages__title">10 причин купить у нас</h2>
			<ul class="advantages__list">
				<li class="advantages__item">
					<div class="advantage__image">
						<img src="img/kitchen@1x.png" srcset="img/kitchen@2x.png 2x" alt="Преимущество 1">
					</div>
					<p class="advantages__desk">100% ручная работа</p>
				</li>
				<li class="advantages__item">
					<div class="advantage__image">
						<img src="img/dish@1x.png" srcset="img/dish@2x.png 2x" alt="Преимущество 2">
					</div>
					<p class="advantages__desk">100% свежие ингредиенты</p>
				</li>
				<li class="advantages__item">
					<div class="advantage__image">
						<img src="img/money@1x.png" srcset="img/money@2x.png 2x" alt="Преимущество 3">
					</div>
					<p class="advantages__desk">Самые низкие цены на рынке! (Нет ресторанной наценки)</p>
				</li>
				<li class="advantages__item">
					<div class="advantage__image">
						<img src="img/rice@1x.png" srcset="img/rice@2x.png 2x" alt="Преимущество 4">
					</div>
					<p class="advantages__desk">Мы используем только дорогой рис из Японии</p>
				</li>
				<li class="advantages__item">
					<div class="advantage__image">
						<img src="img/octopus@1x.png" srcset="img/octopus@2x.png 2x" alt="Преимущество 5">
					</div>
					<p class="advantages__desk">Больше начинки, меньше риса!</p>
				</li>
				<li class="advantages__item">
					<div class="advantage__image">
						<img src="img/knife@1x.png" srcset="img/knife@2x.png 2x" alt="Преимущество 6">
					</div>
					<p class="advantages__desk">Мы не заменяем авокадо огурцом!</p>
				</li>
				<li class="advantages__item">
					<div class="advantage__image">
						<img src="img/pizza@1x.png" srcset="img/pizza@2x.png 2x" alt="Преимущество 7">
					</div>
					<p class="advantages__desk">Вся пицца готовится из итальянской муки и Итальянского соуса</p>
				</li>
				<li class="advantages__item">
					<div class="advantage__image">
						<img src="img/like@1x.png" srcset="img/like@2x.png 2x" alt="Преимущество 8">
					</div>
					<p class="advantages__desk">Постоянный контроль качества на всех этапах</p>
				</li>
				<li class="advantages__item">
					<div class="advantage__image">
						<img src="img/fish@1x.png" srcset="img/fish@2x.png 2x" alt="Преимущество 9">
					</div>
					<p class="advantages__desk">Только охлажденная рыба (никакой заморозки)</p>
				</li>
				<li class="advantages__item">
					<div class="advantage__image">
						<img src="img/feather@1x.png" srcset="img/feather@2x.png 2x" alt="Преимущество 10">
					</div>
					<p class="advantages__desk">Мы не используем майонез!</p>
				</li>
			</ul>
			<a href="#" class="advantages__btn btn">Показать все</a>
		</div>
	</section>

	<section class="reviews">
		<div class="reviews__wrapper">
			<h2 class="reviews_title">Отзывы</h2>
			<div class="review__list">
				<blockquote class="reviews-item">
					<div class="review__user">
						<p class="reviews-image">
							<img src="img/user-review@1x.png" srcset="img/user-review@2x.png 2x" alt="Пользователь">
						</p>
						<div class="author">
							<cite class="reviews-author">Надежда Наширбанова</cite>
							<time datetime="2017-08-05">5 авг 2017 в 9:58</time>
						</div>
					</div>
					<p class="reviews__text">Спасибо за быструю доставку! Отличный поздний ужин после рабочего дня )</p>
					<p class="reviews-img"><img  src="img/img-review@1x.png" srcset="img/img-review@2x.png 2x" alt="Фото"></p>
					<hr>
					<div class="reviews-vk">
						<img src="img/like-s@1x.png" srcset="img/like-s@2x.png 2x" alt="like">
						<img src="img/comment@1x.png" srcset="img/comment@2x.png 2x" alt="comment">
						<img src="img/report@1x.png" srcset="img/report@2x.png 2x" alt="report">
					</div>
					<a href="#" class="reviews__btn btn"><i class="fa fa-vk"></i>Подписаться</a>
				</blockquote>
				<blockquote class="reviews-item">
					<div class="review__user">
						<p class="reviews-image">
							<img src="img/user-review@1x.png" srcset="img/user-review@2x.png 2x" alt="Пользователь">
						</p>
						<div class="author">
							<cite class="reviews-author">Надежда Наширбанова</cite>
							<time datetime="2017-08-05">5 авг 2017 в 9:58</time>
						</div>
					</div>
					<p class="reviews__text">Спасибо за быструю доставку! Отличный поздний ужин после рабочего дня )</p>
					<p class="reviews-img"><img  src="img/img-review@1x.png" srcset="img/img-review@2x.png 2x" alt="Фото"></p>
					<hr>
					<div class="reviews-vk">
						<img src="img/like-s@1x.png" srcset="img/like-s@2x.png 2x" alt="like">
						<img src="img/comment@1x.png" srcset="img/comment@2x.png 2x" alt="comment">
						<img src="img/report@1x.png" srcset="img/report@2x.png 2x" alt="report">
					</div>
					<a href="#" class="reviews__btn btn"><i class="fa fa-vk"></i>Подписаться</a>
				</blockquote>
				<blockquote class="reviews-item">
					<div class="review__user">
						<p class="reviews-image">
							<img src="img/user-review@1x.png" srcset="img/user-review@2x.png 2x" alt="Пользователь">
						</p>
						<div class="author">
							<cite class="reviews-author">Надежда Наширбанова</cite>
							<time datetime="2017-08-05">5 авг 2017 в 9:58</time>
						</div>
					</div>
					<p class="reviews__text">Спасибо за быструю доставку! Отличный поздний ужин после рабочего дня )</p>
					<p class="reviews-img"><img  src="img/img-review@1x.png" srcset="img/img-review@2x.png 2x" alt="Фото"></p>
					<hr>
					<div class="reviews-vk">
						<img src="img/like-s@1x.png" srcset="img/like-s@2x.png 2x" alt="like">
						<img src="img/comment@1x.png" srcset="img/comment@2x.png 2x" alt="comment">
						<img src="img/report@1x.png" srcset="img/report@2x.png 2x" alt="report">
					</div>
					<a href="#" class="reviews__btn btn"><i class="fa fa-vk"></i>Подписаться</a>
				</blockquote>
			</div>
		</div>
	</section>

	<section class="form">
		<div class="form__wrapper">
			<p class="form__quest">Есть вопросы?</p>
			<h2 class="form__title">Оставьте<br> свои контакты</h2>
			<form class="form-feedback" action="URL" method="post">
				<input class="form-input" type="text" name="fullname" id="fullname" placeholder="Имя">
				<input class="form-input" type="text" name="phone" id="phone" placeholder="Телефон">
				<input type="submit" class="form__btn" value="Отправить">
			</form>
			<p class="form__agree">Нажимая на кнопку «Отправить», вы даете согласие на обработку своих персональных данных.</p>
		</div>
	</section>

	<section class="about">
		<div class="about__wrapper">
			<h2 class="about__title">О компании</h2>
			<p class="about-info">Заказ и доставка роллов, пиццы и WOK(Вок) в городе Курск</p>
			<p class="about__text">Суши МИЮШИ открылись в октябре 2012 г. и уже завоевали успех у тех, кто ценит японскую кухню и качественное приготовление блюд.<br><br>

С 2013 года мы осуществляем не только доставку на дом, теперь для вас открыт наш уютный небольшой зал. Придя сюда, вы сможете плотно пообедать, насладиться прекрасными напитками, посидеть с друзьями или обзавестись новыми знакомствами.<br><br>

Открывая зал, Мы преследовали цель предоставить своим посетителям максимум удобства и комфорта, поэтому, придя сюда в первый раз, вы почувствуете себя как рыба в воде, окунувшись в домашнюю и теплую обстановку!</p><br>

			<p class="about__text--dop">Особое внимание мы уделяем организации доставки суши и других блюд, которая осуществляется только по г.Мытищи. Четкая и слаженная работа курьеров позволяет максимально сократить время от приготовления блюда до его попадания на стол заказчику. Как правило, оно составляет от 20 до 60 минут в зависимости от местонахождения клиента. Операторы службы доставки всегда осведомлены обо всех изменениях времени доставки и предупреждают клиентов заранее, а при возможных серьезных задержках в связи с дорожной ситуацией предложат Вам альтернативу. Мы беремся только за ту работу, которую можем выполнить в срок.<br><br>
				<span class="about-hide">
В меню суши МИЮШИ представлено все многообразие японской кухни. Классические суши, и роллы приготовлены в соответствии с традиционными рецептами. Для любителей нежных и тающих во рту блюд предлагаются роллы с мясом краба, а также для больших любителей копченого угря потрясающий ролл Дракон. Для желающих пробовать что-то новое и необычное – острые ГУНКАНЫ и новинка нашего меню - ИНАРИ, широкий выбор горячих роллов. Большим компаниям будет удобно заказать суши и роллы, объединенные в сеты, включающие сразу несколько видов каждого из этих блюд. Кроме того, меню суши МИЮШИ не ограничено только японской кухней, здесь всегда можно заказать горячие и холодные блюда ЛАПША или РИС WOK с различными мясными и рыбными наполнителями, салаты, горячие закуски и различные напитки.<br><br>

Оформив у нас заказ суши на дом, клиент может выбрать удобный ему способ оплаты: наличными при получении заказа или банковской картой VISA, MasterCard при заполнении специальной формы заказа на сайте или на дому через переносной терминал (заранее сообщив оператору о форме оплаты).<br><br>

Информацию по стоимости доставки и минимальной суммы заказа в отдаленные районы г. Мытищ можно уточнить у оператора по телефону.</span></p>
			<a href="#" class="about__btn btn">Показать ещё</a>
			<picture>
				<source media="(min-width: 1170px)" srcset="img/form-laptop@1x.png, img/form-laptop@2x.png 2x">
				<source media="(min-width: 750px )" srcset="img/form-tablet@1x.png, img/form-tablet@2x.png 2x">
				<img class="about-image" src="" srcset="" alt="">
			</picture>
		</div>
	</section>
</main>
<?php require 'parts/footer.php'?>