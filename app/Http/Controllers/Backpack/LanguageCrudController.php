<?php

namespace Gotrecillo\Http\Controllers\Backpack;

use Backpack\LangFileManager\app\Http\Controllers\LanguageCrudController as OriginalController;

class LanguageCrudController extends OriginalController
{
    public function __construct()
    {
        parent::__construct();

        $this->crud->addButtonFromView('top', 'language_files', 'language_files', 'end');
    }
}
