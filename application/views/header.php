<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($page_name)) {echo $page_name .'';} else echo "POS and Inventory Management System" ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome-4.7.0/css/font-awesome.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css')?>">
	<!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JavaScript -->
	<!-- Visit "DNXEMPIRE-1" for more projects -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
</head>
<body>
<!-- <header style="height: 60px; background: #2d2626; color: white;" class=""> -->
<header style="height: 47px; background: #2e2e2e; color: white;" class="">
	<?php
		$cur_date = date('l, F Y');
		if ($this->session->userdata('log_in')) {
			?>
			<p class="" style="float: right; padding-right: 15px; margin-top: 15px;"><?php echo $cur_date ?> | <?php echo $this->session->userdata('username') ?></p>
			<?php
		}
	?>
	
	<div style="padding-left: 20px; padding-top: 15px;">
		<h4 style="margin: 0">POS and Inventory Management System</h4>
	</div>
</header>
<div class="row" style="margin-bottom: -10px;">
<div class="container-fluid main-content" >

