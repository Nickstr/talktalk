<?php namespace Talktalk;

use Illuminate\Support\Facades\Config;

    class Statistic extends \Eloquent
    {
        public function __construct()
        {
            $this->table = Config::get('talktalk::tables.statistics');
        }
    }