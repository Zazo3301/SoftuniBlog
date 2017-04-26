  @include('layouts._header')
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->
      <!-- Main content -->
      <section class="content">
        <!-- Start Main section ( 9 in 12 - another 3 for sidebar) -->
        <div class="col-md-9">
          @yield('content')
        </div>      
        <!--  end of  posts -->
        <div class="col-md-3">
         @include('layouts.sidebar');
       </div>
     </section>
     <!-- /.content -->
   </div>
   <!-- /.container -->
 </div>
 <!-- /.content-wrapper -->
 @include('layouts._footer')