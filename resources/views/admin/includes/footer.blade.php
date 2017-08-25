<footer>
          <div class="pull-right">
           Copy &copy; Right By Imran <a href="https://imranweb-bd.com">Imranweb-bd.com</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    
    <script src="{{ asset('public/Admin/')}}/vendors/jquery/dist/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script>
    

    <!-- Bootstrap -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- FastClick -->
    <script src="{{ asset('public/Admin/')}}/vendors/fastclick/lib/fastclick.js"></script>
  
    <!-- NProgress -->
    <script src="{{ asset('public/Admin/')}}/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{ asset('public/Admin/')}}/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{ asset('public/Admin/')}}/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('public/Admin/')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{ asset('public/Admin/')}}/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{ asset('public/Admin/')}}/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{ asset('public/Admin/')}}/vendors/Flot/jquery.flot.js"></script>
    <script src="{{ asset('public/Admin/')}}/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('public/Admin/')}}/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{ asset('public/Admin/')}}/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{ asset('public/Admin/')}}/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('public/Admin/')}}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{ asset('public/Admin/')}}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{ asset('public/Admin/')}}/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{ asset('public/Admin/')}}/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{ asset('public/Admin/')}}/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{ asset('public/Admin/')}}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{ asset('public/Admin/')}}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('public/Admin/')}}/vendors/moment/min/moment.min.js"></script>
    <script src="{{ asset('public/Admin/')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Modal Scripts -->
    <!-- <script src="{{ asset('public/Admin/')}}/js/modal.js"></script> -->
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('public/Admin/')}}/build/js/custom.min.js"></script>
    <script>
   $(window).load(function(){
     $('.loader').fadeOut();
});
 </script>
  </body>
</html>
