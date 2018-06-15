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
    return view('home');
});
$router->get('/email', function () use ($router) {
    return view('mail');
});

$router->post('/api/create', 'ApiController@create');
$router->get('/sendmail', function(){
    Mail::send('mail', [],function($msg) { 
        $msg->to(['prosales@saprosa.com']); 
        $msg->from(['x@x.com']); 
    });
    echo "Mail Sent Successfully";
});
