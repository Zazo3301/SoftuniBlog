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
              <img class="profile-user-img img-responsive img-circle"
				   @if(($user = Auth::user()->email) == "email@email.mail")
                   src="http://i1126.photobucket.com/albums/l611/sneakerACE/PlanetMinecraft%20Skin%20Previews/DoozyPranksskinpreview.png"
				   @else
				   src="https://b-i.forbesimg.com/assets/images/avatars/generic_profile_image_400.jpg"
				   @endif alt="User profile picture">

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
							//imp here
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
          {{--<div class="box box-primary">--}}
            {{--<div class="box-header with-border">--}}
              {{--<h3 class="box-title">About Me</h3>--}}
            {{--</div>--}}
            <!-- /.box-header -->
          
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
                        @endif
 


 <!-- USERS LIST -->
 <!--/.box -->

 {{--<!-- USERS LIST -->--}}
 {{--<div class="box box-danger">--}}
 	{{--<div class="box-header with-border">--}}
 		{{--<h4 class="box-title">Categories</h4>--}}


 	{{--</div>--}}
 	{{--<!-- /.box-header -->--}}
 	{{--<div class="box-body no-padding">--}}

 		{{--<!-- /.users-list -->--}}
 	{{--</div>--}}
 	{{--<!-- /.box-body -->--}}

 	{{--<!-- /.box-footer -->--}}
 {{--</div>--}}
 {{--<!--/.box -->--}}

