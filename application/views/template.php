<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.css">
    <style>
        .swal2-popup {
            font-size: 1.6rem !important
        }
    </style>
</head>

<body class="hold-transition skin-green sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="<?= site_url('dashboard') ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>b</b>P</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>becuko</b>POS</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <h3> Design some buttons
                                                    <small class="pull-right">20% </small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width:20%" role="progressbar">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all task</a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- USER ACCOUNT -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="user-image">
                                <span class="hidden-xs"><?= $this->fungsi->user_login()->username ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="image-circle">
                                    <p><?= $this->fungsi->user_login()->name ?>
                                        <small><?= $this->fungsi->user_login()->address ?></small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="<?= site_url('verif/logout') ?>" class="btn btn-flat bg-red">Sign Out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column -->
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle">
                    </div>
                    <div class="pull-left info">
                        <p><?= ucfirst($this->fungsi->user_login()->username) ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- sidebar menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">NAVIGASI MENU</li>
                    <li>
                        <a href="<?= site_url('dashboard') ?>"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                    </li>
                    <li class="treeview <?= $this->uri->segment(1) == 'stock' || $this->uri->segment(1) == 'sale' ? 'active' : '' ?>">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i><span>Transaction</span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?= $this->uri->segment(1) == 'sale' ? 'class="active"' : '' ?>>
                                <a href="<?= site_url('sale') ?>"><i class="fa fa-circle-o"></i> Sales </a>
                            </li>
                            <li <?= $this->uri->segment(1) == 'stock' && $this->uri->segment(2) == 'in' ? 'class="active"' : '' ?>>
                                <a href="<?= site_url('stock/in') ?>"><i class="fa fa-circle-o"></i> Stock In </a>
                            </li>
                            <!-- <li><a href="#"><i class="fa fa-circle-o"></i> Stock Out </a></li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="<?= site_url('supplier') ?>"><i class="fa fa-truck"></i> <span>Supplier</span></a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-archive"></i><span>Product</span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?= site_url('category') ?>"><i class="fa fa-circle-o"></i> Categories </a></li>
                            <li><a href="<?= site_url('unit') ?>"><i class="fa fa-circle-o"></i> Unit </a></li>
                            <li><a href="<?= site_url('item') ?>"><i class="fa fa-circle-o"></i> Items </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= site_url('customer') ?>"><i class="fa fa-users"></i> <span>Customer</span></a>
                    </li>
                    <li>
                        <a href="<?= site_url('report/sale') ?>"><i class="fa fa-pie-chart"></i> <span>Reports</span></a>
                    </li>
                    <!-- <li class="treeview">
                        <a href="#">
                            <i class="fa fa-pie-chart"></i><span>Reports</span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?= site_url('report/sale') ?>"><i class="fa fa-circle-o"></i> Penjualan </a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Stok </a></li>
                        </ul>
                    </li> -->
                    <?php if ($this->fungsi->user_login()->level == 1) { ?>
                        <li class="header">Settings</li>
                        <li><a href="<?= site_url('user') ?>"><i class="fa fa-user"></i><span>Users</span></a></li>
                    <?php } ?>
                </ul>
            </section>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <?php echo $contents ?>
        </div>


        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2023 <a href="https://adminlte.io">Kelompok 4 Pemrograman Web</a>.</strong> All rights reserved.
        </footer>
    </div>

    <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>

    <script src="<?= base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
        var flash = $('#flash').data('flash');
        if (flash) {
            Swal.fire({
                icon: "success",
                title: "Success",
                text: flash
            });
        }
    </script>

    


    <script>
        $(document).ready(function() {
            $('#table1').DataTable()
        })
    </script>



</body>

</html>