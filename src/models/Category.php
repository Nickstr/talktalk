<?php namespace Talktalk;

    class Category extends \Eloquent
    {
        public function __construct()
        {
            $this->table = \Config::get('talktalk::tables.categories');
        }

        public function mainCategories()
        {
            return $this->where('category_id', 0)->get();
        }

        public function subCategories()
        {
            return $this->hasMany('Talktalk\Category');
        }

        public function getTopicPaginator()
        {
            return $this->hasMany('Talktalk\Topic')->orderBy('pinned', 'DESC')->orderBy('updated_at', 'DESC')->paginate( \Config::get('talktalk::pagination.topics') );
        }
    }