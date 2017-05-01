<!DOCTYPE html>
{{--<h1>--}}
    {{--{{ $post->title }}--}}
{{--</h1>--}}
{{--<p class="lead">--}}
    {{--{{$post->body}}--}}
{{--</p>--}}
{{--<img src="{{ asset('images/'. $post->image) }}">--}}

{{--<p>created at:--}}
    {{--{{ $post->created_at }}--}}
{{--</p>--}}
{{--<p>--}}
    {{--updated at:--}}
    {{--{{ $post->updated_at }}--}}
{{--</p>--}}
{{--<p>--}}

    {{--{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}--}}

    {{--{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}--}}

    {{--{!! Form::submit('Delete', ['class' => 'btn btn-primary btn-block']) !!}--}}

    {{--{!! Form::close() !!}--}}
{{--</p>--}}
{{--<p>--}}



{{--</p>--}}


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


    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">


</head>
@include("posts._header");
<div style="    margin-left: 0 !important;" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">         <?php
            $num = 9
            ?>
            <div class="col-md-{{$num}}">
                <div class="box-body">
                    <div class="box box-widget">
                        <div class="box-header with-border">
                            <div class="user-block">
                                <p style="opacity: 0.6;
    font-size: 17px;
    padding-top: 20;
    display: -webkit-inline-box;
    margin-left: 22px;">{{date('M j, Y', strtotime($post->created_at )) }}</p>
                                <img style="width: 60px;
    height: 60px;
    margin-left: 20px;
    float: left;" class="img-circle " width="100" src="../dist/img/user1-128x128.jpg" alt="User Image">


                                <span class="username"><a href="#"></a></span>
                                <span style="color: #444;
    font-size: 48px;
    font-weight: 600;
    margin-top: 36px;
    margin-left: 18px;
    opacity: 0.87;" class="description">{{ $post->title }}</span>
                            </div>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <img class="img-responsive pad pull-left" style="width: 511px;" src="{{ asset('images/'. $post->image) }}" alt="Photo">
                            <p style="margin-left: 0;
    display: initial;">{{ $post->body }}</p>
                        </div>
                        <div class="box-footer">
                            <p style="float: right;
    margin-right: 31px;
    color: #aaa;">Author: <span style="opacity: .6;
    color: #2299ee;
    font-size: 14px;
    cursor: auto;"> Ivan</span></p>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                    <?php
                    $num++
                    ?>
                </div>

            </div>
    </section>
</div>
<section style="    position: absolute;
    margin-top: -611px;
    right: 13px;" class="col-md-3">
@if (Auth::guest())
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
            <li><a href="#reset" data-toggle="tab"> Register</a></li>


        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="login">
                <div class="login-box-body">
                    <p class="login-box-msg">Sign in</p>

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input  id="email" type="email" class="form-control" name="email" value="{{ old('email') }} " placeholder="Email" required autofocus>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            @if ($errors->has('email'))
                                <span class="help-block">
 							<strong>{{ $errors->first('email') }}</strong>
 						</span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
 						<strong>{{ $errors->first('password') }}</strong>
 					</span>
                        @endif
                        <div style="padding-bottom: 22px;" class="col-md-12 col-md-offset-1">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->

                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>

                        <!-- /.col -->

                    </form>

                    <!-- /.social-auth-links -->
                </div>


            </div>
            <!-- /.tab-pane -->


            <!-- /.tab-pane -->
            <div class="tab-pane" id="reset">
                <div class="tab-pane active" id="login">
                    <div class="login-box-body">
                        <p class="login-box-msg">Register</p>


                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required autofocus>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required autofocus>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
    </div>

    <!-- nav-tabs-custom -->


@else
    <!-- Profile Image -->
    <div class="box box-primary">
        <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="https://b-i.forbesimg.com/assets/images/avatars/generic_profile_image_400.jpg" alt="User profile picture">

            <h3 class="profile-username text-center">{{ $user = Auth::user()->name }}</h3>

            <p class="text-muted text-center">
                @if(($user = Auth::user()->email) == "email@email.mail")
                    Admin
                @else
                    Member
                @endif

            </p>

            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b>
                        @if(($user = Auth::user()->email) == "email@email.mail")
                            Admin:
                        @else
                            Registered Since
                        @endif
                    </b> <a class="pull-right">
                        @if(($user = Auth::user()->email) == "email@email.mail")
                            <a style="float:right" href="/posts">Control Panel</a>
                        @else
                            {{$user = date('M j Y', strtotime(Auth::user()->created_at))}}
                        @endif </a>
                </li>
                <li class="list-group-item">
                    <b>
                        @if(($user = Auth::user()->email) == "email@email.mail")
                            Views
                        @else
                            Comments
                        @endif
                    </b> <a class="pull-right">0</a>
                </li>
                <li class="list-group-item">
                    <b>
                        @if(($user = Auth::user()->email) == "email@email.mail")
                            Posts
                        @else
                            Posts viewed
                        @endif
                    </b> <a class="pull-right">
                        @if(($user = Auth::user()->email) == "email@email.mail")
                            12
                        @else
                            0
                        @endif
                    </a>
                </li>
            </ul>

            <a href="#" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
            <a href="{{ route('logout') }}" class="btn btn-primary btn-block"><b>Logout</b></a>

        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- About Me Box -->

    <!-- /.box -->
@endif



<!-- USERS LIST -->
<!--/.box -->

<!-- USERS LIST -->
<!--/.box -->

</section>

