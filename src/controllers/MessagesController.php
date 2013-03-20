<?php namespace Talktalk;

class MessagesController extends \Talktalk\BaseController {

    public function __construct()
    {
        $this->category = new Category();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $topic = Topic::find(Input::get('topic_id'));

        $message = new Message();
            $message->fill(Input::all());
        $message->save();

        // Replace with Auth::user()
        $message->user->increaseMessageCount();


        $topic->increaseMessageCountAndSave();

        $topic->messages()->save($message);

        return Redirect::to( $topic->LastPage() );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($catId, $topicId)
    {
        $topic = Topic::find($topicId);
        $messages = $topic->getMessagePaginator();

        return \View::make('talktalk::topic.topic')->with(compact('topic', 'messages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}