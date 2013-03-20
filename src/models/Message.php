<?php namespace Talktalk;

    class Message extends \Eloquent
    {
        use Presentable;

        protected $fillable = array('entry', 'user_id', 'topic_id', 'message_id');

        public function __construct()
        {
            $this->table = \Config::get('talktalk::tables.messages');
        }

        public function user()
        {
            return $this->belongsTo('Talktalk\User');
        }

        public function createdBy()
        {
            return $this->user->name;
        }

        public function setUserIdAttribute()
        {
            $this->attributes['user_id'] = 1;
        }

    } 