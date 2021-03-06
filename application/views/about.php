<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tutut Catering</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.?php echo base_url();?>assets/js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body style="background:url('<?php echo base_url();?>img/cat.jpg'); background-attachment:fixed">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url();?>index.php/about">About</a>
                    </li>
					<li>
                        <a href="<?php echo base_url();?>index.php/pesan">Pesan</a>
                    </li>
					
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Tutut Catering</p>
				
				<div>
						
                        <div class="thumbnail">
						<img src="<?php echo base_url();?>img/profil.jpeg" alt="">
                            <div class="caption">
                                <h4>WA: 08813845603</h4>
                                <p>Alamat: Jalan Gianti 2 RT. 07 RW. 01 Kec. Cepu Kab. Blora Jawa Tengah.</p>
                            </div>
                            
                        </div>
						
                </div>
            </div>
			
			<div class="col-md-9">
				
			<div class="container">
			<div class="row">
			<div class="col-md-8">
            <div class="well well-sm">
			<label for="rev">
                                Masukkan Review anda...
			</label>
                <form action="<?php echo base_url().'index.php/About/upload'; ?>" method="post" enctype="multipart/form-data">
                <div class="row">
				
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" required="required" />
                        </div>
                        
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" name="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
			</div>
        
			</div>
			</div>
			
						<h3 class="well well-sm">
                               Apa Kata Mereka????
						</h3>
                       
					   <?php foreach($data as $d){?>
						<div class="col-sm-4 col-lg-4 col-md-4">
						
                        <div class="thumbnail">
						
                            <div class="caption">
                              
                                <h4><?php echo $d['Nama']; ?></h4>
                                <p><?php echo $d['Com']; ?></p>
                            </div>
                            
                        </div>
						
                    </div>
				<?php } ?>
           
			
			
            

         </div>

                

        </div>

    
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	
	
</body>

</html>
