
<table>
    <thead>
        <tr>
            <td width="200" style="font-weight:bold">{{ $category->title }}</td>
            <td width="75" align="center">Created by</td>
            <td width="75" align="center">Replies</td>
        </tr>
    </thead>
        @foreach($topics as $topic)
        <tr>
            <td><a href="{{ URL::action('TopicsController@index', array($category->id, $topic->id)) }}">{{ $topic->title }}</a></td>
            <td width="75" align="center">{{ $topic->createdBy() }}</td>
            <td width="75" align="center">{{ $topic->post_count }}</td>
        </tr>
        @endforeach
</table>
{{ $topics->links() }}