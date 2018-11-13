<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT. Samarinda Bara Sejahtera</title>
  <link href='img/sbs.jpg' rel='shortcut icon'>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('assets/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('assets/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{ asset ('sweetalert/sweetalert2.min.css')}}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
    page. However, you can choose any other skin. Make sure you
    apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="{{ asset ('assets/dist/css/skins/skin-blue.min.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css')}}">
    
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    
    <!-- Google Font -->
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        
        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SBS</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">PT.<b>SBS</b></span>
        </a>
        
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Muhammad Fuad Luthfi</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                    
                    <p>
                      Muhammad Fuad Luthfi - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      
      <aside class="main-sidebar">
        
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Muhammad Fuad Luthfi</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview {{ set_active(['worktime.index', 'karyawan.index', 'worktime.create', 'worktime.edit', 'karyawan.create'])}}">
              <a href="#"><i class="fa fa-share"></i> <span>HRD</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="{{ set_active(['karyawan.index', 'karyawan.create'])}}"><a href="{{ route('karyawan.index')}}"><i class="fa fa-circle-o"></i>Data Karyawan</a></li>
                <li class="{{ set_active(['worktime.index', 'worktime.create', 'worktime.edit'])}}" ><a href="{{ route('worktime.index')}}"><i class="fa fa-circle-o"></i>Worktime Operator</a></li>
                <li class="" ><a href="{{ route('worktime.index')}}"><i class="fa fa-circle-o"></i>Payroll Operator</a></li>
              </ul> 
            </li>
          </ul>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
      
      @yield('content')
      
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          PT. Samarinda Bara Sejahtera
        </div>
        <!-- Default to the left -->
        <span class="opacity-75">Copyright &copy; 2018 </span><strong>Muhammad Fuad Luthfi</a>.</strong>
      </footer>

      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Default Modal</h4>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      
      <!-- jQuery 3 -->
      <script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
      <!-- AdminLTE App -->
      <script src="{{ asset ('assets/dist/js/adminlte.min.js')}}"></script>
      <!-- DataTables -->
      <script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
      <script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
      <!-- SlimScroll -->
      <script src="{{ asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
      <!-- FastClick -->
      <script src="{{ asset('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
      <!-- bootstrap datepicker -->
      <script src="{{ asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
      <!-- SlimScroll -->
      <script src="{{ asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
      <!-- date-range-picker -->
      <script src="{{ asset('assets/bower_components/moment/min/moment.min.js')}}"></script>
      <script src="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
      <!-- Select2 -->
      <script src="{{ asset('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
      
      <script src="{{ asset ('js/app.js')}}"></script>
      <script src="{{ asset ('sweetalert/sweetalert2.min.js')}}"></script>
      <!-- page script -->
      <script>
        $(document).ready(function() {
          $('#table').DataTable();
        } );
        
        $(function () {
          $('.datatables').DataTable()
        })
        //Date picker
        $('#datepicker').datepicker({
          autoclose: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd',
        })
        $('#tgllhr').datepicker({
          autoclose: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd',
        })
        $('#tglmsk').datepicker({
          autoclose: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd',
        })
        $('#mulai').datepicker({
          autoclose: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd',
        })
        $('#resign').datepicker({
          autoclose: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd',
        })
        $('#berakhir').datepicker({
          autoclose: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd',
        })
        $('#tgl').datepicker({
          autoclose: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd',
        })
      
      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
      )
    </script>
    
    <script type="text/javascript">
      $('.cari').select2({
        placeholder: 'Nama',
        ajax: {
          url: '/worktime/loadData',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results:  $.map(data, function (item) {
                return {
                  text: item.nama,
                  id: item.id
                }
              })
            };
          },
          cache: true
        }
      });
      
    </script>
    
    
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. -->
    </body>
    </html>