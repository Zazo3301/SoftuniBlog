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
            <span class="btn btn-primary btn-block"><a style="color:#fff; text-decoration: none; font-weight: 400;opacity: 0.98;" href="/posts/create">Add Post</a></span>
            @foreach($posts->reverse() as $post)
            <?php
            $num = 13
            ?>
            <div class="col-md-{{$num}}">
                <div class="box-body">
                    <div class="box box-widget">
                        <div class="box-header with-border">
                            <div class="user-block">
                                <p style="opacity:0.4">{{date('M j, Y', strtotime($post->created_at )) }}</p>
                                <img class="img-circle " width="100" src="../dist/img/user1-128x128.jpg" alt="User Image">

                                <div class="dropdown fixed-right navbar-collapse-right">
                                    <i class="fa fa-angle-down"></i>
                                    <div class="dropdown-content">

                                        <p>{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

                                            {!! Form::submit('Delete', ['class' => 'linkAdmin']) !!}

                                            {!! Form::close() !!}</p>
                                        <p></p>
                                        <p>{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'linkAdmin2')) !!}</p>

                                    </div>
                                </div>

                                <span class="username"><a href="#"></a></span>
                                <span style="color: #444;
    font-size: 37px;
    font-weight: 600;
    margin-top: 36px;
    margin-left: 18px;
    opacity: 0.87;" class="description">{{ $post->title }}</span>
                            </div>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <img class="img-responsive pad pull-left" style="width: 344px;" src="{{ asset('images/'. $post->image) }}" alt="Photo">
                            <p>{{ substr($post->body, 0, 700) }} {{ strlen($post->body) > 700 ? "..." : "" }}</p>
                        </div>
                        <div class="box-footer">

                            <span style="margin-right: 6px;" class="pull-right text-muted">{{ Html::linkRoute('posts.show', 'View Post', array($post->id), array('class' => 'btn btn-primary btn-block'))}}</span>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                    <?php
                    $num++
                    ?>
                </div>

            </div>
                @endforeach
        </section>
    </div>
@include('admin._footer')

