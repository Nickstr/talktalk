<?php
    class Statistic extends Eloquent
    {
        public function __construct()
        {
            $this->table = Config::get('talktalk::tables.statistics');
        }
    }