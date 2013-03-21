<?php namespace Talktalk;

use Illuminate\Support\Facades\View;

class CategoriesController extends \Talktalk\BaseController {

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index($id)
    {
        $category = Category::find($id);
        $topics = $category->getTopicPaginator();

        return View::make('talktalk::category.index')->with(compact('category', 'topics'));
    }
}