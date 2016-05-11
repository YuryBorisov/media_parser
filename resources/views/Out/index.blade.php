<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ URL::asset('../Out/style.css') }}">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>

	<div class="wrapper">
		<header class="head clearfix">
			<a class="head-link" href="http://www.vesna.ru">http://www.vesna.ru</a>
			<div class="head__logo">
				<span>S</span><span>e</span><span>l</span><span>e</span><span>c</span><span>t</span><span>o</span>
			</div>
		</header>

		<div class="title title--media">Медийные размещения<br> на популярных площадках</div>

		<div class="diagram">
			<div class="diagram_title">Общая статистика по площадкам:</div>
			<div class="diagram__wrapper clearfix">
				<div class="diagram__block">
					<div id="piechart" class="diagram__piechart"></div>
				</div>
				<ul class="diagram__list">
					@foreach($data as $item)
						<li class="diagram__list-item">{{$item['site']}}</li>
					@endforeach

				</ul>
			</div>
			<div class="diagram__text">Выделенный бюджет<br> на баннеры</div>
		</div>
		<div class="baner baner--first">
			<div class="baner__title baner__title--novostroy">http://www.novostroy-m.ru/</div>
			<div class="baner__wrapper clearfix">
				{{$date = 0}}
				@foreach($data as $item)
					{{$date = $item['price']}}
					@foreach($item['data'] as $item2)
						<div class="baner__item baner__item--novostroy">
							<div class="baner__item__title">Баннер:</div>
							<div class="baner__item__text">{{$item2['media_platform']}} {{$item2['url']}}</div>
							<div class="baner__item__title">Баннерное место:</div>
							<div class="baner__item__text">{{$item2['title']}}</div>
							<div class="baner__item__title">Стоимость:</div>
							<div class="baner__item__text">{{$item2['price']}} р.</div>
							<img class="baner__item-img" src="images/baner.jpg" alt="some_img" >
						</div>
					@endforeach
				@endforeach

			</div>
			<div class="baner__price"><span class="baner__price--bold">Общая стоимость:</span>{{$date}}  р.</div>
		</div>

	</div>

	<div class="wrapper">
		<div class="title title--sales">Продажи</div>
		<table class="sales">
			<tr>
				<td class="sales__wrapper">
					<table class="sales__header">
						<tr>
							<td class="sales__header__td">Продажи</td>
							<td class="sales__header__td">Стоимость</td>
							<td class="sales__header__td">Кол-во<br/> комнат</td>
							<td class="sales__header__td">Площадь м<sup>2</sup></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class="sales__wrapper">
					<table class="sales__body">
						<tr>
							<td rowspan="5" class="sales__body__td sales__body__td--date"><span class="sales__body__td">24-12-2016</span></td>
							<td class="sales__body__td">10 000 000 руб</td>
							<td class="sales__body__td">2</td>
							<td class="sales__body__td">75 м<sup>2</sup></td>
						</tr>
						<tr>
							<td class="sales__body__td">10 000 000 руб</td>
							<td class="sales__body__td">2</td>
							<td class="sales__body__td">75 м<sup>2</sup></td>
						</tr>
						<tr>
							<td class="sales__body__td">10 000 000 руб</td>
							<td class="sales__body__td">2</td>
							<td class="sales__body__td">75 м<sup>2</sup></td>
						</tr>
						<tr>
							<td class="sales__body__td">10 000 000 руб</td>
							<td class="sales__body__td">2</td>
							<td class="sales__body__td">75 м<sup>2</sup></td>
						</tr>
						<tr>
							<td class="sales__body__td">10 000 000 руб</td>
							<td class="sales__body__td">2</td>
							<td class="sales__body__td">75 м<sup>2</sup></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class="sales__wrapper">
					<table class="sales__body">
						<tr>
							<td rowspan="5" class="sales__body__td sales__body__td--date"><span class="sales__body__td">24-12-2016</span></td>
							<td class="sales__body__td">10 000 000 руб</td>
							<td class="sales__body__td">2</td>
							<td class="sales__body__td">75 м<sup>2</sup></td>
						</tr>
						<tr>
							<td class="sales__body__td">10 000 000 руб</td>
							<td class="sales__body__td">2</td>
							<td class="sales__body__td">75 м<sup>2</sup></td>
						</tr>
						<tr>
							<td class="sales__body__td">10 000 000 руб</td>
							<td class="sales__body__td">2</td>
							<td class="sales__body__td">75 м<sup>2</sup></td>
						</tr>
						<tr>
							<td class="sales__body__td">10 000 000 руб</td>
							<td class="sales__body__td">2</td>
							<td class="sales__body__td">75 м<sup>2</sup></td>
						</tr>
						<tr>
							<td class="sales__body__td">10 000 000 руб</td>
							<td class="sales__body__td">2</td>
							<td class="sales__body__td">75 м<sup>2</sup></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>

	<div class="wrapper">
		<div class="title title--placement">Размещения в yandex direct<br> и google adwords</div>

		<div class="diagram">
			<div class="diagram_title">Распределение бюджета по кампаниям:</div>
			<div class="diagram__wrapper clearfix">
				<div class="diagram__block">
					<div id="company" class="diagram__piechart"></div>
				</div>
				<ul class="diagram__list diagram__list--company">
					<li class="diagram__list-item diagram__list-item--com">Google – 23.000</li>
					<li class="diagram__list-item diagram__list-item--com">Yandex – 19.000</li>
				</ul>
			</div>
		</div>

		<div class="diagram">
			<div class="diagram_title">Распределение бюджета по кампаниям<br> в Google:</div>
			<div class="diagram__wrapper clearfix">
				<div class="diagram__block">

					<div id="goo" class="diagram__piechart"></div>
				</div>
				<ul class="diagram__list">
					<li class="diagram__list-item diagram__list-item--goo">Запросы конкурентов</li>
					<li class="diagram__list-item diagram__list-item--goo">Геозапросы</li>
					<li class="diagram__list-item diagram__list-item--goo">Брендовые запросы</li>
				</ul>
			</div>
		</div>

		<div class="diagram diagram--last">
			<div class="diagram_title">Распределение бюджета по кампаниям<br> в Yandex:</div>
			<div class="diagram__wrapper clearfix">
				<div class="diagram__block">
					<div id="yandex" class="diagram__piechart"></div>
				</div>
				<ul class="diagram__list">
					<li class="diagram__list-item diagram__list-item--ya">Запросы конкурентов</li>
					<li class="diagram__list-item diagram__list-item--ya">Геозапросы</li>
					<li class="diagram__list-item diagram__list-item--ya">Брендовые запросы</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="wrapper--table wrapper--google">
		<div class="wrapper">
			<table class="begin">
				<tr>
					<td class="begin__title">
						<span>Google</span><br>
						Запрос
					</td class="begin__title">
					<td class="begin__title">Стоимость</td>
					<td class="begin__title">Доля<br> трафика в %</td>
				</tr>
				<tr>
					<td>ЖК Андерсен официальный сайт</td>
					<td>346 р.</td>
					<td>11%</td>
				</tr>
				<tr>
					<td>ЖК Андерсен форум</td>
					<td>846 р.</td>
					<td>10%</td>
				</tr>
				<tr>
					<td>Новостройки в Московской Области</td>
					<td>715 р.</td>
					<td>8%</td>
				</tr>
				<tr>
					<td>Новостройки в Московской Области</td>
					<td>245 р.</td>
					<td>7%</td>
				</tr>
				<tr>
					<td>ЖК Андерсeн официальный сайт</td>
					<td>234 р.</td>
					<td>5%</td>
				</tr>
				<tr>
					<td>ЖК Андерсен официальный сайт</td>
					<td>346 р.</td>
					<td>4%</td>
				</tr>
				<tr>
					<td>ЖК Андерсен форум</td>
					<td>846 р.</td>
					<td>3%</td>
				</tr>
				<tr>
					<td>Новостройки в Московской Области</td>
					<td>715 р.</td>
					<td>3%</td>
				</tr>
				<tr>
					<td>Новостройки в Московской Области</td>
					<td>245 р.</td>
					<td>2%</td>
				</tr>
				<tr>
					<td>ЖК Андерсeн официальный сайт</td>
					<td>234 р.</td>
					<td>1%</td>
				</tr>
				<tr>
					<td>Новостройки в Московской Области</td>
					<td>715 р.</td>
					<td>1%</td>
				</tr>
				<tr>
					<td>Новостройки в Московской Области</td>
					<td>245 р.</td>
					<td>1%</td>
				</tr>
				<tr>
					<td>ЖК Андерсeн официальный сайт</td>
					<td>234 р.</td>
					<td>1%</td>
				</tr>
				<tr>
					<td>111111111<br/>1111111<br/></td>
					<td>1</td>
					<td>1</td>
				</tr>
				<tr>
					<td>1</td>
					<td>1</td>
					<td>1</td>
				</tr>
				<tr>
					<td>1</td>
					<td>1</td>
					<td>1</td>
				</tr>
				<tr>
					<td>1</td>
					<td>1</td>
					<td>1</td>
				</tr>
				<tr>
					<td>1</td>
					<td>1</td>
					<td>1</td>
				</tr>
				<tr>
					<td>1</td>
					<td>1</td>
					<td>1</td>
				</tr>
				<tr>
					<td>1</td>
					<td>1</td>
					<td>1</td>
				</tr>
				<tr>
					<td>1</td>
					<td>1</td>
					<td>1</td>
				</tr>
				<tr>
					<td>1</td>
					<td>1</td>
					<td>1</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="wrapper--table wrapper--yandex">
		<div class="wrapper">
			<table class="yandex begin">
				<tr>
					<td class="begin__title"><span>Yandex</span><br>
						Запрос</td>
						<td class="begin__title">Стоимость</td>
						<td class="begin__title">Доля<br> трафика в %</td>
					</tr>
					<tr>
						<td>ЖК Андерсен официальный сайт</td>
						<td>346 р.</td>
						<td>11%</td>
					</tr>
					<tr>
						<td>ЖК Андерсен форум</td>
						<td>846 р.</td>
						<td>10%</td>
					</tr>
					<tr>
						<td>Новостройки в Московской Области</td>
						<td>715 р.</td>
						<td>8%</td>
					</tr>
					<tr>
						<td>Новостройки в Московской Области</td>
						<td>245 р.</td>
						<td>7%</td>
					</tr>
					<tr>
						<td>ЖК Андерсeн официальный сайт</td>
						<td>234 р.</td>
						<td>5%</td>
					</tr>
					<tr>
						<td>ЖК Андерсен официальный сайт</td>
						<td>346 р.</td>
						<td>4%</td>
					</tr>
					<tr>
						<td>ЖК Андерсен форум</td>
						<td>846 р.</td>
						<td>3%</td>
					</tr>
					<tr>
						<td>Новостройки в Московской Области</td>
						<td>715 р.</td>
						<td>3%</td>
					</tr>
					<tr>
						<td>Новостройки в Московской Области</td>
						<td>245 р.</td>
						<td>3%</td>
					</tr>
					<tr>
						<td>ЖК Андерсeн официальный сайт</td>
						<td>234 р.</td>
						<td>3%</td>
					</tr>
					<tr>
						<td>ЖК Андерсен официальный сайт</td>
						<td>346 р.</td>
						<td>2%</td>
					</tr>
					<tr>
						<td>ЖК Андерсен форум</td>
						<td>846 р.</td>
						<td>2%</td>
					</tr>
					<tr>
						<td>Новостройки в Московской Области</td>
						<td>715 р.</td>
						<td>1%</td>
					</tr>
					<tr>
						<td>Новостройки в Московской Области</td>
						<td>245 р.</td>
						<td>1%</td>
					</tr>
					<tr>
						<td>ЖК Андерсeн официальный сайт</td>
						<td>234 р.</td>
						<td>1%</td>
					</tr>
					<tr>
						<td>2</td>
						<td>2</td>
						<td>2</td>
					</tr>
					<tr>
						<td>2</td>
						<td>2</td>
						<td>2</td>
					</tr>
					<tr>
						<td>2</td>
						<td>2</td>
						<td>2</td>
					</tr>
					<tr>
						<td>2</td>
						<td>2</td>
						<td>2</td>
					</tr>
					<tr>
						<td>2</td>
						<td>2</td>
						<td>2</td>
					</tr>
					<tr>
						<td>2</td>
						<td>2</td>
						<td>2</td>
					</tr>
					<tr>
						<td>2</td>
						<td>2</td>
						<td>2</td>
					</tr>
					<tr>
						<td>2</td>
						<td>2</td>
						<td>2</td>
					</tr>
					<tr>
						<td>2</td>
						<td>2</td>
						<td>2</td>
					</tr>
					<tr>
						<td>2</td>
						<td>2</td>
						<td>2</td>
					</tr>
					<tr>
						<td>2</td>
						<td>2</td>
						<td>2</td>
					</tr>
					<tr>
						<td>2</td>
						<td>2</td>
						<td>2</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="title title--discounts">Акции и скидки</div>
		<div class="offers_block clearfix">
			<img src="images/offers_1.png" alt="" class="offers_block-img">
			<img src="images/offers_2.png" alt="" class="offers_block-img">
			<img src="images/offers_3.png" alt="" class="offers_block-img">
			<img src="images/offers_2.png" alt="" class="offers_block-img">
		</div>

		<div class="title title--tools">Используемый инструмент<br> отслеживания</div>
		<div class="tools_block clearfix">
			<div class="tools_block__item">
				<img src="images/call_tracking_logo.png" alt="" class="tools_block__item-img">
			</div>
			<div class="tools_block__item">
				<img src="images/call_touch_logo.png" alt="" class="tools_block__item-img">
			</div>
			<div class="tools_block__item">
				<img src="images/smart_callback_logo.png" alt="" class="tools_block__item-img">
			</div>
			<div class="tools_block__item">
				<img src="images/comagic_logo.png" alt="" class="tools_block__item-img">
			</div>
		</div>


	</body>
	</html>