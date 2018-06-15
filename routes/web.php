<?php
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    //return $router->app->version();
    return view('login');
});
$router->get('/home', function () use ($router) {
    return view('home');
});

$router->post('/api/create', 'ApiController@create');
$router->post('/api/login', 'ApiController@login');
$router->get('/sendmail', function(){
    Mail::send('mail', [],function($msg) { 
        $msg->to(['prosales@saprosa.com']); 
        $msg->from(['x@x.com']); 
    });
    echo "Mail Sent Successfully";
});
