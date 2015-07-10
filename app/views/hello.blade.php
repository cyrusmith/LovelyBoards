<!DOCTYPE html>
<html>
<head>

    <title>Грифельные доски на день рождения. Отличный способ запомнить достижения вашего малыша.</title>

    <meta name="description"
          content="Предлагаем украсить день рождения вашего малыша с помощью стильной грифельной доски. Дизайн, печать, оформление в раму."/>
    <meta name="keywords" content="грифельный доски, первый день рождения, подарок на один год, постер достижений"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/styles.css?v={{Config::get('love.version')}}"/>

</head>
<body>

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

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">LovelyBoards</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav menu">

                <li>
                    <a data-toggle="modal" data-target="#delivery" href="javascript:void(0);">Оплата и доставка</a>
                </li>
                <li>
                    <a data-toggle="modal" data-target="#garantii" href="javascript:void(0);">Гарантии</a>
                </li>
                <li>
                    <a data-toggle="modal" data-target="#faq" href="javascript:void(0);">Вопросы и ответы</a>
                </li>
                <li class="hidden-sm">
                    <a data-toggle="modal" data-target="#opcii" href="javascript:void(0);">Опции заказа</a>
                </li>

            </ul>

            <div class="navbar-right">
                <p class="phone">+7-908-052-81-87</p>
            </div>
        </div>

    </div>
</nav>

<div class="container-fluid section1">
    <p class="text-center">Вашему малышу скоро год?</p>

    <h1 class="text-center">
        Сохраните достижения вашего ребенка<br/>на стильной грифельной доске</h1>

    <div class="text-center visible-xs-block">
        <img src="images/descr_img.jpg" class="img-thumbnail"/>
    </div>

</div>

<div class="container-fluid descript-xs visible-xs-block">

    <p class="facils text-left">
        <span class="glyphicon glyphicon-ok text-success"></span> Дизайн<br/>
        <span class="glyphicon glyphicon-ok text-success"></span> Печать на холсте и оформление в раму<br/>
        <span class="glyphicon glyphicon-ok text-success"></span> Бесплатная доставка по России</p>

    <div class="panel panel-danger">
        <div class="panel-heading">
            <p class="panel-title"><span class="glyphicon glyphicon-gift"></span> Получите <b>бесплатный шаблон</b> в
                формате pdf для самостоятельного заполнения:
            </p>
        </div>

        <div class="panel-body">

            <form action="/free" role="form" method="post" id="form1">
                <div class="form-group">
                    <label class="control-label" for="email1">Ваш email</label>
                    <input name="email" id="email1" class="form-control" validator="email">
                </div>
                <div class="submit text-center">
                    <button class="btn btn-danger" type="submit">Отправить</button>
                </div>

            </form>

        </div>
    </div>

</div>

<div class="container-fluid descript hidden-xs">

    <div class="container">

        <div class="row">
            <div class="col-xs-4">
                <div class="descr_img">
                    <img src="images/descr_img.jpg" class="slideshow"/>
                </div>
            </div>
            <div class="col-xs-8">
                <h2>
                    Дизайн, печать на холсте,<br/>
                    оформление в раму,<br/>
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

<div class="text-center clearfix">
    <h3 class="text-center">
        Посмотрите все образцы постеров в группе Вконтакте: <a
                href='https://vk.com/chalkboard_diz?z=album-68421006_190981523' target="_blank"><br/>Модная Метрика &
            Постер достижений на 1 годик!</a>
    </h3>
</div>

<div class="container">
    <div class="gallery">
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

</div>

