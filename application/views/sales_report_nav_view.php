<div class="col-sm-10" id="main">
	<div id="content">
	<?php
	$total = 0;
	?>
	<?php echo form_fieldset('<h2 class="text-dark">Sales Report</h2>'); ?>
		<nav>
			<ul id="sales-nav">
				<li>
				<i class="fa fa-calendar" aria-hidden="true"></i>
				<a href="<?php echo base_url('daily_sales_report') ?>">Today's Sales</a></li>
				<li>
				<i class="fa fa-calendar" aria-hidden="true"></i>
				<a href="<?php echo base_url('weekly_sales_report') ?>">This Week</a></li>
				<li>
				<i class="fa fa-calendar" aria-hidden="true"></i>
				<a href="<?php echo base_url('monthly_sales_report') ?>">Monthly Sales</a></li>
				<li>
				<i class="fa fa-calendar" aria-hidden="true"></i>
				<a href="<?php echo base_url('yearly_sales_report') ?>">Annual Sales</a></li>
			</ul>
		</nav>
		<br><br>
		<?php echo form_fieldset("<h2 class='text-dark'>$title</h2>"); ?>
		<table class="table table-condensed table-striped table-bordered" id="item_tbl">
<tr>
	<th>Date</th>
	<th>Item</th>
	<th>Price</th>
	<th>Quantity</th>
	<th>Sub Total</th>
</tr>
	<?php foreach ($reports as $report) :?>
		<tr>
			<td><?php echo $report->date ?></td>
			<td><?php echo $report->item_name ?></td>
			<td><?php echo $report->item_price ?></td>
			<td><?php echo $report->quantity ?></td>
			<td><?php echo $report->sub_total ?></td>
		</tr>
		<?php 

		$total = $total + $report->sub_total;
		
		?>
	<?php endforeach ?>
</table>
<p style="border-top: 0.5px silver solid; padding-top: 5px;">
<label class="lead">Total Sales: 
<?php
	if($total > 0) {
		echo '$'.$total;
	}
?>	
</label>
</p>
	</div>
</div>