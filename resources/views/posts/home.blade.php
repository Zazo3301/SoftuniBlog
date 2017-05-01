@extends('posts.master')
@section('content')
  <style>
    .zazinga {
      background-color: #3c8dbc;
      border-color: #367fa9;
      margin-top: 21px;
    }
    </style>
@foreach($posts->reverse() as $post )
    <div style="display:block !important;" class="col-md-12">
      <div class="box-body">
        <div class="box box-widget">
          <div class="box-header with-border">
            <div style="margin-top: 13px;
    margin-left: 20px;
    padding-bottom: 20px;" class="user-block">
              <img style="width:50px; height:50px;" class="img-circle " src="../dist/img/user1-128x128.jpg" alt="User Image">
              <span class="username"><a href="#"></a></span>
              <span style="color: #999;
    font-size: 13px;
    padding-left: 24px;
    padding-top: 5px;" class="description">{{ $post->author }}{{date('M j, Y', strtotime($post->created_at )) }}</span>
            </div>
              <p style="    margin-left: 23px;
    margin-top: 10px;
    font-size: 31px;">{{ $post->title }}</p>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <img class="img-responsive pad pull-left" style="width: 344px;" src="{{ asset('images/'. $post->image) }}" alt="Photo">
            <p>{{ substr($post->body, 0, 489) }} {{ strlen($post->body) > 489 ? "..." : "" }} <a href="#">more</a></p>
          </div>
          <div class="box-footer">
            <button type="button" class="btn btn-default btn-xs"></i>#JAVA</button>
            <button type="button" class="btn btn-default btn-xs"></i>#Programming</button><button type="button" class="btn btn-default btn-xs"></i>#JAVA</button>
            <button type="button" class="btn btn-default btn-xs"></i>#Programming</button><button type="button" class="btn btn-default btn-xs"></i>#JAVA</button>
            <button type="button" class="btn btn-default btn-xs"></i>#Programming</button>
            <span style="
    margin-top: 21px;">{{ Html::linkRoute('posts.show', 'View Post', array($post->id), array('class' => 'btn btn-primary btn-block zazinga'))}}</span>
          </div>
          <!-- /.box-footer -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    <!-- /.col -->

@endforeach











<!--  end of  posts -->
@stop