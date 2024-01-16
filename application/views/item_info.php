<div class="col-sm-6 ">
	<?php echo form_fieldset('<h3 class="text-dark">Item Information </h3>');?>
	<div id="item_info">
		<div class="row item_info">
			<div>
			<div class="col-sm-4">
				<div class="form-group">
					<label class="lead text-dark">ID</label><span style="float: right;">:</span>
				</div>
			</div>
			<div class="col-sm-8">
				<p class="lead"><?php echo $item_info->id; ?></p>
			</div>
			</div>
		</div>
		<div class="row item_info">
			<div>
			<div class="col-sm-4">
				<div class="form-group">
					<label class="lead text-dark">Name</label><span style="float: right;">:</span>
				</div>
			</div>
			<div class="col-sm-8">
				<p class="lead"><?php echo $item_info->name; ?></p>
			</div>
			</div>
		</div>

		<div class="row item_info">
			<div>
			<div class="col-sm-4">
				<div class="form-group">
					<label class="lead text-dark">Category</label><span style="float: right;">:</span>
				</div>
			</div>
			<div class="col-sm-8">
				<p class="lead"><?php echo $item_info->category; ?></p>
			</div>
			</div>
		</div>

		<div class="row item_info">
			<div>
			<div class="col-sm-4">
				<div class="form-group">
					<label class="lead text-dark">Description</label><span style="float: right;">:</span>
				</div>
			</div>
			<div class="col-sm-8">
				<p class="lead"><?php echo $item_info->description; ?></p>
			</div>
			</div>
		</div>
		<!-- Visit "codeastro" for more projects -->
		<div class="row item_info">
			<div>
			<div class="col-sm-4">
				<div class="form-group">
					<label class="lead text-dark">Quantity</label><span style="float: right;">:</span>
				</div>
			</div>
			<div class="col-sm-8">
				<p class="lead"><?php echo $item_info->quantities; ?></p>
			</div>
			</div>
		</div>

		<div class="row item_info">
			<div>
			<div class="col-sm-4">
				<div class="form-group">
					<label class="lead text-dark">Price</label><span style="float: right;">:</span>
				</div>
			</div>
			<div class="col-sm-8">
				<p class="lead">$<?php echo $item_info->price; ?></p>
			</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>