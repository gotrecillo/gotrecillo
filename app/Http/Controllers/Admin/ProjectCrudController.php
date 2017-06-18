<?php

namespace Gotrecillo\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use Gotrecillo\Http\Requests\ProjectRequest as StoreRequest;
use Gotrecillo\Http\Requests\ProjectRequest as UpdateRequest;
use Gotrecillo\Models\Project;
use Gotrecillo\Models\Technology;

class ProjectCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel(Project::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/project');
        $this->crud->setEntityNameStrings('project', 'projects');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->addFields([
            [
                'label' => 'Image',
                'type' => 'browse',
                'name' => 'image',
            ],
            [
                'label' => 'Technologies',
                'type' => 'select2_multiple',
                'name' => 'technologies',
                'entity' => 'technology',
                'attribute' => 'name',
                'model' => Technology::class,
                'pivot' => true,
            ],

            [
                'label' => 'Name',
                'name' => 'name',
            ],
            [
                'label' => 'Slug',
                'name' => 'slug',
            ],
            [
                'label' => 'Title',
                'name' => 'title',
            ],
            [
                'label' => 'Url',
                'name' => 'url',
            ],
            [
                'label' => 'Repository',
                'name' => 'repository',
            ],
            [
                'label' => 'Highlight',
                'name' => 'highlight',
                'type' => 'checkbox',
            ],
            [
                'label' => 'Description',
                'name' => 'description',
                'type' => 'summernote'
            ],
        ]);

        $this->crud->addColumns([
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
