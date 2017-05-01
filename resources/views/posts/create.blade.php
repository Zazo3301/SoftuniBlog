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

        .imageUpload {
            margin-top: 20px;
        }
    </style>
</head>
@include('admin._header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create Post</h1>
                <hr>

            {!! Form::open(array('route' => 'posts.store', 'files' => true)) !!}

            {{ Form::label('title', ('Title:')) }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}

            {{ Form::label('body', 'Post Body:') }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}

            {{Form::label('featured_image', 'Upload Featured Image:' )}}
            {{Form::file('featured_image')}}
            <!-- TO DO - Post Author -->
                {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block imageUpload')) }}
                {!! Form::close() !!}
            </div>
        </div>
    </section>
</div>
@include('admin._footer')

