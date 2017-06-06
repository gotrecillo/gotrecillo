<?php

namespace Gotrecillo\Providers\Backpack;

use Backpack\LangFileManager\LangFileManagerServiceProvider as OriginalProvider;
use Illuminate\Routing\Router;

class LangFileManagerServiceProvider extends OriginalProvider
{

    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Gotrecillo\Http\Controllers\Backpack'], function ($router) {
            $router->group(['prefix' => config('backpack.base.route_prefix', 'admin'), 'middleware' => ['web', 'auth']],
                function ($router) {
                    // Language
                    $router->get('language/texts/{lang?}/{file?}', 'LanguageCrudController@showTexts');
                    $router->post('language/texts/{lang}/{file}', 'LanguageCrudController@updateTexts');
                    $router->resource('language', 'LanguageCrudController');
                });
        });
    }
}
