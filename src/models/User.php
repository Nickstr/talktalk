<?php
    class User extends Eloquent
    {

        public function statistics()
        {
            return $this->hasOne('Statistic');
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