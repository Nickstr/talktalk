<?php namespace Talktalk;

class ForumsController extends \Talktalk\BaseController {

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index()
    {
        return \View::make('talktalk::forum.index')->with('categories', $this->category->mainCategories());
    }
}