
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin </title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/admin/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../assets/admin/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../assets/admin/ckeditor/ckeditor.js"></script>      
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Admin</a>
            
             </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Hoang Minh Chien</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Hoang Minh Chien</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Nguyen Van A</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Nguyen Van B</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Nguyen Van C</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Nguyen Van D</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Nguyen Van E</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Nguyen Van F</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Hoàng Minh Chiến <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href=""><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="index.php?controller=login&action=logout">
                              <i class="fa fa-fw fa-power-off"></i> <span>Log Out</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href=""><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="index.php?controller=categories">
                            <i class="fa fa-fw fa-bar-chart-o"></i>Danh mục sản phẩm</a>
                    </li>
                    <li>
                        <a href="index.php?controller=products">
                            <i class="fa fa-fw fa-table"></i> Danh sách sản phẩm</a>
                    </li>
                    <li>
                        <a href="index.php?controller=news">
                            <i class="fa fa-fw fa-edit"></i> Tin tức</a>
                    </li>
                    <li>
                        <a href="index.php?controller=orders">
                            <i class="fa fa-fw fa-desktop"></i> Đơn hàng</a>
                    </li>
                    <li>
                        <a href="index.php?controller=users">
                            <i class="fa fa-fw fa-wrench"></i> Quản lý tài khoản </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?controller=login&action=logout">
                            <i class="fa fa-fw fa-file"></i> Đăng xuất</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
<!-- page -->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                
                <section class="content">
            <?php View::renderBody(); ?>

        </section>

         

        </div>
        <!-- /#page-wrapper -->

    </div>
    <footer class="main-footer" style="background-color:rgb(50, 141, 168);padding-top:30px;">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.13-pre
        </div>
        <strong>Copyright &copy; 2014-2019 .</strong> All rights
        reserved.
    </footer>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../assets/admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/admin/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../assets/admin/js/plugins/morris/raphael.min.js"></script>
    <script src="../assets/admin/js/plugins/morris/morris.min.js"></script>
    <script src="../assets/admin/js/plugins/morris/morris-data.js"></script>

</body>

</html>
