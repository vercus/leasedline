   <?php
  session_start();
  if(empty($_SESSION)){
     header("Location: pages/examples/login.php");
  }
  ?>
 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>GSA</p>
<!-- 
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
<!--                 <li ><a href="index.php"><i class="fa fa-circle-o"></i> Dashboard v1</a></li> -->
                <li><a href="index3.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>GSA KPPTI</span>
                <span class="label label-primary pull-right">11</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/custom/gsa_enginer_support.php"><i class="fa fa-circle-o"></i>SLA Engineer Support</a></li>
                <li><a href="pages/custom/gsa_enginer_onsite.php"><i class="fa fa-circle-o"></i>SLA Engineer On Site (EOS)</a></li>
                <li><a href="pages/custom/gsa_surveilance.php"><i class="fa fa-circle-o"></i>SLA Surveillance</a></li>
                <li><a href="pages/custom/gsa_corporate.php"><i class="fa fa-circle-o"></i>SLA Corporate Support (CS)</a></li>
                     <li><a href="pages/custom/gsa_chronic.php"><i class="fa fa-circle-o"></i>SLA Chronic</a></li>
                 <li><a href="pages/custom/gsa_converengence.php"><i class="fa fa-circle-o"></i>SLA Convergence Services</a></li>
                 <li><a href="pages/custom/gsa_inbound.php"><i class="fa fa-circle-o"></i>SLA Agent Inbound</a></li>
                 <li><a href="pages/custom/gsa_outbond.php"><i class="fa fa-circle-o"></i>SLA Agent Outbond</a></li>
                 <li><a href="pages/custom/gsa_platinum.php"><i class="fa fa-circle-o"></i>SLA Outbond Platinum/Silver - CMAO</a></li>
                  <li><a href="pages/custom/gsa_helpdesk.php"><i class="fa fa-circle-o"></i>SLA Helpdesk Supervisor</a></li>
                    <li><a href="pages/custom/rekap_gsa.php"><i class="fa fa-circle-o"></i>Rekap GSA</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Data Karyawan</span>
                <span class="label label-primary pull-right">1</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/custom/dakar2.php"><i class="fa fa-circle-o"></i>Dakar</a></li>
              </ul>
            </li>
              <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Sign Out</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="logout.php"><i class="fa fa-circle-o"></i>Logout</a></li>
              </ul>
            </li>
        <!-- /.sidebar -->
      </aside>