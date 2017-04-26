  @if (Auth::guest())
                           <div class="nav-tabs-custom">
 	<ul class="nav nav-tabs">
 		<li class="active"><a href="#login" data-toggle="tab">Login</a></li>
 		<li><a href="#reset" data-toggle="tab"> Reset</a></li>

 	</ul>
 	<div class="tab-content">
 		<div class="tab-pane active" id="login">
 			<div class="login-box-body">
 				<p class="login-box-msg">Sign in</p>

 				<form  method="POST"  role="form">
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
 					<div class="col-md-12 col-md-offset-1">
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

 				<a class="btn btn-link" ">
 					Forgot Your Password?
 				</a><br>
 				<a class="btn btn-link">
 					Register
 				</a>
 			</div>


 		</div>
 		<!-- /.tab-pane -->

 		
 		<!-- /.tab-pane -->
 		<div class="tab-pane" id="reset">

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
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
 <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
          
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
                        @endif
 


 <!-- USERS LIST -->
 <div class="box box-danger">
 	<div class="box-header with-border">
 		<h3 class="box-title">Random Authors</h3>

 		<div class="box-tools pull-right">

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

 <!-- USERS LIST -->
 <div class="box box-danger">
 	<div class="box-header with-border">
 		<h4 class="box-title">Categories</h4>


 	</div>
 	<!-- /.box-header -->
 	<div class="box-body no-padding">

 		<!-- /.users-list -->
 	</div>
 	<!-- /.box-body -->

 	<!-- /.box-footer -->
 </div>
 <!--/.box -->

 <div class="box box-primary">
 	<div class="box-header with-border">
 		<h3 class="box-title">Recently Added Products</h3>

 		<div class="box-tools pull-right">
 			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
 			</button>
 			<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
 		</div>
 	</div>
 	<!-- /.box-header -->
 	<div class="box-body">
 		<ul class="products-list product-list-in-box">
 			<li class="item">
 				<div class="product-img">
 					<img src="dist/img/default-50x50.gif" alt="Product Image">
 				</div>
 				<div class="product-info">
 					<a href="javascript:void(0)" class="product-title">Samsung TV
 						<span class="label label-warning pull-right">$1800</span></a>
 						<span class="product-description">
 							Samsung 32" 1080p 60Hz LED Smart HDTV.
 						</span>
 					</div>
 				</li>
 				<!-- /.item -->
 				<li class="item">
 					<div class="product-img">
 						<img src="dist/img/default-50x50.gif" alt="Product Image">
 					</div>
 					<div class="product-info">
 						<a href="javascript:void(0)" class="product-title">Bicycle
 							<span class="label label-info pull-right">$700</span></a>
 							<span class="product-description">
 								26" Mongoose Dolomite Men's 7-speed, Navy Blue.
 							</span>
 						</div>
 					</li>
 					<!-- /.item -->
 					<li class="item">
 						<div class="product-img">
 							<img src="dist/img/default-50x50.gif" alt="Product Image">
 						</div>
 						<div class="product-info">
 							<a href="javascript:void(0)" class="product-title">Xbox One <span class="label label-danger pull-right">$350</span></a>
 							<span class="product-description">
 								Xbox One Console Bundle with Halo Master Chief Collection.
 							</span>
 						</div>
 					</li>
 					<!-- /.item -->
 					<li class="item">
 						<div class="product-img">
 							<img src="dist/img/default-50x50.gif" alt="Product Image">
 						</div>
 						<div class="product-info">
 							<a href="javascript:void(0)" class="product-title">PlayStation 4
 								<span class="label label-success pull-right">$399</span></a>
 								<span class="product-description">
 									PlayStation 4 500GB Console (PS4)
 								</span>
 							</div>
 						</li>
 						<!-- /.item -->
 					</ul>
 				</div>
 				<!-- /.box-body -->
 			</div>
 			<!-- /.col -->



