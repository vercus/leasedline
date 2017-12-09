<?php
  include_once 'sideb.php';
?>
<?php
$hostdb = "localhost";  // MySQl host
$userdb = "root";  // MySQL username
$passdb = "";  // MySQL password
$namedb = "sla";  // MySQL database name

// Establish a connection to the database
$mysqli = new mysqli($hostdb, $userdb, $passdb, $namedb);

  /* Getting demo_viewer table data */
  $sql = "SELECT average as total FROM rekap WHERE id_divisi = '1' AND tahun = 2017
      GROUP BY bulan ORDER BY bulan";
  $viewer = mysqli_query($mysqli,$sql);
  $viewer = mysqli_fetch_all($viewer,MYSQLI_ASSOC);
  $viewer = json_encode(array_column($viewer, 'total'),JSON_NUMERIC_CHECK);

  /* Getting demo_click table data */
  $sql = "SELECT average as total FROM rekap WHERE id_divisi = '2' AND tahun = 2017
      GROUP BY bulan ORDER BY bulan";
  $click = mysqli_query($mysqli,$sql);
  $click = mysqli_fetch_all($click,MYSQLI_ASSOC);
  $click = json_encode(array_column($click, 'count'),JSON_NUMERIC_CHECK);

  /* Getting demo_click table data */
  $sql = "SELECT average as total FROM rekap WHERE id_divisi = '3' AND tahun = 2017
      GROUP BY bulan ORDER BY bulan";
  $dodol = mysqli_query($mysqli,$sql);
  $dodol = mysqli_fetch_all($dodol,MYSQLI_ASSOC);
  $dodol = json_encode(array_column($dodol, 'dodol'),JSON_NUMERIC_CHECK);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SLA</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo"><b>System </b>SLA</a>
         <nav class="navbar navbar-static-top" role="navigation">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <!-- Tasks: style can be found in dropdown.less -->
                  <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    </a>
                    <ul class="dropdown-menu">
                        <!-- inner menu: contains the actual data -->
                    </ul>
                  </li>
                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
                    </a>
                      <!-- User image -->
                      <!-- Menu Footer-->
                      <!-- <li class="user-footer">
                        <div class="pull-left">
                          <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div> -->
                        <div class="pull-right">
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>
          </header>
      <!-- Left side column. contains the logo and sidebar -->

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
            <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>
                   <?php
 include 'includes/koneksi.php';
  $sql = "SELECT COUNT(nama_karyawan) as nama_karyawan FROM `dakar` WHERE hrbp = 'HD' AND status_pegawai ='Kontrak'";
       if (!$result = mysqli_query($koneksi, $sql)) {
         die('Error: '.mysqli_error($koneksi));
       } else{
         if (mysqli_num_rows($result) > 0) {
           while($row = mysqli_fetch_assoc($result)) {
            ?>
                      <?php echo $row['nama_karyawan']; ?>
                        <?php } 
 }
   }?></h3>
                  </h3>
                  <p>Employee (HD)</p>
                </div>
                <div class="icon">
                 <i class="ion ion-stats-bars"></i>
                </div>
                <a href="pages/custom/gsa-dakar_hd.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>
                  <?php
 include 'includes/koneksi.php';
  $sql = "SELECT COUNT(nama_karyawan) as nama_karyawan FROM `dakar` WHERE hrbp = 'FE' AND status_pegawai ='Kontrak'";
       if (!$result = mysqli_query($koneksi, $sql)) {
         die('Error: '.mysqli_error($koneksi));
       } else{
         if (mysqli_num_rows($result) > 0) {
           while($row = mysqli_fetch_assoc($result)) {
            ?>
                      <?php echo $row['nama_karyawan']; ?>
                        <?php } 
 }
   }?></h3>
                  <p>Employee (FE)</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="pages/custom/gsa-dakar_fe.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3> <?php
 include 'includes/koneksi.php';
  $sql = "SELECT COUNT(fullname) as fullname from pengguna";
       if (!$result = mysqli_query($koneksi, $sql)) {
         die('Error: '.mysqli_error($koneksi));
       } else{
         if (mysqli_num_rows($result) > 0) {
           while($row = mysqli_fetch_assoc($result)) {
            ?>
                      <?php echo $row['fullname']; ?>
                        <?php } 
 }
   }?>
   </h3>
                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>
                  <?php
 include 'includes/koneksi.php';
  $sql = "SELECT COUNT(nama_karyawan) as nama_karyawan FROM `dakar` WHERE hrbp = 'TS' AND status_pegawai ='Kontrak'";
       if (!$result = mysqli_query($koneksi, $sql)) {
         die('Error: '.mysqli_error($koneksi));
       } else{
         if (mysqli_num_rows($result) > 0) {
           while($row = mysqli_fetch_assoc($result)) {
            ?>
                      <?php echo $row['nama_karyawan']; ?>
                        <?php } 
 }
   }?></h3>
                  <p>Employee (TS)</p>
                </div>
                <div class="icon">
                 <i class="ion ion-stats-bars"></i>
                </div>
                <a href="pages/custom/gsa-dakar_ts.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Total Monthly In Average (%)</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>

 <div class="box-footer no-padding">
    <div style="margin-top:20px">
  <div class="col-md-20">
    <div class="panel panel-primary">
      <div class="panel-heading">Grafik Monthly</div>
      <div class="panel-body">
        <div id ="container"></div>
      </div>
    </div>
  </div>
</div>
 <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                    <div class="chart-responsive">
                        <!-- Sales Chart Canvas -->

                      <p class="text-center">
                        <strong>Goal Completion</strong>
                      </p>
                      <div class="progress-group">
                        <span class="progress-text">TS Wisma Antara</span>
                        <span class="progress-number"><b>160</b>/200</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
                        </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">FE Wisma Antara</span>
                        <span class="progress-number"><b>310</b>/400</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-red" style="width: 100%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">GSA KPPTI</span>
                        <span class="progress-number"><b>400</b>/800</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-green" style="width: 50%"></div>
                        </div>
                      </div><!-- /.progress-group -->

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script type="text/javascript">


    var data_click = <?php echo $click; ?>;
    var data_viewer = <?php echo $viewer; ?>;
        var data_dodol = <?php echo $dodol; ?>;

Highcharts.chart('container', {
    chart: {
            type: 'area'
        },
        title: {
            text: 'GRAFIK TOTAL REKAP AVERAGE (<?php echo date("Y")?>)'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Rate'
            }
        },
        series: [{
            name: 'National - FE',
            data: data_click
        }, {
            name: 'JBRO - TS',
            data: data_viewer
         }, {
            name: 'JBRO GSA - Helpdesk & Engineer',
            data: data_dodol
        }]
    });
</script>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b></b>
        </div>
        <strong>Copyright &copy; 2017<a href="#">System</a>.</strong>SLA
      </footer>

    </div><!-- ./wrapper -->
    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

    <!-- AdminLTE for demo purposes -->
  </body>
</html>