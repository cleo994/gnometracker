<?php
// Read all lines of the CSV file into an array
$lines = file('data/locations.csv',FILE_IGNORE_NEW_LINES);

// Get the line associated with the 'location' parameter in the QS
$location = explode(',',$lines[$_GET['location']]);
?>

<h2>Edit Location</h2>
<form class="form-horizontal" action="actions/edit_location.php" method="post">
	<input type="hidden" name="linenum" value="<?php echo $_GET['location'] ?>" />
	<div class="control-group">
	<label class="control-label" for="date">Date</label>
	<div class="controls">
		<?php echo input('date', 'required',$location[0])?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="time">Time</label>
		<div class="controls">
		<?php echo input('time', 'required',$location[1])?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="location">Location</label>
		<div class="controls">
		<?php echo input('location', 'required',$location[2])?>
		</div>
		<div class="form-actions">
  			<button type="submit" class="btn btn-warning"><i class="icon-edit icon-white"></i>Edit Band</button>
  			<button type="button" class="btn">Cancel</button>
		</div>
	</div>
</form>