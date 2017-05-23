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
 <SCRIPT language=Javascript>
<!--
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}
//-->
</SCRIPT>

<body style="background:url('<?php echo base_url();?>img/cat.jpg')">

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
				
            </div>
		</div>

<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="<?php echo base_url().'index.php/Pesan/pesanan'; ?>" method="post">
          <fieldset>
            <legend class="text-center">Ingin Memesan?</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control" required="required">
              </div>
            </div>
			<div class="form-group">
			<label class="col-md-3 control-label" for="name">Paket</label>
			 <div class="col-md-9">
            <select class="span4" id="paket" name="paket" required="required">
                    <option selected value="null">
                        Pilih Paket Anda:
                    </option>
					<?php foreach($data as $d){?>
                    <option value="<?php echo $d['Paket']; ?>">
                        <?php echo $d['Paket']; ?>
                    </option>
                    <?php } ?>
                </select>
			</div>
			</div>	
			<div class="form-group">
              <label class="col-md-3 control-label" for="jumlah">Jumlah</label>
              <div class="col-md-9">
                <input id="jumlah" name="jumlah" type="text" placeholder="Jumlah" class="form-control" onkeypress="return isNumberKey(event)" required="required">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="cp">Contact</label>
              <div class="col-md-9">
                <input id="cp" name="cp" type="text" placeholder="Your Phone" class="form-control" required="required" onkeypress="return isNumberKey(event)">
              </div>
            </div>
			
			<div class="form-group">
              <label class="col-md-3 control-label" for="alamat">Alamat</label>
              <div class="col-md-9">
                <textarea class="form-control" id="alamat" name="alamat" placeholder="Please enter your address here..." rows="5" required="required"></textarea>
              </div>
            </div>
            
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>

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
