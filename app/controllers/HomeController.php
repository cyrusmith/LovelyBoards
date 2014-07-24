<?php

class HomeController extends BaseController
{

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
        } else {
            $status = 'fail';
            $message = 'Похоже, вы не заполнили некоторые обязательные поля. Попробуйте еще раз или напишите нам на info@lovelyboards.ru';

        }
        return Redirect::to('discount')->with('status', $status)->with('message', $message);
    }

    public function notEmpty($attribute, $value, $parameters)
    {
        $val = trim($value);
        return !empty($val);
    }

}
