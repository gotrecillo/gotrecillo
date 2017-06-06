<?php

namespace Gotrecillo\Providers;

use Backpack\LogManager\LogManagerServiceProvider;
use Illuminate\Routing\Router;

class MyLogManagerServiceProvider extends LogManagerServiceProvider
{
    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Backpack\LogManager\app\Http\Controllers'], function ($router) {
            $router->group(['middleware' => ['web', 'auth'], 'prefix' => config('backpack.base.route_prefix', 'admin')], function ($router) {
                $router->get('logs', 'LogController@index');
                $router->get('logs/preview/{file_name}', 'LogController@preview');
                $router->get('logs/download/{file_name}', 'LogController@download');
                $router->delete('logs/delete/{file_name}', 'LogController@delete');
            });
        });
    }
}
