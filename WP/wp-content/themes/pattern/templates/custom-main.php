<?php
/**
 * Template Name: Главная страница
 * Post Type: page
*/ 
?>
<?php get_header(); ?>
<main id="content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="background">
		<img src="/wp-content/uploads/background-1.png">
		<div class="text">
			<div class="text1">Прокат автомобилей в городе Находка </div>
			<div class="text2">Быстрая аренда автомобилей для ваших целей</div>
			<div class="button">
				<a>
					<div>В каталог</div>
				</a>
			</div>			 
		</div>		
	</div>
	
	<div class="entry-content"> 
		<div class="first-slide">
			<div class="header-catalog">
				<div class="name">
					Каталог				
				</div>
				<div class="view-all">
					<div class="text">
						Смотреть все
					</div>
					<div>
						<img src="/wp-content/uploads/Arrow2.png">						
					</div>
				</div>
			</div>
			<div class="cars"> 
				<div>
					<img src="/wp-content/uploads/CarPhoto.png">
					<div class="name-car">
							Toyota Prius Hybrid (2011г.)
					</div>
					<div class="about-car">
						Статус: доступен для заказа <br>
						Привод: передний <br>
						Объем двигателя: 1.6 л<br>
						Цена: 1700 рублей / сутки <br>
					</div>
					<div class="button">
						<a>
							<div>Забронировать</div>
						</a>
					</div>						
				</div> 
				<div>
					<img src="/wp-content/uploads/CarPhoto.png">
					<div class="name-car">
							Toyota Prius Hybrid (2011г.)
					</div>	
					<div class="about-car">
						Статус: доступен для заказа<br>
						Привод: передний <br>
						Объем двигателя: 1.6 л<br>
						Цена: 1700 рублей / сутки <br>
					</div>
					<div class="button">
						<a>
							<div>Забронировать</div>
						</a>
					</div>	
				</div>
				<div>
					<img src="/wp-content/uploads/CarPhoto.png">
					<div class="name-car">
							Toyota Prius Hybrid (2011г.)
					</div>
					<div class="about-car">
						Статус: доступен для заказа<br>
						Привод: передний <br>
						Объем двигателя: 1.6 л<br>
						Цена: 1700 рублей / сутки <br>
					</div>
					<div class="button">
						<a>
							<div>Забронировать</div>
						</a>
					</div>			
				</div>

			</div>			
		</div>

		<div class="second-slide">
			<div class="header-documents">
				Условия проката и необходимые документы
			</div>
			<div class="item-box">
				<div class="top-items">
					<div class="age">
						<img src="/wp-content/uploads/Age.png">
						<span>Минимальный возраст 21 год</span>
					</div>
					<div class="key">
						<img src="/wp-content/uploads/key.png">
						<span>Минимальный срок аренды авто - 24 часа</span>
					</div>
					<div class="passport">
						<img src="/wp-content/uploads/passport.png">
						<span>Паспорт и любая прописка РФ </span>
					</div>
				</div>	
				
				<div class="bottom-items">
					<div class="rudder">
						<img src="/wp-content/uploads/rudder.png">
						<span>Минимальный стаж вождения 3 года</span>
					</div>
					<div class="money">
						<img src="/wp-content/uploads/money.png">
						<span>Залог за аренду автомобиля</span>
					</div>
					<div class="id-card">
						<img src="/wp-content/uploads/id-card.png">
						<span>Водительское удостоверение</span>
					</div>					
				</div>				
			</div>			
		</div>
		<div class="third-slide">
			<div class="form">
				<div class="header-form">
					Забронировать авто
				</div>
				<div class="text-after">
					Заполните форму ниже и мы перезвоним Вам в ближайшее время.
				</div>
				<div class="form-input">
					<input type="text" placeholder="ФИО"> 
					<input type="text" placeholder="Номер телефона">
					<input type="text" placeholder="Даты аренды">
					<input type="text" placeholder="Желаемый бюджет">
				</div>
				<div class="button-checkbox">				
					<div class="button">
						<a>
							<div>Подобрать авто</div>
						</a>
					</div>
					<div class="container"> <!--ДОДЕЛАТЬ-->
    					<input type="checkbox" checked="checked">    					
    				</div>	
					
				</div>
			</div>
			<div class="carPhoto">
				<img src="/wp-content/uploads/CarPhoto2.png">
			</div>				
		</div>
		<div class="fourth-slide">
			<div class="header-contacts">Каталог</div>
			<div class="container-contact">
				<div class="contacts">
					<div class="phones">
						<span>Телефоны:</span>

						
					</div>
					<div class="adress">
						<span>Адрес:</span>
					</div>
					<div class="time-work">
						<span>Режим работы:</span>
					</div>
					
				</div>
				<div class="api-maps">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae136eea7994a7d29b97f2dfe5b03bb390b1af144121fa2e2cc7352287340379f&amp;width=760&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
				</div>
		</div>
		</div>
			
	</div>
	</article>
</main>
<?php get_footer(); ?>