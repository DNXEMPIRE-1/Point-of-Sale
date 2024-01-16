<div class="col-sm-2" id="side-menu">
	<div>
		<ul class="list-side-menu">
			<?php
				$location = $this->uri->segment(1); 
			?>
			<?php if ($this->session->userdata('account_type') === 'Admin'): ?>
    <li class="list-side-group-item <?php if ($location === 'dashboard') {echo 'active-link';}?>">
        <a class="<?php if ($location === 'dashboard') {echo 'active-text';}?>" href="<?php echo base_url("dashboard") ?>" style="text-decoration:none;">
            <span class="glyphicon glyphicon-dashboard"></span><br>Dashboard
        </a>
    </li>
<?php endif; ?>

			<li class="list-side-group-item <?php if ($location === 'inventory' || $location === 'item') {echo 'active-link';}?> ">

				<a class="<?php if ($location === 'inventory') {echo 'active-text';}?>" href="<?php echo base_url("inventory") ?>" style="text-decoration:none;">
				<span class="glyphicon glyphicon-folder-close"></span><br>Inventory</a>
			</li>
			<li class="list-side-group-item <?php if ($location === 'new_item') {echo 'active-link';}?> ">
				<a class="<?php if ($location === 'new_item') {echo 'active-link';}?>" href="<?php echo base_url("new_item") ?>" style="text-decoration:none;"><i class="fa fa-plus fa-big" aria-hidden="true"></i><br>Add Item</a>
			</li>
			<li class="list-side-group-item <?php if ($location === 'daily_sales_report' || $location === 'weekly_sales_report' || $location === 'monthly_sales_report' || $location === 'yearly_sales_report') {echo 'active-link';}?>">
				<a class="<?php if ($location === 'daily_sales_report') {echo 'active-link';}?>" href="<?php echo base_url("daily_sales_report") ?>" style="text-decoration:none;"><span class="glyphicon glyphicon glyphicon-calendar"></span><br>Sales Report</a>
			</li>
			<li class="list-side-group-item <?php if ($location === 'categories') {echo 'active-link';}?> "><a class="<?php if ($location === 'categories') {echo 'active-link';}?>" href="<?php echo base_url("categories") ?>" style="text-decoration:none;"><span class="glyphicon glyphicon glyphicon-tags"></span><br>Categories</a></li>
			<?php 
			if ($this->session->userdata('account_type') == 'Admin') {
				?>
			<li class="list-side-group-item <?php if ($location === 'accounts') {echo 'active-link';}?> ">
				<a class="<?php if ($location === 'accounts') {echo 'active-link';}?>" href="<?php echo base_url("accounts") ?>" style="text-decoration:none;"><span class="glyphicon glyphicon glyphicon-user"></span><br>User Management</a>
			</li>
			<?php
			}
			 ?>
			<li id="log-out" class="list-side-group-item <?php if ($location === 'lagout') {echo 'active-link';}?> "><a href="<?php echo base_url("logout/out") ?>" style="text-decoration:none;"><span class="glyphicon glyphicon glyphicon-log-out"></span><br>Logout</a></li>
		</ul>
	</div>
</div>
