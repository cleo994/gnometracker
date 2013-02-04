<h2>All Locations</h2>
<table class="table table-striped">
<thead>
	<tr>
		<th>Subject</th>
		<th>Date</th>
		<th>Time</th>
		<th>Location</th>
	</tr>
</thead>
<tbody>
<?php 
// Read all lines of the CSV file into an array
// File functions returns an array of all the lines of the file listed
$lines = file('data/locations.csv',FILE_IGNORE_NEW_LINES);

// Counter variable for line number
$i = 0;

// Iterate over the array of lines
foreach($lines as $line) {
	$parts = explode(',',$line);
	$date = $parts[0];
	$time = $parts[1];
	$location = $parts[2];
	echo '<tr>';
	echo	"<td>Danny</td>";
	echo 	"<td>$date</td>";
	echo 	"<td>$time</td>";
	echo 	"<td>$location</td>";
	$onclick = "return confirm('Are you sure you want to delete $location?')";
	echo	"<td><a href=\"./?p=form_edit_location&location=$i\" class=\"btn btn-warning\"><i class=\"icon-edit icon-white\"></a></td><td><a href=\"actions/delete_location.php?linenum=$i\" class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></a></td>";
	echo '</tr>';
	
	$i++; // increment line number
}
?>
</tbody>
</table>