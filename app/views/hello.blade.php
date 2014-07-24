<!DOCTYPE html>
<html>
<head>

    <title>Украшение для десткого праздника и отличный подарок на день рождения - грифельная доска с достижениями
        ребенка за год</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.2.0/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.2.0/dist/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="styles.css"/>

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
            <button type="button" class="close" onclick="$(this).parent().slideUp();"><span aria-hidden="true">&times;</span><span
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
                    Дизайн, печать,<br>
                    оформление в рамку,<br>
                    бесплатная доставка по России
                </h2>

                <div class="row clearfix">
                    <div class="col-xs-6 getfree-title">
                        Получите бесплатный<br>
                        шаблон в формате psd<br>
                        для самостоятельного заполнения
                    </div>
                    <div class="col-xs-6">
                        <form action="/free" role="form" method="post" id="form1">
                            <div class="form-group">
                                <label for="email1">Ваш email</label>
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

    <div class="col-xs-7 about">
        <h3>Как украсить первый день рождения: грифельные доски.</h3>

        <p>Первый день рождения важный этап в жизни каждой мамы и ее малыша. И чем ближе заветная дата, тем чаще мама
            задает себе вопросы: что сделать особенного на первый день рождения? как украсить комнату или квартиру? где
            заказать шары на праздник? как выбрать торт на годовасие? Ответы на все эти вопросы Вы можете найти на нашем
            сайте, а непосредственно в этой статье мы расскажем о новом направлении в украшении первого дня
            рождения.</p>

        <p>Представляем вашему вниманию модную тенденцию в оформлении детских праздников — это использование меловой
            доски, на которой вы подробно, а главное красиво, можете рассказать все, чем запомнился Вам первый год жизни
            малыша.</p>

        <h4>Что писать на грифельной доске в первый день рождения?</h4>

        <p>Чтобы надпись выглядела красиво необходимо заранее определиться что вы будете писать. Как правило, в верхней
            части грифельной доски пишут имя именинника красивыми большими буквами, а под ним название праздника (в
            нашем
            случае первый день рождения). Надпись может быть выполнена на любом языке, как вам больше нравится, главное
            постараться написать аккуратно и красиво.</p>

        <h4>Где купить грифельную доску и мелки?</h4>

        <noindex>
            <p>Если Вам понравилась наша идея оформления... <br><a class="more" href="#more_about">Далее</a></p>
        </noindex>

        <div id="more_about">
            <p>Если Вам понравилась наша идея оформления первого дня рождения при помощи меловой доски, то следующая
                проблема,
                которая встанет перед Вами — это где ее купить? На самом деле, это не так сложно как кажется. Для начала
                можно
                пройтись по детским магазинам, и посмотреть что имеется в наличии там. Зачастую несколько вариантов
                меловых
                досок вы обязательно найдете, но они могут «кусаться» по цене или иметь много лишнего (подставку под
                мелки,
                например). Второй вариант поиска меловой доски на первый день рождения, сводится к поиску в интернете.
                Но
                чаще
                всего, там предлагают магнитно-грифельные доски на холодильник, а их цена зависит от размера. Также Вы
                можете
                попробовать поискать в магазине Икеа, если таковой имеется в вашем городе, или воспользоваться всем
                известным
                сайтом бесплатных объявлений Авито, как сделали мы.</p>

            <h4>Альтернатива меловой доске на первый день рождения</h4>

            <p>Если Вам понравилась наша идея для оформления первого дня рождения, но вы не смогли найти подходящую
                грифельную
                доску, не отчаивайтесь! Вы можете придумать и создать такой макет при помощи фотошопа и распечатать в
                ближайшей
                типографии. Плюсы такого варианта очевидны: надпись не сотрется и не будет пачкаться, и Вам не придется
                потом
                хранить грифельную доску, которую Вы купили. При это надпись будет идеально ровная и Вы сможете придать
                ей
                любой
                цвет, какой захотите!</p>

            <p>А главное помните, что первый день рождения больше никогда не повторится! И возможно Ваш малыш и не
                запомнит
                его, но яркие приятные эмоции, которые Вы подарите ему в это день — останутся на всю жизнь!</p>
        </div>
    </div>

    <div class="col-xs-offset-1 col-xs-3 testimonials">
        <h3 class="text-center">Отзывы</h3>

        <div class="scroll">
            <a href="#" class="back">&nbsp;</a>
            <a href="#" class="fwd">&nbsp;</a>
            <ul class="items clearfix">
                <li>
                    <p class="text-center"><img src="images/testimonials/1.jpg"/></p>
                    <h4>Наталья, Челябинск</h4>

                    <p>
                        Чего только не придумают ))) Из простой идеи получается такая прикольная вещь
                        Сначала я хотеля просто купить доску, но вариант с дизайнеркм постером мне больше понравился,
                        хотя настоящую доску все равно хотим купить.
                    </p>
                </li>


            </ul>
        </div>

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

            <p>Мы делаем дизайн,печать,
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
        <p>Каие варианты доступны?</p>
    </div>
    <table>
        <tr class="titles">
            <th class="opt1">
                <div>&laquo;Принт-мини&raquo;
                </div>
            </th>
            <th class="opt2">
                <div>&laquo;Принт-макси&raquo;<br>400 руб.</div>
            </th>
            <th class="opt3">
                <div>&laquo;Под ключ&raquo;<br>
                    5000 руб.
                </div>
            </th>
        </tr>
        <tr class="descr">
            <td class="opt1">
                <ul>
                    <li>
                        Постер на основе <a href="/design">готового дизайна</a>
                    </li>
                    <li class="cta">
                        <button>Заказать</button>
                    </li>
                </ul>

            </td>
            <td class="opt2">
                <ul>
                    <li>
                        Любое количество фраз
                    </li>
                    <li>
                        Уникальный шаблон
                    </li>
                    <li class="cta">
                        <button>Заказать</button>
                    </li>
                </ul>

            </td>
            <td class="opt3">
                <ul>
                    <li>
                        Печать на холсте
                    </li>
                    <li>
                        Оформление в раму
                    </li>
                    <li class="cta">
                        <button>Заказать</button>
                    </li>
                </ul>

            </td>
        </tr>
    </table>
