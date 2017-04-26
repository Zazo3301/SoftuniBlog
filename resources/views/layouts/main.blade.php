  @include('layouts._header')

 <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Genres</h3>
      </div>
      <!-- /.box-header -->
<a class="btn btn-app">
        <i class="fa fa-music"></i> Hip Hop
      </a>
      <a class="btn btn-app">
        <i class="fa fa-music"></i> Hip Hop
      </a>
      <a class="btn btn-app">
        <i class="fa fa-music"></i> Hip Hop
      </a>
      <a class="btn btn-app">
        <i class="fa fa-music"></i> Hip Hop
      </a>
      <a class="btn btn-app">
        <i class="fa fa-music"></i> Hip Hop
      </a>
      <a class="btn btn-app">
        <i class="fa fa-music"></i> Hip Hop
      </a>
    </div>
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Latest Members</h3>

        <div class="box-tools pull-right">
          <span class="label label-danger">8 New Members</span>
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <ul class="users-list clearfix">
          <li>
            <img src="dist/img/user1-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="#">Alexander Pierce</a>
            <span class="users-list-date">Today</span>
          </li>
          <li>
            <img src="dist/img/user8-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="#">Norman</a>
            <span class="users-list-date">Yesterday</span>
          </li>
          <li>
            <img src="dist/img/user7-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="#">Jane</a>
            <span class="users-list-date">12 Jan</span>
          </li>
          <li>
            <img src="dist/img/user6-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="#">John</a>
            <span class="users-list-date">12 Jan</span>
          </li>
          <li>
            <img src="dist/img/user2-160x160.jpg" alt="User Image">
            <a class="users-list-name" href="#">Alexander</a>
            <span class="users-list-date">13 Jan</span>
          </li>
          <li>
            <img src="dist/img/user5-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="#">Sarah</a>
            <span class="users-list-date">14 Jan</span>
          </li>
          <li>
            <img src="dist/img/user4-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="#">Nora</a>
            <span class="users-list-date">15 Jan</span>
          </li>
          <li>
            <img src="dist/img/user3-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="#">Nadia</a>
            <span class="users-list-date">15 Jan</span>
          </li>
        </ul>
        <!-- /.users-list -->
      </div>
      <!-- /.box-body -->
      <div class="box-footer text-center">
        <a href="javascript:void(0)" class="uppercase">View All Users</a>
      </div>
      <!-- /.box-footer -->
    </div>
    <!--/.box -->

    <!-- /.col -->

    <!-- /.row -->
  </div>
  <!-- /.box -->
  <div class="col-md-6">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Latest Lyrics</h3>
      </div>

      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>Artist</th>
            <th>Song Name</th>
            <th>Stats</th>
            <th>Date</th>
          </tr>
          <tr>
            <td>183</td>
            <td>John Doe</td>
            <td>11-7-2014</td>
            <td><span class="label label-success">Approved</span></td>
          </tr>
          <tr>
            <td>219</td>
            <td>Alexander Pierce</td>
            <td>11-7-2014</td>
            <td><span class="label label-warning">Pending</span></td>
          </tr>
          <tr>
            <td>657</td>
            <td>Bob Doe</td>
            <td>11-7-2014</td>
            <td><span class="label label-primary">Approved</span></td>
          </tr>
          <tr>
            <td>175</td>
            <td>Mike Doe</td>
            <td>11-7-2014</td>
            <td><span class="label label-danger">Denied</span></td>
          </tr>
        </table>
      </div>
      <!-- /.box-body -->

    </div>

  </div>
  <div class="col-md-2">
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

        <h3 class="profile-username text-center">Admin</h3>

        <p class="text-muted text-center">Role: Admin</p>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
           <a href="#" class="btn btn-primary btn-block"><b>Upload New Lyric</b></a>
         </li>
         <li class="list-group-item">
           <a href="#" class="btn btn-success btn-block"><b>Profile</b></a>
         </li>

       </ul>

       <a href="#" class="btn btn-danger btn-block"><b>Logout</b></a>
     </div>
     <!-- /.box-body -->
   </div>
   <!-- /.box -->
   <!-- /.box -->
 </div>
 <div class="col-md-4">

 </div>
</section>
<!-- /.content -->
</div>
<!-- /.container -->
</div>
<!-- /.content-wrapper -->
@include('layouts._footer')