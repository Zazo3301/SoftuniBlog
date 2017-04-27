<!DOCTYPE html>
@section('title', '| Create Post')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Create Post</h1>
        <hr>

        {!! Form::open(array('route' => 'posts.store', 'files' => true)) !!}

        {{ Form::label('title', ('Title:')) }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}

        {{ Form::label('body', 'Post Body:') }}
        {{ Form::textarea('body', null, array('class' => 'form-control')) }}

        {{Form::label('featured_image', 'Upload Featured Image:')}}
        {{Form::file('featured_image')}}
        <!-- TO DO - Post Author -->
        {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block')) }}
        {!! Form::close() !!}
    </div>
</div>