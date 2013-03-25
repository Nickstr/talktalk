<?php namespace Talktalk\Controllers;

use Illuminate\Support\Facades\View;
use Talktalk\Models;

class ForumsController extends BaseController {

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index()
    {
        $categories = $this->category->mainCategories()->get();
        return View::make('talktalk::forum.index')->with(compact('categories'));
    }
}