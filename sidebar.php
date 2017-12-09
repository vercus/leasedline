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
              <p>Admin</p>
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
                <li><a href="index2.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>TS Wisma Antara</span>
                <span class="label label-primary pull-right">11</span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="pages/custom/sc_gr.php"><i class="fa fa-circle-o"></i>SC GR</a></li>
                <li><a href="pages/custom/sm_leasedline.php"><i class="fa fa-circle-o"></i>Lease Line</a></li>
                <li><a href="pages/custom/rentalsite.php"><i class="fa fa-circle-o"></i>Rental Site</a></li>
                <li><a href="pages/custom/sitac.php"><i class="fa fa-circle-o"></i>Sitac</a></li>
                 <li><a href="pages/custom/revenue_share.php"><i class="fa fa-circle-o"></i>Revenue Share</a></li>
                <li><a href="pages/custom/invet.php"><i class="fa fa-circle-o"></i>Inventory</a></li>
                <li><a href="pages/custom/sc_sd.php"><i class="fa fa-circle-o"></i>Service Delivery</a></li>
                 <li><a href="pages/custom/program_management.php"><i class="fa fa-circle-o"></i>Program Management</a></li>
                 <li><a href="pages/custom/pre_sales.php"><i class="fa fa-circle-o"></i>Pre Sales</a></li>
                 <li><a href="pages/custom/business_cust.php"><i class="fa fa-circle-o"></i>Business Customer Experience</a></li>
                 <li><a href="pages/custom/service_management.php"><i class="fa fa-circle-o"></i>Service management</a></li>
                 <li><a href="pages/custom/rekap_ts.php"><i class="fa fa-circle-o"></i>Rekap Data TS</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>FE Wisma Antara</span>
                <span class="label label-primary pull-right">6</span>
              </a>
              <ul class="treeview-menu">
               <li><a href="pages/custom/enginer_sd.php"><i class="fa fa-circle-o"></i>Engineer - Service Delivery</a></li>
                <li><a href="pages/custom/enginer_sqm.php"><i class="fa fa-circle-o"></i>Engineer - Service Quality Management</a></li>
                <li><a href="pages/custom/enginer_warehouse.php"><i class="fa fa-circle-o"></i>Engineer - Warehouse & Inventory</a></li>
                <li><a href="pages/custom/enginer_lan.php"><i class="fa fa-circle-o"></i>Engineer - Local Network</a></li>
                 <li><a href="pages/custom/enginer_regional.php"><i class="fa fa-circle-o"></i>Engineer - Regional</a></li>
                     <li><a href="pages/custom/rekap_fe.php"><i class="fa fa-circle-o"></i>Rekap Data FE</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>GSA Help Desk Enginer</span>
                <span class="label label-primary pull-right">11</span>
              </a>
              <ul class="treeview-menu">
             <li><a href="pages/custom/ts_enginer_support.php"><i class="fa fa-circle-o"></i>SLA Engineer Support</a></li>
                <li><a href="pages/custom/ts_enginer_onsite.php"><i class="fa fa-circle-o"></i>SLA Engineer On Site (EOS)</a></li>
                <li><a href="pages/custom/ts_surveilance.php"><i class="fa fa-circle-o"></i>SLA Surveillance</a></li>
                <li><a href="pages/custom/ts_corporate.php"><i class="fa fa-circle-o"></i>SLA Corporate Support (CS)</a></li>
                 <li><a href="pages/custom/ts_chronic.php"><i class="fa fa-circle-o"></i>SLA Chronic</a></li>
                 <li><a href="pages/custom/ts_convergence.php"><i class="fa fa-circle-o"></i>SLA Convergence Services</a></li>
                 <li><a href="pages/custom/ts_agent_inbound.php"><i class="fa fa-circle-o"></i>SLA Agent Inbound</a></li>
                 <li><a href="pages/custom/ts_agent_outbond.php"><i class="fa fa-circle-o"></i>SLA Agent Outbond</a></li>
                 <li><a href="pages/custom/ts_platinum.php"><i class="fa fa-circle-o"></i>SLA Outbond Platinum/Silver - CMAO</a></li>
                  <li><a href="pages/custom/ts_heldesk.php"><i class="fa fa-circle-o"></i>SLA Helpdesk Supervisor</a></li>
                   <li><a href="pages/custom/gsa_nilai.php"><i class="fa fa-circle-o"></i>Rekap Data GSA</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Data Karyawan</span>
                <span class="label label-primary pull-right">1</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/custom/dakar.php"><i class="fa fa-circle-o"></i>Dakar</a></li>
              </ul>
            </li>
             </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Penilaian</span>
                <span class="label label-primary pull-right">1</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/custom/penilaian.php"><i class="fa fa-circle-o"></i>Rekap</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Register</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/examples/register.php"><i class="fa fa-circle-o"></i> Register</a></li>
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