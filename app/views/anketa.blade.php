<div class="container line anketa" id="{{{$id}}}">

    <form role="form" action="anketa" method="post">

        <div class="row horizontalpages">
            <div class="col-xs-6 col-xs-offset-3">
                <h3>Укажите данные вашего малыша</h3>


                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label class="control-label" for="kidname">Имя</label>
                            <input type="text" name="name" class="form-control" id="kidname">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label class="control-label" for="date">Дата рождения</label>
                            <input type="text" name="birthdate" class="form-control" id="date"
                                   placeholder="23 мая 2014">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label class="control-label" for="height">Рост, см</label>
                            <input type="text" name="height" class="form-control" id="height">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label class="control-label" for="weight">Вес, кг</label>
                            <input type="text" name="weight" class="form-control" id="weight" placeholder="10,3">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label class="control-label" for="tooth">Сколько зубок?</label>
                            <input type="text" name="tooth" class="form-control" id="tooth">
                        </div>
                    </div>					
                </div>
                <div class="row form-group fav">
                    <div class="col-xs-4">
                        <label class="control-label" for="toy">Любимая игрушка:</label>
                    </div>
                    <div class="col-xs-8">
                        <input type="text" name="toy" class="form-control" id="toy" placeholder="">
                    </div>
                </div>
                <div class="row form-group fav">
                    <div class="col-xs-4">
                        <label class="control-label" for="food">Любимая еда:</label>
                    </div>
                    <div class="col-xs-8">
                        <input type="text" name="food" class="form-control" id="food" placeholder="">
                    </div>
                </div>
                <div class="row form-group fav">
                    <div class="col-xs-4">
                        <label class="control-label" for="deed">Любимое занятие:</label>
                    </div>
                    <div class="col-xs-8">
                        <input type="text" name="deed" class="form-control" id="deed" placeholder="">
                    </div>
                </div>
                <div class="row form-group fav">
                    <div class="col-xs-4">
                        <label class="control-label" for="song">Любимая песенка:</label>
                    </div>
                    <div class="col-xs-8">
                        <input type="text" name="song" class="form-control" id="song" placeholder="">
                    </div>
                </div>
                <div class="row form-group fav">
                    <div class="col-xs-4">
                        <label class="control-label" for="game">Любимая игра:</label>
                    </div>
                    <div class="col-xs-8">
                        <input type="text" name="game" class="form-control" id="game" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="favmore">Еще я люблю:</label>
                    <textarea class="form-control" name="more" rows="3" id="favmore"></textarea>
                </div>
                <div class="form-group">
                    <h4>Тариф</h4>

                    <div class="radio">
                        <label class="control-label">
                            <input type="radio" name="tarif" id="optionsRadios1" value="tarif1" checked>
                            &laquo;Принт-мини&raquo;
                        </label>
                    </div>

                    <div class="radio">
                        <label class="control-label">
                            <input type="radio" name="tarif" id="optionsRadios2" value="tarif2">
                            &laquo;Принт-макси&raquo;
                        </label>
                    </div>
                    <div class="radio">
                        <label class="control-label">
                            <input type="radio" name="tarif" id="optionsRadios3" value="tarif3">
                            &laquo;Под ключ&raquo;
                        </label>
                    </div>

                </div>
                <button type="submit" class="anketa-page-next btn btn-primary anketa-page-btn">Далее &rarr;</button>

            </div>

            <div class="col-xs-6 col-xs-offset-3">

                <h4>Данные для связи с вами:</h4>

                <div class="form-group">
                    <label class="control-label" for="username">Имя<sup>*</sup>:</label>
                    <input type="text" name="order_name" validator="notempty" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label class="control-label" for="email">Email<sup>*</sup>:</label>
                    <input type="email" name="order_email" validator="email" class="form-control" id="email">
                </div>

                <div class="form-group">
                    <label class="control-label" for="phone">Телефон:</label>
                    <input type="text" name="order_phone" class="form-control" id="phone"
                           placeholder="71239876789">
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <button type="submit" class="anketa-page-back btn btn-link anketa-page-btn">&larr;Назад
                        </button>
                    </div>
                    <div class="col-xs-6 text-right">
                        <button type="submit" class="btn btn-success">Отправить</button>
                    </div>
                </div>

            </div>
        </div>
    </form>

</div>