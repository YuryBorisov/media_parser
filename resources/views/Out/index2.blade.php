<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../Out/style.css">
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
                <li class="diagram__list-item">http://www.novostroy-m.ru/</li>
                <li class="diagram__list-item">http://www.ploshadka-media.ru/</li>
                <li class="diagram__list-item">http://www.mediaploshadka.ru/</li>
            </ul>
        </div>
        <div class="diagram__text">Выделенный бюджет<br> на баннеры</div>
    </div>

    <div class="baner baner--first">
        <div class="baner__title baner__title--novostroy">http://www.novostroy-m.ru/</div>
        <div class="baner__wrapper clearfix">
            <div class="baner__item baner__item--novostroy">
                <div class="baner__item__title">Баннер:</div>
                <div class="baner__item__text">http://www.regus.ru/zsys/ncms/ru-ru/...</div>
                <div class="baner__item__title">Баннерное место:</div>
                <div class="baner__item__text">Карусель низ</div>
                <div class="baner__item__title">Стоимость:</div>
                <div class="baner__item__text">70.000 р.</div>
                <img class="baner__item-img" src="images/baner.jpg" alt="some_img" >
            </div>

            <div class="baner__item baner__item--novostroy">
                <div class="baner__item__title">Баннер:</div>
                <div class="baner__item__text">http://www.regus.ru/zsys/ncms/ru-ru/...</div>
                <div class="baner__item__title">Баннерное место:</div>
                <div class="baner__item__text">Карусель низ</div>
                <div class="baner__item__title">Стоимость:</div>
                <div class="baner__item__text">60.000 р.</div>
                <img class="baner__item-img" src="images/baner.jpg" alt="some_img" >
            </div>

            <div class="baner__item baner__item--novostroy">
                <div class="baner__item__title">Баннер:</div>
                <div class="baner__item__text">http://www.regus.ru/zsys/ncms/ru-ru/...</div>
                <div class="baner__item__title">Баннерное место:</div>
                <div class="baner__item__text">Карусель низ</div>
                <div class="baner__item__title">Стоимость:</div>
                <div class="baner__item__text">70.000 р.</div>
                <img class="baner__item-img" src="images/baner.jpg" alt="some_img" >
            </div>
        </div>
        <div class="baner__price"><span class="baner__price--bold">Общая стоимость:</span> 200.000 р.</div>
    </div>
</div>






<div class="wrapper">


    @foreach($data as $item)
        <div class="baner">
            <div class="baner__title baner__title--pmedia">{{ $item[0]['media_platform'] }}</div>
            <div class="baner__wrapper clearfix">
                @foreach($item as $item2)
                    <div class="baner__item baner__item--pmedia">
                        <div class="baner__item__title">Баннер: </div>
                        <div class="baner__item__text">{{ $item2['title'] }}</div>
                        <div class="baner__item__title">Баннерное место:</div>
                        <div class="baner__item__text">{{$item[0]['media_platform']}}{{ $item2['url'] }}</div>
                        <div class="baner__item__title">Стоимость:</div>
                        <div class="baner__item__text">{{$item2['price']}} р.</div>
                        <img class="baner__item-img" src="{{$item2['image']}}" alt="some_img" >
                    </div>
                @endforeach
            </div>
            <div class="baner__price"><span class="baner__price--bold">Общая стоимость:</span> 90.000 р.</div>
        </div>
    @endforeach


</div>


<div class="wrapper">
    <table class="begin">
        <tr>
            <td class="begin__title">
                <span>Продажи</span><br>
                Дата
            </td>
            <td class="begin__title" align="center">Стоимость</td>
            <td class="begin__title" align="center">Кол-во комнат</td>
            <td class="begin__title">Площадь м^2</td>
        </tr>
    </table>
    <table>
        <tr>
            <td >
                <div class="sale__div" >25-10-2016</div>
            </td>

            <td  class="sale__td"  >
                <div class="sale__div">2 000 000 </div>
                <div class="sale__div">2 000 000 </div>
                <div class="sale__div">2 000 000 </div>
                <div class="sale__div">2 000 000 </div>
            </td>
            <td class="sale__td"  >
                <div class="sale__div">2</div>
                <div class="sale__div">3</div>
                <div class="sale__div">5</div>
                <div class="sale__div">1</div>
            </td>
            <td class="sale__td" >
                <div class="sale__div">78</div>
                <div class="sale__div">90</div>
                <div class="sale__div">150</div>
                <div class="sale__div"	>44</div>
            </td>
        </tr>
        <tr>
            <td >
                <div class="sale__div" >26-10-2016</div>
            </td>

            <td  class="sale__td"  >
                <div class="sale__div">2 000 000 </div>
                <div class="sale__div">2 000 000 </div>
                <div class="sale__div">2 000 000 </div>
                <div class="sale__div">2 000 000 </div>
            </td>
            <td class="sale__td" >
                <div class="sale__div">2</div>
                <div class="sale__div">3</div>
                <div class="sale__div">5</div>
                <div class="sale__div">1</div>
            </td>
            <td class="sale__td"  >
                <div class="sale__div">78</div>
                <div class="sale__div">90</div>
                <div class="sale__div">150</div>
                <div class="sale__div"	>44</div>
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
                </td>
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
                <td>111111111 1111111</td>
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

<script type="text/javascript" src="script.js"></script>
</body>
</html>