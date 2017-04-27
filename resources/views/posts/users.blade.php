@extends('posts.master')


@section('content') 
<!--  start of  users component -->

 
 <div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#top" data-toggle="tab">Top Authors</a></li>
    <li><a href="#latest" data-toggle="tab">Latest Authors</a></li>
    <li><a href="#random" data-toggle="tab">Random Authors</a></li>

  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="top">
      


    </div>
    <!-- /.tab-pane -->
    <div class="tab-pane" id="latest">
     
     
    </div>
    <!-- /.tab-pane -->
    <div class="tab-pane" id="random">

    <div class="col-md-9">
    <hr>
    <h4>Search Authors</h4>
<hr>
  <div class="input-group input-group-sm">
                <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Go!</button>
                    </span>
  </div>
  
  </div>
    </div>
    <!-- /.tab-pane -->
  </div>
  <!-- /.tab-content -->
 </div>
 <!-- nav-tabs-custom -->     

<!-- USERS LIST -->
 










<!--  end of  users -->
@stop