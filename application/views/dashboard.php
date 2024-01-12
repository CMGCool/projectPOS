<section class="content-header">
    <h1>
        Dashboard
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?= $this->fungsi->count_item() ?></h3>

                        <p>Items</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?= $this->fungsi->count_supplier() ?></h3>

                        <p>Supplier</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-truck"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?= $this->fungsi->count_customer() ?></h3>

                        <p>Customers</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?= $this->fungsi->count_user() ?></h3>
                        <p>Users</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="box box-solid">
            <div class="box-header">
                <i class="fa fa-th"></i>
                <h3 class="box-title">Produk Terlaris</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-sm" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div id="sales-bar" class="graph"></div>
            </div>
        </div>

    </section>

    <!-- Morris.js charts -->
    <link rel="stylesheet" href="<?=base_url()?>/assets/bower_components/morris.js/morris.css">
    <script src="<?=base_url()?>/assets/bower_components/raphael/raphael.min.js"></script>
    <script src="<?=base_url()?>/assets/bower_components/morris.js/morris.min.js"></script>

    <script>
        //BAR CHART
    Morris.Bar({
      element: 'sales-bar',
      resize: true,
      data: [
       <?php foreach ($row as $key => $data){
        echo "{ item: '".$data->name."', sold: ".$data->sold."},";
       } ?>
      ],
      barColors: ['#00a65a', '#f56954'],
      xkey: 'item',
      ykeys: ['sold'],
      labels: ['Sold'],
      hideHover: 'auto'
    })
    </script>

   