</div>

<div class="container-fluid offer">
    <div class="container">
        <h3><span class="icon"></span><span class="text">Это новое направление!<br>Поэтому &mdash;</span></h3>

        <p class="ofrtxt">
            До 31.07.2014<br>
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

<div class="container line anketa" id="anketa">
    <div class="row horizontalpages">
        <div class="col-xs-6 col-xs-offset-3">
            <h3>Укажите данные вашего малыша</h3>

            <form role="form">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="kidname">Имя</label>
                            <input type="text" class="form-control" id="kidname">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="date">Дата рождения</label>
                            <input type="date" class="form-control" id="date" placeholder="23 мая 2014">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="height">Рост, см</label>
                            <input type="number" class="form-control" id="height">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="weight">Вес, кг</label>
                            <input type="text" class="form-control" id="weight" placeholder="10,3">
                        </div>
                    </div>
                </div>
                <div class="row form-group fav">
                    <div class="col-xs-4">
                        <label for="toy">Любимая игрушка:</label>
                    </div>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" id="toy" placeholder="">
                    </div>
                </div>
                <div class="row form-group fav">
                    <div class="col-xs-4">
                        <label for="food">Любимая еда:</label>
                    </div>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" id="food" placeholder="">
                    </div>
                </div>
                <div class="row form-group fav">
                    <div class="col-xs-4">
                        <label for="deed">Любимое занятие:</label>
                    </div>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" id="deed" placeholder="">
                    </div>
                </div>
                <div class="row form-group fav">
                    <div class="col-xs-4">
                        <label for="song">Любимая песенка:</label>
                    </div>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" id="song" placeholder="">
                    </div>
                </div>
                <div class="row form-group fav">
                    <div class="col-xs-4">
                        <label for="game">Любимая игра:</label>
                    </div>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" id="game" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="favmore">Еще я люблю:</label>
                    <textarea class="form-control" rows="3" id="favmore"></textarea>
                </div>
                <div class="form-group">
                    <h4>Тариф</h4>

                    <div class="radio">
                        <label>
                            <input type="radio" name="tarif" id="optionsRadios1" value="tarif1" checked>
                            Принт-мини
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <input type="radio" name="tarif" id="optionsRadios2" value="tarif2">
                            &laquo;Принт-макси&raquo;
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="tarif" id="optionsRadios3" value="tarif3">
                            &laquo;Под ключ&raquo;
                        </label>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary anketa-page-btn" id="anketaPageNext">Далее &rarr;</button>
            </form>
        </div>

        <div class="col-xs-6 col-xs-offset-3">
            <h4>Данные для связи с вами:</h4>

            <form role="form">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="username">Имя:</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-link anketa-page-btn" id="anketaPageBack">&larr;Назад
                        </button>
                    </div>
                    <div class="col-xs-6 text-right">
                        <button type="submit" class="btn btn-success">Отправить</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>

