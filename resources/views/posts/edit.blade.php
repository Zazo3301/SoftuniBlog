<!DOCTYPE html>
{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
<h1>
    {{ Form::text('title', null, ["class" => 'form-control']) }}
</h1>
    {{ Form::text('body',null, ['class' => 'form-control']) }}

<p>
    updated at:
    {{ $post->updated_at }}
</p>
<p>
    {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
    {{Form::submit('Save Changes', ['class' => 'btn btn-primary btn-block'])}}
{!! Form::close() !!}
</p>

