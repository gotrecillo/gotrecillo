<?php

namespace Gotrecillo\Http\Controllers;

use Backpack\PageManager\app\Models\Page;

class PageController extends Controller
{

    public function index(Page $slug)
    {
        $page = $slug->withFakes();

        return view('pages.' . $page->template, ['page' => $page]);
    }
}
