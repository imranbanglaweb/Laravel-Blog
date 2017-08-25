@include('admin.includes.topheader')
  

    <!-- sidebar menu -->
@include('admin.includes.sidebar')
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    @include('admin.includes.menufooter')
    <!-- /menu footer buttons -->
  </div>
</div>

<!-- top navigation -->
 @include('admin.includes.topnav')
<!-- /top navigation -->

<!-- page content -->
@yield('mainContent')

<!-- /page content -->

<!-- footer content -->
@include('admin.includes.footer')