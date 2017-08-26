<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Online</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('/assets/css/modern-business.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('/assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation Top_Menu -->
    <?php $this->load->view('layout/navigation')?>
    <!-- Header Carousel -->

    <!-- Page Content -->
    <div class="container">

       <hr>
        <!-- /.row -->
        <div class="row">
                        <!-- body items -->
            <!-- load products from table -->
             <div class="col-md-12">

                <div class="panel panel-default">
                <?php if($detail != FALSE):?>
                    <?= $this->session->flashdata('message')?>
					<div class="panel-heading">
						
							<h3>My History : </h3> 
                    </div>
					
                    <div class="panel-body" width="100px">
						<div class="col-md-12">
							<hr>
								<div class="col-md-2">
								<h3>Nama produk</h3>
								</div>
								<div class="col-md-2">
								<h3>Qty</h3>
								</div>
								<div class="col-md-2">
								<h3>Harga</h3>
								</div>
								<div class="col-md-2">
								<h3>Subtotal</h3>
								</div>
						</div>  
                        <?php 
                                    $total = 0;
                                    foreach ($detail as $row ) : 
                                    $subtotal = $row->qty * $row->price;
                                    $total += $subtotal;
                        ?>
                        <div class="col-md-12">
                            <hr>
                            <div class="col-md-2">
                                <?= $row->product_title ?>
                            </div>
                            <div class="col-md-2">
                                <?= $row->qty ?>
                            </div>
                            <div class="col-md-2">
                                <?= $row->price ?>
                            </div>
                            <div class="col-md-2">
                                <?= $subtotal ?>
                            </div>
                            <?php endforeach;?>
						
						<div class="col-md-12">
							<hr>
							<div class="col-md-10">
							<hr>
							</div>
							<div class="col-md-2">
							<?=  anchor(base_url(),'Back to Home',['class'=>'btn btn-default','role'=>'button']) ?>
							</div>
						</div>
					
                    </div>
					<?php else : ?>
                    <div class="panel-heading">
                        
                            <h3>My History :  </h3> 
                    </div>
                    <div class="col-md-12">
                            <hr>    
                        <div class="col-md-3"></div>
                        <div class="col-md-6"><h3>There Are No Shopping History For You !</h3></div>
                        <div class="col-md-3"><?=  anchor(base_url(),'Shopping Now',['class'=>'btn btn-primary','role'=>'button']) ?></div>
                    </div>
                    <?php endif?>
	
					
                </div>
            </div>  
			
        </div>
        <!-- /.row -->

        <!-- Features Section -->

        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Harap Menggunakan Email Yang Dapat Dihubungi. Periksa Kembali Alamat Pengiriman Pada Saat Pembelian.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Aka Store</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <?php $this->load->view('layout/footer')?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url('/assets/js/jquery.js');?>"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>