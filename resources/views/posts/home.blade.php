@extends('posts.master')
@section('content')


@foreach($posts as $post)

    <div style="display:block !important;" class="col-md-12">
      <div class="box-body">
        <div class="box box-widget">
          <div class="box-header with-border">
            <div class="user-block">
              <img style="width:50px; height:50px;" class="img-circle " src="../dist/img/user1-128x128.jpg" alt="User Image">
              <span class="username"><a href="#"></a></span>
              <span class="description">{{ $post->author }}{{date('M j, Y', strtotime($post->created_at )) }}</span>
            </div>
                <!--{{ $post->title }}-->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <img style="width: 330px;" class="img-responsive pad pull-left" src="../dist/img/photo2.png" alt="Photo">
            <p>{{ substr($post->body, 0, 60) }} {{ strlen($post->body) > 60 ? "..." : "" }} <a href="#">more</a></p>
          </div>
          <div class="box-footer">
            <button type="button" class="btn btn-default btn-xs"></i>#JAVA</button>
            <button type="button" class="btn btn-default btn-xs"></i>#Programming</button><button type="button" class="btn btn-default btn-xs"></i>#JAVA</button>
            <button type="button" class="btn btn-default btn-xs"></i>#Programming</button><button type="button" class="btn btn-default btn-xs"></i>#JAVA</button>
            <button type="button" class="btn btn-default btn-xs"></i>#Programming</button>
            <span class="pull-right text-muted">127 likes - 3 comments</span>
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