<?php

    class MessagePresenter
    {
        public function __construct($resource = null)
        {
            $this->user = $resource;
        }
        public function deleteLink()
        {
            if($this->user->user_id == 1)
            {
                return 'test'; 
            }  
        }
    }