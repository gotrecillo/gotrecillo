<?php

namespace Gotrecillo\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use Gotrecillo\Http\Requests\TechnologyRequest as StoreRequest;
use Gotrecillo\Http\Requests\TechnologyRequest as UpdateRequest;
use Gotrecillo\Models\Technology;

class TechnologyCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel(Technology::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/technology');
        $this->crud->setEntityNameStrings('technology', 'technologies');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */


        $this->crud->addFields([
             [
                 'label' => 'Logo',
                 'type' => 'browse',
                 'name' => 'logo',
             ],
             [
                 'label' => 'Name',
                 'name' => 'name',
             ],
             [
                 'label' => 'Slug',
                 'name' => 'slug',
             ],
        ]);

         $this->crud->addColumns([
             [
                 'label' => 'Logo',
                 'type' => 'model_function',
                 'function_name' => 'getLogoImage',
             ],
             [
                 'label' => 'Name',
                 'name' => 'name',
             ],
             [
                 'label' => 'Slug',
                 'name' => 'slug',
             ],
         ]);
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
