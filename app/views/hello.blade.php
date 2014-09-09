<!DOCTYPE html>
<html>
<head>

    <title>Грифельные доски на день рождения. Отличный способ запомнить достижения вашего малыша.</title>

    <meta name="description"
          content="Предлагаем украсить день рождения вашего малыша с помощью стильной грифельной доски. Дизайн, печать, оформление в раму."/>
    <meta name="keywords" content="грифельный доски, первый день рождения, подарок на один год"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.2.0/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.2.0/dist/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="collagePlus/css/transitions.css" media="all"/>
    <link rel="stylesheet" href="fancyBox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen"/>
    <link rel="stylesheet" href="fancyBox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css"
          media="screen"/>
    <link rel="stylesheet" href="fancyBox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css"
          media="screen"/>

    <link rel="stylesheet" type="text/css" href="styles.css?v=2"/>

</head>
<body>

<div class="container">

    <div class="row header">
        <div class="col-xs-2 logo">
            <a href="/">LovelyBoards</a>
        </div>
        <div class="col-xs-7">
            <ul class="menu">
                <li>
                    <a href="#delivery">Оплата и доставка</a>
                </li>
                <li>
                    <a href="#garantii">Гарантии</a>
                </li>
                <li>
                    <a href="#faq">Вопросы и ответы</a>
                </li>
                <li>
                    <a href="#opcii">Опции заказа</a>
                </li>
            </ul>
        </div>
        <div class="col-xs-3">
            <address>
                <p class="phone">+7-908-052-81-87</p>
            </address>
        </div>
    </div>

    <?php

    $status = Session::get('status', '');
    $message = Session::get('message', '');

    if (!empty($status)) {
        ?>

        <p class="message <?php echo $status == 'ok' ? "bg-success" : "bg-danger" ?>"><?php echo $message?>
            <button type="button" class="close" onclick="$(this).parent().slideUp();"><span
                    aria-hidden="true">&times;</span><span
                    class="sr-only">Close</span></button>
        </p>

    <?php
    }
    ?>


    <h1 class="text-center clearfix">Вашему малышу скоро год?<br>
        Сохраните достижения вашего ребенка <br>на стильной грифельной доске</h1>

</div>

<div class="container-fluid descript">

    <div class="container">

        <div class="row">
            <div class="col-xs-4">
                <div class="descr_img">
                    <img src="images/descr_img.jpg" class="slideshow"/>
                </div>
            </div>
            <div class="col-xs-8">
                <h2>
                    Дизайн, печать на холсте,<br>
                    оформление в раму,<br>
                    бесплатная доставка по России
                </h2>

                <div class="row clearfix">
                    <div class="col-xs-6 getfree-title">
                        Получите бесплатный<br>
                        шаблон в формате pdf<br>
                        для самостоятельного заполнения
                    </div>
                    <div class="col-xs-6">
                        <form action="/free" role="form" method="post" id="form1">
                            <div class="form-group">
                                <label class="control-label" for="email1">Ваш email</label>
                                <input name="email" id="email1" class="form-control" validator="email">
                            </div>
                            <div class="submit text-center">
                                <button class="btn btn-info" type="submit">Отправить</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container line">

    <div class="col-xs-offset-2 col-xs-8 about">
        <h3>Как украсить первый день рождения: грифельные доски.</h3>

        <p>Первый день рождения важный этап в жизни каждой мамы и ее малыша.</p>

        <p>Кто как ни мама хочет рассказать всему миру о том какое она вырастила чудо, как прошел этот год и чего вы
            добились! </p>

        <p>Именно это Вы сможете сделать с помощью вечеринки по поводу первого дня рождения и нашего постера в стиле
            меловой доски! </p>

        <p>Представляем вашему вниманию <b>модную тенденцию в оформлении детских праздников</b> — это использование
            меловой
            доски, на которой вы подробно, а главное красиво, можете <b>рассказать все, чем запомнился Вам первый год
                жизни
                малыша.</b></p>

        <h4>Где купить грифельную доску и мелки?</h4>
        <!--
                <noindex>
                    <p>Если Вам понравилась наша идея оформления... <br><a class="more" href="#more_about">Далее</a></p>
                </noindex>
        -->
        <div id="more_about">
            <p>Можно
                пройтись по детским магазинам, и посмотреть что имеется в наличии там. Зачастую несколько вариантов
                меловых
                досок вы обязательно найдете, но они могут «кусаться» по цене или иметь много лишнего (подставку под
                мелки,
                например). Второй вариант поиска меловой доски на первый день рождения, сводится к поиску в
                интернете. </p>

            <h4>Альтернатива меловой доске на первый день рождения</h4>

            <p>Если Вам понравилась наша идея для оформления первого дня рождения, но вы не смогли найти подходящую
                грифельную
                доску, не отчаивайтесь! <b>Вы можете придумать и создать такой макет при помощи фотошопа и распечатать в
                    ближайшей
                    типографии.</b></p>

            <p><b>Плюсы такого варианта очевидны:</b> надпись не сотрется и не будет пачкаться, и Вам не придется
                потом
                хранить грифельную доску, которую Вы купили. При это надпись будет идеально ровная и Вы сможете придать
                ей
                любой
                цвет, какой захотите!<br>
            </p>

            <p>И мы будем рады помочь вам создать постер в фотошопе для вашего малыша!</p>

            <p>А главное помните, что первый день рождения больше никогда не повторится! И возможно Ваш малыш и не
                запомнит
                его, но яркие приятные эмоции, которые Вы подарите ему в это день — останутся на всю жизнь!</p>
        </div>
    </div>

