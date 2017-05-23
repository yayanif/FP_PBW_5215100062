<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url();?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar static-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Selamat datang.....</a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="sidebar-nav navbar-nav">
               
				<li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url();?>index.php/order"> Order</a>
                </li>
				<li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url();?>index.php/review"> Review</a>
                </li>
				<li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url();?>index.php/Menu"> Menu</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto"> 
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url().'index.php/Review/logout'; ?>"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">My Dashboard</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-primary o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">
                                Order
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>index.php/Order" class="card-footer clearfix small z-1">
                            <span class="float-left">View Details</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-success o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">
								Review
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>index.php/review" class="card-footer clearfix small z-1">
                            <span class="float-left">View Details</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-warning o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5">
                                Menu
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>index.php/menu" class="card-footer clearfix small z-1">
                            <span class="float-left">View Details</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
               
            </div>

            <!-- Area Chart Example -->
            


            <!-- Example Tables Card -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Data Menu
					<a href="<?php echo base_url()."index.php/imenu"?>" class="pull-right"><button>Tambah Menu</button></a>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Paket</th>
                                    <th>Isi</th>
                                    <th>Harga</th>
									<th>Gambar</th>
									
									<th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php foreach($data as $d){?>
                                <tr>
                                    <td><?php echo $d['Paket'];?></td>
                                    <td><?php echo $d['isi'];?></td>
									<td><?php echo $d['Harga'];?></td>
                                    <td><img src="<?php echo base_url();?>img/<?php echo $d['g'];?>" style="width:30%;height:30%;"></td>
									
									<td><a href="<?php echo base_url()."index.php/menu/do_delete/".$d['Paket']; ?>"><button>Delete</button></a></td>
                                </tr>
								<?php } ?>
                            </tbody>
                        </table>
						
                    </div>
                </div>
                
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
	<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/tether/tether.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>assets/js/sb-admin.min.js"></script>

</body>

</html>
