<?php

class TopicsController extends BaseController {

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index($catId, $topicId)
    {
        $topic = Topic::find($topicId);
        $messages = $topic->getMessagePaginator();

        return View::make('talktalk::topic.index')->with(compact('topic', 'messages'));
    }
  

}