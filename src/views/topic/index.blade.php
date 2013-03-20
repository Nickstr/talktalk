
<table>
    <thead>
        <tr>
            <td><strong>{{ $topic->title }}</strong></td>
        </tr>
    </thead>

@foreach($messages as $message)
    <tr>
        <td>Posted by: {{ $message->createdBy() }}</td>
        <td>{{ $message->entry }}</td>
        <td>{{ $message->getPresenter()->deleteLink() }}</td>
    </tr>
@endforeach
</table>
{{ $messages->links() }}


<h2>Quick reply</h2>
@include('talktalk::message.new')