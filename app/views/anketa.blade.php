<div class="container line anketa" id="{{{$id}}}">
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
                <button type="submit" class="anketa-page-next btn btn-primary anketa-page-btn">Далее &rarr;</button>
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
                        <button type="submit" class="anketa-page-back btn btn-link anketa-page-btn">&larr;Назад
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