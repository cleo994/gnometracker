<h2>Add a New Location</h2>
<form class="form-horizontal" action="actions/add_location.php" method="post">
	<div class="control-group">
		<label class="control-label" for="gnome_date">Date</label>
		<div class="controls">
		<?php echo input('gnome_date', 'required')?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="gnome_time">Time</label>
		<div class="controls">
		<?php echo input('gnome_time', 'required')?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="gnome_location">Location</label>
		<div class="controls">
		<?php echo input('gnome_location', 'required')?>
		</div>
		<div class="form-actions">
  			<button type="submit" class="btn btn-success"><i class="icon-plus-sign icon-white"></i>Add Band</button>
  			<button type="button" class="btn">Cancel</button>
		</div>
	</div>
</form>