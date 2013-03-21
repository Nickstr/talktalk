<?php namespace Talktalk;

use Illuminate\Support\Facades\Config;

    class User extends \Eloquent
    {
        public function __construct()
        {
            $this->table = Config::get('talktalk::tables.users');
        }

        public function statistics()
        {
            return $this->hasOne('Talktalk\Statistic');
        }

        public function increaseMessageCount()
        {
            $this->statistics->message_count++;
            $this->statistics->save();
        }

        public function decreaseMessageCount()
        {
            $this->statistics->message_count--;
            $this->statistics->save();
        }

        public function increaseTopicCount()
        {
            $this->statistics->topic_count++;
            $this->statistics->save();
        }

        public function decreaseTopicCount()
        {
            $this->statistics->topic_count--;
            $this->statistics->save();
        }

    }