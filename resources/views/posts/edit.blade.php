<!DOCTYPE html>
<html>
<head>
    <style>

        .fixed-right {
            margin: 1px 10px 10px 990px;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 149px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
            margin-left: -133px;
            margin-top: -7px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .linkAdmin2 {
            cursor: pointer;
            color: #3c8dbc;
            background: none;
            border: transparent;
            margin-left: -6px;
            -webkit-appearance: inherit !important;
            font-size: 16px;
            margin-left: 0 !important;
        }

        .linkAdmin {
            cursor: pointer;
            color: #3c8dbc;
            background: none;
            border: transparent;
            margin-left: -6px;
            -webkit-appearance: inherit !important;
            font-size: 16px;
        }
    </style>
</head>
@include('admin._header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!DOCTYPE html>
        <h1>
            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}
            {{Form::text('title', null, ['class' => 'form-control'])}}
        </h1>
        <p class="lead">
            {{Form::textarea('body', null, ['class' => 'form-control'])}}
        </p>
        <p>

            {{ Form::label('featured_image', 'Update Featured Image') }}
            {{ Form::file('featured_image') }}
        </p>

        <img src="{{ asset('images/'. $post->image) }}">

        <p>created at:
            {{ $post->created_at }}
        </p>

        </p>
        <p>

            {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}


            {!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) !!}

        </p>
        <p>

        </p>
    </section>
</div>
@include('admin._footer')