</div>

<?php

?>

<div class="container gallery">

    <div id="collage" class="row">
        <?php
        for ($i = 1; $i < 18; $i++) {
            ?>
            <div class="wrapper" data-caption="">
                <a rel="gal1" href="images/gallery/<?php echo $i > 9 ? $i : "0" . $i; ?>_lovelyboard.jpg">
                    <img src="images/gallery/<?php echo $i > 9 ? $i : "0" . $i; ?>_lovelyboard_small.jpg"/>
                </a>
            </div>
        <?php
        }
        ?>
    </div>

</div>


<div class="container testimonials">
    <h3 class="text-center">Отзывы</h3>

    <ul class="col-xs-offset-2 col-xs-8">

        <li>


            <div>
                <img src="images/testimonials/1.jpg"/>

                <p>
                    <span>Наталья, Челябинск</span>
                    Чего только не придумают ))) Из простой идеи получается такая прикольная вещь
                    Сначала я хотела просто купить доску, но вариант с дизайнерским постером мне больше понравился,
                    хотя настоящую доску все равно хотим купить.
                </p>
            </div>
        </li>
        <li>


            <div><p>
                    <span>Полина, Москва</span>
                    Я сделала ошибку в своём заказе - указала неправильный месяц в дате получения! Но, когда я написала
                    в менеджеру, они сразу поменяли заказ, были очень вежливы и быстро выполнили работу, несмотря на то,
                    что сроки сильно поджимали. <br>Мы получили ооочень много комплиментов по поводу идеи постера, он
                    был прекрасным дополнением на годовасие. <br>А сейчас постер украшает нашу детскую! <br>Ещё раз
                    огромное спасибо!
                </p></div>
        </li>
        <li>


            <div><p>
                    <span>Элиза, Уфа</span>
                    Мы в восторге от нашей доски, вы отлично справились со своей работой!<br>Файл был выслан
                    вовремя(даже чуть раньше указанного срока) с инструкциями для печати. <br>Напечатать было не сложно.
                    <br>Ещё мы вставили постер в рамку и получилось потрясающе. <br>Такую вещь можно хранить годами!
            </div>
        </li>
        <li>


            <div><p>
                    <span>Екатерина, Тольятти</span>
                    Качество обслуживания на высоте! <br>У меня было куча вопросов, мне ответили очень быстро и постер
                    получился супер! <br>Очень рада, что выбрала этот сервис для оформления первого дня рождения дочери!
                </p></div>
        </li>
        <li>


            <div><p>
                    <span>Татьяна, Магнитогорск</span>
                    Я в восторге! Сделали точно так, как я заказывала. <br>Получилась красивая картина, которой буду
                    хвастаться на дне рождения дочери, и памятная вещь на года!
                </p></div>
        </li>


    </ul>
