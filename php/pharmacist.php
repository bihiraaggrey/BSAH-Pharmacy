<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BSAH Pharmacy | Pharmacist</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="admin.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>BSAH</b>Pharmacy</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a class="btn btn-primary"  style="margin-top: 10px;color: white;"> <i class="fa fa-calendar "></i>
                <?php
                $Today = date('y:m:d',mktime());
                $new = date('l, F d, Y', strtotime($Today));
                echo $new;
                ?>

        </a>
        <a class="btn btn-primary"  style="margin-top: 10px;color: white;"> <i class="fa fa-user "></i>
          Welcome: |  #UserRoleFromeDB

        </a>
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 2 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="../dist/img/user3.png" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        HelpDesk Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Connect with Us?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../dist/img/user3.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Philip Mugeni</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../dist/img/user1.png" class="img-circle" alt="User Image">

                <p>
                 Philip Mugeni
                  <small>Pharmacist</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat"><i class="fa fa-question-circle" style="color:blue;"></i>&nbsp;Help</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat" data-toggle="modal" data-target="#logout"><i class="fa fa-power-off" style="color:red;"></i>&nbsp;Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-question-circle"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user3.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Philip Mugeni</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PHARMACIST</li>
        <!-- Optionally, you can add icons to the links -->
          <li class="active"><a href="pharmacist.php"><i class="fa fa-dashboard"></i> <span>Pharmacist | Dashboard</span></a></li>
        <li ><a href="medicine.php"><i class="fa fa-medicine"></i> <span>Pharmacist | Add Medicine</span></a></li>

          <p style="color:white;">&copy;2019. All Rights Reserved!</p>
      </ul>
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       
        <center>
         <span><strong>Total Number of Medicine</strong></span><small><p class="btn btn-success" style="background:green;border-radius:30px;">05</p></small><br>
         <span><small><p class="btn btn-warning" style="background:red;border-radius:30px;">02</p></small><strong>Total Number of Medicine below 10</strong></span>
        </center>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
            <div class="box">
            <div class="box-header" style="background:#337ab7;color:white;">
              <h3 class="box-title">Medicines</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Generic</th>
                  <th>Quantity</th>
                  <th>Type</th>
                  <th>Manufacture Date</th>
                  <th>Expiry Date</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>yruire</td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>00-00-00</td>
                    <td>00-00-00</td>
                    <td><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></td>
                    <td><button class="btn btn-danger btn-xs"><i class="fa fa-times "></i></button></td>
                </tr>
                  
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        
    </section>
  </div>
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <strong>Transforming LiVes to electroNic</strong>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">BSAH Pharmacy</a>.</strong> All Rights reserved.
  </footer>
</div>

<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
<div class="modal fade" id="logout" style="margin-top:15%;">
          <div class="modal-dialog" style="width:25rem;">
            <div class="modal-content">
              <div class="modal-header" style="background:#fff; color:black;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:red;fontWeight:28px;">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Logout&nbsp;<i class="fa fa-question-circle" style="color:black;"></i> Yes to exit!!&hellip;</h4>
              </div>
             
              <div class="modal-footer" style="background:#3c8dbc;">
                <center><a href="../index.php" type="button" class="btn btn-success m-2">YES</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
                    </center>
                
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>