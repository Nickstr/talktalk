<form method="POST" action="{{ URL::action('MessagesController@store') }}">
    {{ Form::textarea('entry') }}
    {{ Form::hidden('topic_id', $topic->id)}}
    {{ Form::hidden('user_id') }}
    {{ Form::submit('Reply') }}
{{ Form::close() }}