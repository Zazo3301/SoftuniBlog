<div class="row">
    <div class="col-md-12">

        <table class="table">
            <thead>

            <th>#</th>

            <th>title</th>

            <th>body</th>

            <th>created at</th>

            <th></th>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>

                    <th>{{ $post->id }}</th>

                    <td>{{ $post->title }}</td>

                    <td>{{ substr($post->body, 0, 60) }} {{ strlen($post->body) > 60 ? "..." : "" }}</td>

                    <td>{{date('M j, Y', strtotime($post->created_at )) }}</td>

                    <td>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-default">View Post</a>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-default">Edit</a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>