</div>

</div>

<div class="container howwework">

    <h2>Как получить доску?</h2>

    <div class="row">
        <div class="col-xs-4 step">
            <img src="images/icon-anketa.png"/>

            <p>Вы заполняете анкету и вносите предоплату</p>
        </div>
        <div class="col-xs-4 step">
            <img src="images/icon-design.png"/>

            <p>Мы делаем дизайн,печать на холсте,
                оформление в раму</p>
        </div>
        <div class="col-xs-4 step">
            <img src="images/icon-delivery.png"/>

            <p>Отправляем готовую доску
                удобным вам способом в
                любой город России</p>
        </div>
    </div>

</div>

<div class="container line options">
    <div class="g2t">
        <p>Какие варианты доступны?</p>
    </div>
    <table>
        <tr class="titles">
            <th class="opt1">
                <div>&laquo;Принт-мини&raquo;<br>575 руб.
                </div>
            </th>
            <th class="opt2">
                <div>&laquo;Принт-макси&raquo;<br>1 499 руб.</div>
            </th>
            <th class="opt3">
                <div>&laquo;Под ключ&raquo;<br>
                    4 999 руб.
                </div>
            </th>
        </tr>
        <tr class="descr">
            <td class="opt1">
                <ul>
                    <li>Постер на основе <a href="/design">готового дизайна</a></li>
                    <li>Фразы и данные о малыше в выбранном дизайне</li>
                    <li>Количество фраз примерно как на выбранном дизайне</li>
                    <li>Вы получаете файл PDF пригодный для печати на любом формате в ближайшей типографии.</li>
                    <li class="cta">
                        <button class="order-option" rel="anketa0" opt="tarif1">Заказать</button>
                    </li>
                </ul>

            </td>
            <td class="opt2">
                <ul>
                    <li>Уникальный дизайн</li>
                    <li>Любое количество фраз</li>
                    <li>Любое тематическое оформление</li>
                    <li>Вы получаете файл PDF пригодный для печати на любом формате в ближайшей типографии.</li>
                    <li class="cta">
                        <button class="order-option" rel="anketa0" opt="tarif2">Заказать</button>
                    </li>
                </ul>

            </td>
            <td class="opt3">
                <ul>
                    <li>Уникальный дизайн</li>
                    <li>Печать на холсте</li>
                    <li>Оформление в багет-раму</li>
                    <li>Бесплатная доставка транспортной компанией в любой город РФ</li>
                    <li class="cta">
                        <button class="order-option" rel="anketa0" opt="tarif3">Заказать</button>
                    </li>
                </ul>

            </td>
        </tr>
    </table>
</div>

@include('anketa', array('id' => 'anketa0'))

<div class="container-fluid offer">
    <div class="container">
        <h3><span class="icon"></span><span class="text">Это новое направление!<br>Поэтому &mdash;</span></h3>

        <p class="ofrtxt">
            До 31.12.2014<br>
            всем новым клиентам<br>
            пожизненная скидка 20%
        </p>

        <a href="#anketa" class="cta">
            <span class="text"><span class="wr">Заполните анкету<br>
и закажите доску</span></span>
                <span class="note">Займет
не более
5 минут</span>
        </a>

    </div>
</div>

@include('anketa', array('id' => 'anketa'))

