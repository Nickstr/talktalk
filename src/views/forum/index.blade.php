@foreach($categories as $category)
<table>
    <thead>
        <tr>
            <td width="200" style="font-weight:bold">{{ $category->title }}</td>
            <td width="75" align="center">Topics</td>
            <td width="75" align="center">Posts</td>
        </tr>
    </thead>
        @foreach($category->subCategories as $subCategory)
        <tr>
            <td><a href="{{ URL::action('Talktalk\CategoriesController@index', $subCategory->id) }}">{{ $subCategory->title }}</a></td>
            <td width="75" align="center">{{ $subCategory->topic_count }}</td>
            <td width="75" align="center">{{ $subCategory->post_count }}</td>
        </tr>
        @endforeach
</table>
@endforeach