<div class="container">
    <div class="orgoffer text-center">
        <img src="images/org_offer.jpg" alt=""/>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-danger getdiscount" rel="getdiscform">Получить скидку</button>
    </div>

    <div class="row" id="getdiscform">
        <div class="col-xs-4 col-xs-offset-4">

            <form role="form">
                <div class="row">
                    <div class="form-group">
                        <label for="username">Имя:</label>
                        <input type="text" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="">
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
            ИП Сутягина Э.В.<br>
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
            Оплата - наличные при получении заказа на почте. Внимание! В случае оплаты покупки на сайте вы полуете
            посылку на почте бесплатно!</p>


        <p>Возможно, вы предпочтете пользоваться услугами одной из транспортных компаний из тех, с которыми мы
            работаем.</p>

        <h4>Транспортная компания “Деловые линии”</h4>

        <p>Удостоверьтесь, что данная компания отправляет грузы в ваш город\нас. пункт на официальном сайте
            http://www.dellin.ru/cities/</p>

        <p>Вы можете либо забрать заказа самостоятельно, либо запрости доставку по вашему адресу:
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

    </div>
</noindex>

<div id="garantii">

    <h3>Гарантии</h3>

    <p>
        Наша цель - доставить вам множество радостных и светлых минут. </p>

    <p>
        Если эта цель не достигнута - все остальное неважно. </p>

    <p>
        Мы гарантируем, что если вы останетесь недовольны результатами нашей работы, но ты без лишних
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

    <p>Да, при последующих раказах вы получаете скидку 10%.</p>

    <h5>Могу ли я самостоятельно распечатать достку по вашему дизайну?</h5>

    <p>Да, это возможно. При подтверждении заказа вы согласуете размер плаката с менеджером.</p>

    <h5>Какие способы оплаты вы принимаете?</h5>

    <p>В данный момент принимает только платежи на банковскую карту или наличные курьеру. В дальнейшем можно будет
        оплатить электронными валютами.</p>

    <h5>Что, если вы не успеете привезти доску в оговоренный срок?</h5>

    <p>Если сроки для вас важны, то в этом случае мы вернем вам все деньги.</p>

    <h5>Что если будут замечены ошибки в информации на доске уже послее ее получения?</h5>

    <p>Пришлите нам фото доски и мы вернем вам деньги. Нам важно, чтобы наша работа приносила только радость и
        счастье.</p>

</div>

<div id="opcii">

    <h3>Подробнее о вариантах заказа</h3>

    <p>

        <b>"Принт Mini"</b> : Постер на основе готового дизайна. Выбираете из <a href="#">галереи готовых шаблонов</a>.
        Ваши данные будут подставлены на соответствующие пожиции в шаблоне. Стоимость работ по "Принт Mini" - 450 р.</p>

    <p>
        <b>"Принт Maxi"</b> : Уникальный дизайн (любое количество фраз, рост, вес, количество зубок, первые слова) 999
        р. </p>

    <p>
        <b>"Под ключ"</b> : Дизайн (любое количество фраз, рост, вес, количество зубок, слова)+ Печать на холсте +
        Оформление в раму 4 999 р. В этом варианте также предусмотрена отправка транспортной компанией или почтой России
        в любой город РФ. Менеджер предложит вам оптимальный способ доставки при подтверждении заказа.</p>

    <p>
        <b>Мы работаем чтобы сделать вас и ваших детей счастливыми!</b>
    </p>

</div>

<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
</body>
</html>