<div class="container">
    <div class="orgoffer text-center">
        <img src="images/org_offer.jpg" alt=""/>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-danger getdiscount" rel="getdiscform">Получить скидку</button>
    </div>

    <div class="row" id="getdiscform">
        <div class="col-xs-4 col-xs-offset-4">

            <form role="form" action="discount" method="post">
                <div class="row">
                    <div class="form-group">
                        <label class="control-label" for="username">Имя:</label>
                        <input type="text" class="form-control" name="name" validator="notempty" id="username">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="username">Организация:</label>
                        <input type="text" class="form-control" name="organisation" id="username">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="email">Email:</label>
                        <input type="email" class="form-control" name="email" validator="email" id="email"
                               placeholder="">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Отправить</button>
                </div>

            </form>
        </div>
    </div>
</div>

<div class="container footer">
    <div class="row">
        <div class="col-xs-6 rekv">
            ИП Галимшина Э.В.<br>
            ОГРНИП 3486536586234
        </div>
        <div class="col-xs-6 copy">
            &copy LovelyBoards.ru 2014
        </div>
    </div>
</div>

<noindex>
    <div id="delivery">

        <h3>Оплата и доставка</h3>

        <h4>Для заказа "Под ключ"</h4>
        Доставка осуществляется транспортной компанией либо Почтой России на ваш выбор. Мы доставляем ваш заказ
        бесплатно.

        <h4>Для заказа "Принт - мини" и "Принт - макси"</h4>
        Я выполняю для Вас индивидуальный дизайн постера в стиле меловой доски, учитывая все персональные особенности
        вашего малыша.
        Вы получаете файл PDF пригодный для печати на любом формате в ближайшей типографии.
        Файл вы сможете скачать по предоставленной нами ссылке.

        <h4>Оплата</h4>
        Оплата производится на карту сбербанка. В будущем мы сможем добавить рассчет электронными валютами.

        <!--
                <h4>Почтой России</h4>

                <p>У почты есть два подходящих вам варианта:</p>

                <h5>Курьерская доставка EMS</h5>

                <p>Данный способ подойдет вам, если вы не хотите самостоятельно ходить в почтовое отделение. Вам привезут товар
                    и выдадут непосредственно в руки.</p>

                <p>Однако, стоимость будет значительная - 400 - 800 руб. в зависимости от вашего фактического местоположения.
                    Оплата - наличные курьеру.</p>

                <p>Посылкой (рекомендуемый дешевый вариант). Вы сами забираете посылку с товаром в ближайшем почтовом отделении.
                    Стоимость будет порядка 50-100 руб. Точную стоимость доставки вы можете узнать на сайте почты России. Также,
                    при подтверждении заказа оператор назовет вам точную стоимость.
                    Оплата - наличные при получении заказа на почте. Внимание! В случае оплаты покупки на сайте вы получите
                    посылку на почте бесплатно!</p>


                <p>Возможно, вы предпочтете пользоваться услугами одной из транспортных компаний из тех, с которыми мы
                    работаем.</p>

                <h4>Транспортная компания “Деловые линии”</h4>

                <p>Удостоверьтесь, что данная компания отправляет грузы в ваш город\нас. пункт на официальном сайте
                    http://www.dellin.ru/cities/</p>

                <p>Вы можете либо забрать заказа самостоятельно, либо запросить доставку по вашему адресу:
                    Забрать самостоятельно - стоимость доставки от нас в ваш город будет порядка 350 руб.
                    Заказать доставку на дом (произвольный адрес) - стоимость доставки от нашего склада до вашего адреса будет
                    порядка 650 руб.</p>

                <h4>Порядок оплаты и получения заказа</h4>

                <p>При отправке товара Деловыми линиями или EMS вы вносите 100% предоплату любым удобным вам способом, прежде
                    чем мы передадим ваш заказ в в службу доставки.</p>

                <p>В случае, если вы вдруг решите, что товар вам не подходит, то мы без вопросов возвращаем вам полную стоимость
                    товара. В этом случае мы оплачиваете только доставку.</p>

                <p>Вы можете вообще не платить за доставку. Для этого нужно выбрать получение товара в почтовом отделении и
                    оплатить покупку при оформлении заказа на сайте.</p>

                <p>Если вы предпочтете оплату наличными при получении (наложенный платеж), то стоимость доставки составит
                    порядка 100 руб. В обоих этих случаях вы имеете право вернуть товар, если по каким либо причинам он вам не
                    подошел.</p>
        -->
    </div>
