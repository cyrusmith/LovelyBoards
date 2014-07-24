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
                DB::insert('insert into signups (email, created) values (?, ?)', array(Input::get('email'), date("Y-m-d H:i:s")));
            });
        } else {
            $status = 'fail';
            $message = 'Похоже, вы указали неправильный email. Попробуйте еще раз или напишите нам на info@lovelyboards.ru';

        }
        return Redirect::to('free')->with('status', $status)->with('message', $message);
    }

    public function discount()
    {

        $validator = Validator::make(Input::all(), array(
            'email' => 'email',
            'name' => 'alpha_num'
        ));

        $status = 'ok';
        $message = 'Спасибо за обращение! В течение дня мы вышлем вам подробные инструкции что делать дальше.';

        if (!$validator->fails()) {
            DB::transaction(function () {
                DB::insert('insert into signups (name, email, created) values (?, ?)', array(Input::get('name'). "(".Input::get('organisation').")", Input::get('email'), date("Y-m-d H:i:s")));
            });
        } else {
            $status = 'fail';
            $message = 'Похоже, вы некоторые обязательбые поля. Попробуйте еще раз или напишите нам на info@lovelyboards.ru';

        }
        return Redirect::to('free')->with('status', $status)->with('message', $message);
    }

}
