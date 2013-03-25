<?php namespace Talktalk\Models;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

    class Topic extends \Eloquent
    {
        public function __construct()
        {
            $this->table = Config::get('talktalk::tables.topics');
        }

        public function getMessagePaginator()
        {
            return $this->hasMany('Talktalk\Message')->orderBy('created_at','ASC')->paginate( Config::get('talktalk::pagination.messages') );
        }

        public function user()
        {
            return $this->belongsTo('Talktalk\User');
        }

        public function createdBy()
        {
            return $this->user->name;
        }

        public function messages()
        {
            return $this->hasMany('Talktalk\message');
        }

        public function LastPage()
        {
            $url = URL::action('Talktalk\TopicsController@index', array( $this->category_id, $this->id));
            return $url . $this->lastPaginatedPage();
        }

        function lastPaginatedPage()
        {
            $page = $this->getMessagePaginator()->getLastPage();
            if($page > 1)
            {
                return '?page=' . $page;
            }
        }

        public function increaseMessageCountAndSave()
        {
            $this->message_count++;
            $this->save();
        }
    }