</noindex>

<div id="garantii">

    <h3>Гарантии</h3>

    <p>
        Наша цель - доставить вам множество радостных и светлых минут. </p>

    <p>
        Если эта цель не достигнута - все остальное неважно. </p>

    <p>
        Мы гарантируем, что если вы останетесь недовольны результатами нашей работы, то мы без лишних
        вопросов вернем вам деньги. </p>

    <p>
        Для этого нужно просто написать нам и объяснить, что именно не понравилось. Это поможет сохранить вам деньги, а
        нам исправить недочеты в будущем.</p>

    <p>
        <b>Надеемся, что сможем сделать вас и ваших детей хоть немного счастливее!</b></p>

    </p>

</div>

<div id="faq">

    <h3>Вопросы и ответы</h3>

    <h5>Я организатор дестких праздников. Могу ли получить оптовую скидку?</h5>

    <p>Да, при последующих заказах вы получаете скидку 10%.</p>

    <h5>Могу ли я самостоятельно распечатать доску по вашему дизайну?</h5>

    <p>Да, это возможно. При подтверждении заказа вы согласуете размер постера с менеджером.</p>

    <h5>Какие способы оплаты вы принимаете?</h5>

    <p>В данный момент принимаем только платежи на банковскую карту или наличные курьеру. В дальнейшем можно будет
        оплатить электронными валютами.</p>

    <h5>Что, если вы не успеете привезти доску в оговоренный срок?</h5>

    <p>В этом случае мы вернем вам все деньги.</p>

    <h5>Что если будут замечены ошибки в информации на доске уже после ее получения?</h5>

    <p>Пришлите нам фото доски и мы вернем вам деньги. Нам важно, чтобы наша работа приносила только радость и
        счастье.</p>

</div>

<div id="opcii">

    <h3>Подробнее о вариантах заказа</h3>

    <p>
        <b>"Под ключ"</b> : Уникальный дизайн (любое количество фраз, рост, вес, количество зубок, слова)+ Тематическое
        оформление+ Печать на холсте +
        Оформление в раму. В этом варианте также предусмотрена отправка транспортной компанией или почтой России
        в любой город РФ. Менеджер предложит вам оптимальный способ доставки при подтверждении заказа.<br>
        <i>Вы получаете готовую доску, оформленную в багетную раму и файл PDF пригодный для печати на любом формате.</i>
        <br>Стоимость 4 999 р.</p>

    <p>

        <b>"Принт Mini"</b> : Постер на основе готового дизайна. Выбираете из <a href="#">галереи готовых шаблонов</a>.
        Данные о вашем ребенке мы помещаем на выбранный постер. Количество фраз примерно как на выбранном дизайне.<br>
        <i>Вы получаете файл PDF пригодный для печати на любом формате в ближайшей типографии.</i> <br>Стоимость работ
        по "Принт Mini" - 575 р.</p>

    <p>
        <b>"Принт Maxi"</b> : Уникальный дизайн (любое количество фраз, рост, вес, количество зубок, первые слова) +
        Тематическое оформление.
        <br><i>Вы получаете файл PDF пригодный для печати на любом формате в ближайшей типографии.</i> <br>Стоимость 999
        р. </p>


    <p>
        <b>Мы работаем чтобы сделать вас и ваших детей счастливыми!</b>
    </p>

</div>

<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>

<script src="collagePlus/jquery.collagePlus.js"></script>
<script src="collagePlus/extras/jquery.removeWhitespace.js"></script>
<script src="collagePlus/extras/jquery.collageCaption.js"></script>
<script type="text/javascript" src="fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script src="js/main.js?v=2" type="text/javascript"></script>
</body>
</html>