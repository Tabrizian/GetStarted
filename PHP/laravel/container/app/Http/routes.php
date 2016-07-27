<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

class Mailer
{

}

class RegisterUsers
{
    protected $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function setMailer(Mailer $mailer) {
        $this->mailer = $mailer;
    }
}

App::bind('foo', function (){
    return new RegisterUsers(new Mailer);
});

App::singleton('bar', function () {
    return new RegisterUsers(new Mailer);
});

$one = app('bar');
$two = app('bar');

var_dump($one, $two);



Route::get('/', function (RegisterUsers $sth) {
    return view('welcome');
});
