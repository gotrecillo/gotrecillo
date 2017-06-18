<?php

namespace Gotrecillo\Providers\Backpack;

use Backpack\LogManager\LogManagerServiceProvider as OriginalProvider;
use Illuminate\Routing\Router;

class LogManagerServiceProvider extends OriginalProvider
{

    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Backpack\LogManager\app\Http\Controllers'], function ($router) {
            $router->group(
                ['middleware' => ['web', 'auth'], 'prefix' => config('backpack.base.route_prefix', 'admin')],
                function ($router) {
                    $router->get('log', 'LogController@index');
                    $router->get('log/preview/{file_name}', 'LogController@preview');
                    $router->get('log/download/{file_name}', 'LogController@download');
                    $router->delete('log/delete/{file_name}', 'LogController@delete');
                }
            );
        });
    }
}
