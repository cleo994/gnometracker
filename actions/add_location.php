<?php session_start() ?>
<?php
// Validate that each piece of info was provided
if($_POST['gnome_date'] != '' && $_POST['gnome_time'] != '' && $_POST['gnome_location'] != '') {
	
	// Add this location to the CSV file
	// (1) Open the file for writing
	$f = fopen('../data/locations.csv','a');
	
	// (2) Write the new locations info to the file
	fwrite($f,"\n{$_POST['gnome_date']},{$_POST['gnome_time']},{$_POST['gnome_location']}");
	
	// (3) Close the file
	fclose($f);
	
	$_SESSION['message'] = array(
			'text' => 'Your gnome location has been added',
			'type' => 'success'
			
	);
	
	// Redirect to list of locations
	header('Location:../?p=list_locations');
} else {
	// Store submitted data into session data
	$_SESSION['POST'] = $_POST;
	
	// Store error message in session data
	$_SESSION['message'] = array(
			'text' => 'Please enter all required information',
			'type' => 'error'
	);
	
	// Redirect to the form
	header('Location:../?p=form_add_location');
}