<?php namespace Talktalk;

class ForumsController extends \Talktalk\BaseController {

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index()
    {
        $categories = $this->category->mainCategories()->get();
        return \View::make('talktalk::forum.index')->with(compact('categories'));
    }
}