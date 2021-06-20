<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>e-Collection Menu</title>

	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.js"></script>	


	<style type="text/css">
		div{
			background: #D4D8F0;
			text-align: center;
			border: 0px solid #fff;
			padding: 10px;
			color: #fff;
		}
	</style>

<link href ="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
     <link href ="<?=base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">     
     <script src="<?=base_url();?>assets/js/jquery-3.1.1.min.js"> </script>




<!-- admin lte -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>assets/adminlte/plugins/fontawesome-free/css/all.min.css">
   <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
 
  <link rel="stylesheet" href="<?=base_url();?>assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
    <link rel="stylesheet" href="<?=base_url();?>assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
    <link rel="stylesheet" href="<?=base_url();?>/assets/adminlte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url();?>assets/adminlte/dist/css/adminlte.min.css">
 
  <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?=base_url();?>assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  
  <!-- Daterange picker -->
    <link rel="stylesheet" href="<?=base_url();?>assets/adminlte/plugins/daterangepicker/daterangepicker.css">

  <!-- summernote -->
    <link rel="stylesheet" href="<?=base_url();?>assets/adminlte/plugins/summernote/summernote-bs4.min.css">


<!-- admin lte -->

	<style type="text/css">
            #container
            {
                width:400px;
                height:265px !important;
                padding:20px;
                background:#c1cff0;
                position: fixed;
                top: 50%;
                left: 50%;
                margin-top: -120px;
                margin-left: -220px;
            }



	</style>


</head>
<body>


<center><h1>e-Collection</h1></center>
		<br/>
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php $sessionuser = $this->session->userdata('first_name')." ". $this->session->userdata('last_name') ; ?>
                    <h6> <color style="color: tomato;">User : <label><?=$sessionuser;?> </label></color></h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                <a href="<?=base_url('mainmenu/inputinvoice')?>">Input Invoice</a><br>
                <a href="<?=base_url('mainmenu/inputreceipt')?>">Input Receipt</a><br>          
                <a href="<?=base_url('mainmenu/reportsoa')?>">Report SOA</a><br>          
                <a href="<?=base_url('mainmenu/testdatetmpicker')?>">tes datetimepicker</a><br>          
                <a href="<?=base_url('login')?>">Log Out</a><br> 
                </div>
                <div class="col-md-9">
                <div class="row">
                            <div class="col-md-4">
                                        <!-- small box -->
                                        <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>150</h3>

                                            <p>New Orders</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                            </div>
                            <div class="col-md-4">
                            <!-- small box -->
                            <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>
                                <p>Bounce Rate</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                        <div class="inner">
                        <h3>44</h3>

                        <p>User Registrations</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        </div>                        
                 </div>   
                <!-- ./col -->

                <!-- ./col -->
       



                </div>

            </div>





  
</body>
</html>