<div class="container line options">
    <div class="g2t">
        <p>Какие варианты доступны?</p>
    </div>

    <div class="panel-group visible-xs" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-warning">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                       aria-expanded="true" aria-controls="collapseOne">
                        &laquo;Принт-мини&raquo; &mdash; 950 руб.
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <ul>
                        <li>Постер достижений на основе <a href="https://vk.com/album-68421006_190981523"
                                                           target="_blank">готового
                                дизайна</a></li>
                        <li>Фразы и данные о малыше в выбранном дизайне</li>
                        <li>Количество фраз примерно как на выбранном дизайне</li>
                        <li>Вы получаете файл для печати на любом формате в ближайшей типографии.<br/>Удобно
                            распечатывать
                            на <a href='http://www.netprint.ru/bid/23488'>netprint.ru</a>: Печать на холсте, размер
                            50*75 см
                        </li>
                    </ul>
                    <button class="order-option btn btn-danger" rel="anketa0" opt="tarif1">Заказать</button>
                </div>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                       href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        &laquo;Принт-макси&raquo; &mdash; 2 499 руб.
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    <ul>
                        <li>Уникальный дизайн</li>
                        <li>Любое количество фраз</li>
                        <li>Любое тематическое оформление</li>
                        <li>Вы получаете файл для печати на любом формате в ближайшей типографии.<br/>Удобно
                            распечатывать
                            на <a href='http://www.netprint.ru/bid/23488'>netprint.ru</a>: Печать на холсте, размер
                            50*75 см
                        </li>
                    </ul>
                    <button class="order-option btn btn-danger" rel="anketa0" opt="tarif2">Заказать</button>
                </div>
            </div>
        </div>
        <div class="panel panel-danger">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                       href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        &laquo;Под ключ&raquo; &mdash; 6 999 руб.
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                    <ul>
                        <li>Уникальный дизайн</li>
                        <li>Любое количество фраз</li>
                        <li>Любое тематическое оформление</li>
                        <li>Печать на холсте</li>
                        <li>Оформление в багет-раму</li>
                        <li>Бесплатная доставка транспортной компанией в любой город РФ</li>
                    </ul>
                    <button class="order-option btn btn-danger" rel="anketa0" opt="tarif3">Заказать</button>
                </div>
            </div>
        </div>
    </div>

    <table class="hidden-xs">
        <tr class="titles">
            <th class="opt1">
                <div>&laquo;Принт-мини&raquo;<br>950 руб.
                </div>
            </th>
            <th class="opt2">
                <div>&laquo;Принт-макси&raquo;<br>2 499 руб.</div>
            </th>
            <th class="opt3">
                <div>&laquo;Под ключ&raquo;<br>
                    6 999 руб.
                </div>
            </th>
        </tr>
        <tr class="descr">
            <td class="opt1">
                <ul>
                    <li>Постер достижений на основе <a href="https://vk.com/album-68421006_190981523" target="_blank">готового
                            дизайна</a></li>
                    <li>Фразы и данные о малыше в выбранном дизайне</li>
                    <li>Количество фраз примерно как на выбранном дизайне</li>
                    <li>Вы получаете файл для печати на любом формате в ближайшей типографии.<br/>Удобно распечатывать
                        на <a href='http://www.netprint.ru/bid/23488'>netprint.ru</a>: Печать на холсте, размер 50*75 см
                    </li>
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
                    <li>Вы получаете файл для печати на любом формате в ближайшей типографии.<br/>Удобно распечатывать
                        на <a href='http://www.netprint.ru/bid/23488'>netprint.ru</a>: Печать на холсте, размер 50*75 см
                    </li>
                    <li class="cta">
                        <button class="order-option" rel="anketa0" opt="tarif2">Заказать</button>
                    </li>
                </ul>

            </td>
            <td class="opt3">
                <ul>
                    <li>Уникальный дизайн</li>
                    <li>Любое количество фраз</li>
                    <li>Любое тематическое оформление</li>
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

<div class="container testimonials">
    <h3 class="text-center">Отзывы</h3>

    <ul class="col-sm-offset-2 col-sm-8">

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

<div class="container line">

    <div class="col-sm-offset-2 col-sm-8 about">
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

<div class="container howwework">

    <h2>Как получить постер достижений?</h2>

    <div class="row">
        <div class="col-sm-4 step">
            <img src="images/icon-anketa.png"/>

            <p>Вы заполняете анкету и вносите предоплату</p>
        </div>
        <div class="col-sm-4 step">
            <img src="images/icon-design.png"/>

            <p>Мы делаем дизайн,печать на холсте,
                оформление в раму</p>
        </div>
        <div class="col-sm-4 step">
            <img src="images/icon-delivery.png"/>

            <p>Отправляем готовую доску
                удобным вам способом в
                любой город России</p>
        </div>
    </div>

</div>

<div class="text-center clearfix">
    <h3 class="text-center"><p>Остались вопросы? <a href='https://vk.com/bwraduga' target="_blank">Напишите</a> мне
            вконтакте</h3>
</div>

<div class="container-fluid offer hidden-xs">
    <div class="container">
        <h3><span class="icon"></span><span class="text">Помните!</span></h3>

        <p class="ofrtxt">
            Первый день рождения<br>
            бывает только раз в жизни!
        </p>

        <a href="#anketa" class="cta">
            <span class="text"><span class="wr">Заполните анкету<br>
и закажите постер достижений</span></span>
                <span class="note">Займет
не более
5 минут</span>
        </a>

    </div>
</div>

<div class="container-fluid offer visible-xs">
    <div class="container">
        <h3><span class="icon"></span><span class="text">Помните!</span></h3>

        <p class="text-center offersmall">
            Первый день рождения бывает только раз в жизни!
        </p>

        <div class="text-center">
            <a href="#anketa" class="cta btn btn-danger btn-lg text-center">
                Заполните анкету<br/>
                и закажите постер достижений
            </a>
            <span class="help-block">Займет не более 5 минут</span>
        </div>
    </div>
</div>

@include('anketa', array('id' => 'anketa'))

<?php /* ?>
<div class="container">
    <div class="orgoffer text-center">
        <img src="images/org_offer.jpg" alt="" style="width:100%; max-width:480px;"/>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-danger getdiscount" rel="getdiscform">Получить скидку</button>
    </div>

    <div class="row" id="getdiscform">
        <div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1">

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

<?php */ ?>

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



@include('popups')
@include('photoswipe')


@if (Config::get('app.debug'))
    <script src="/bower_components/requirejs/require.js" data-main="/js/main.js"></script>
@else
    <script src="/all.js?v={{Config::get('love.version')}}"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter26639517 = new Ya.Metrika({
                        id: 26639517,
                        webvisor: true,
                        clickmap: true,
                        trackLinks: true
                    });
                } catch (e) {
                }
            });

            var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () {
                        n.parentNode.insertBefore(s, n);
                    };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript>
        <div><img src="//mc.yandex.ru/watch/26639517" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
@endif

</body>
</html>