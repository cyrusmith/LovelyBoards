<?php

class HomeController extends BaseController
{

    const ADMINEMAIL = "alexander.sutyagin@gmail.com";

    public function showWelcome()
    {
        return View::make('hello');
    }

    public function formOne()
    {

        $validator = Validator::make(Input::all(), array(
            'email' => 'email'
        ));

        $status = 'ok';
        $message = 'Спасибо за обращение! В течение дня мы вышлем вам бесплатный шаблон.';

        if (!$validator->fails()) {
            DB::transaction(function () {
                DB::insert('insert into signups (email, created, form_id) values (?, ?, ?)', array(Input::get('email'), date("Y-m-d H:i:s"), 1));
            });

            Mail::send('emails.adminnotify', array(
                'email' => Input::get('email'),
                'type' => 'Запрос бесплатного шаблона'
            ), function ($message) {
                $message->from('noreply@lovelyboards.ru', 'LovelyBoards')->to(self::ADMINEMAIL, 'Admin')->subject($_SERVER['HTTP_HOST'] . ": Запрос бесплатного шаблона.");
            });

        } else {
            $status = 'fail';
            $message = 'Похоже, вы указали неправильный email. Попробуйте еще раз или напишите нам на info@lovelyboards.ru';

        }
        return Redirect::to('free')->with('status', $status)->with('message', $message);
    }

    public function discount()
    {

        Validator::extend('notempty', 'HomeController@notEmpty');

        $validator = Validator::make(Input::all(), array(
            'email' => 'email',
            'name' => 'notempty'
        ));

        $status = 'ok';
        $message = 'Спасибо за обращение! В течение дня мы вышлем вам подробные инструкции что делать дальше.';

        if (!$validator->fails()) {
            DB::transaction(function () {
                DB::insert('insert into signups (name, email, created, form_id) values (?, ?, ?, ?)', array(Input::get('name') . "(" . Input::get('organisation') . ")", Input::get('email'), date("Y-m-d H:i:s"), 3));
            });

            Mail::send('emails.adminnotify', array(
                'email' => "Имя: ".Input::get('name')." Email: ".Input::get('email'),
                'type' => 'Запрос скидки'
            ), function ($message) {
                $message->from('noreply@lovelyboards.ru', 'LovelyBoards')->to(self::ADMINEMAIL, 'Admin')->subject($_SERVER['HTTP_HOST'] . ": Запрос скидки.");
            });

        } else {
            $status = 'fail';
            $message = 'Похоже, вы не заполнили некоторые обязательные поля. Попробуйте еще раз или напишите нам на info@lovelyboards.ru';

        }
        return Redirect::to('discount')->with('status', $status)->with('message', $message);
    }

    public function anketa()
    {

        Validator::extend('notempty', 'HomeController@notEmpty');

        $validator = Validator::make(Input::all(), array(
            'order_email' => 'email',
            'order_name' => 'notempty'
        ));

        $status = 'ok';
        $message = 'Спасибо за заказ! В течение дня менеджер свяжется с вами для уточнения деталей.';

        if (!$validator->fails()) {
            DB::insert('insert into anketas (' . implode(",", array(
                'name',
                'birthdate',
                'height',
                'weight',
                'toy',
                'food',
                'deed',
                'song',
                'game',
                'more',
                'tarif',
                'created',
                'order_name',
                'order_email',
                'order_phone'
            )) . ') values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', array(
                Input::get('name'),
                Input::get('birthdate'),
                Input::get('height'),
                Input::get('weight'),
                Input::get('toy'),
                Input::get('food'),
                Input::get('deed'),
                Input::get('song'),
                Input::get('game'),
                Input::get('more'),
                Input::get('tarif'),
                date('Y-m-d H:i:s'),
                Input::get('order_name'),
                Input::get('order_email'),
                Input::get('order_phone')
            ));

            $id = DB::getPdo()->lastInsertId();

            Mail::send('emails.adminnotify', array(
                'email' => " Имя: ".Input::get('order_name')." Email: ".Input::get('order_email').  " Телефон: ".Input::get('order_phone'),
                'type' => 'Заказ #' . $id
            ), function ($message) {
                $message->from('noreply@lovelyboards.ru', 'LovelyBoards')->to(self::ADMINEMAIL, 'Admin')->subject($_SERVER['HTTP_HOST'] . ": Заказ!");
            });
        } else {
            $status = 'fail';
            $message = 'Похоже, вы не заполнили некоторые обязательные поля. Попробуйте еще раз или напишите нам на info@lovelyboards.ru';

        }
        return Redirect::to('anketa')->with('status', $status)->with('message', $message);
    }

    public function notEmpty($attribute, $value, $parameters)
    {
        $val = trim($value);
        return !empty($val);
    }

}
