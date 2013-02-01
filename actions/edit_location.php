<?php 
session_start();
// Read file into array
$lines = file('../data/locations.csv', FILE_IGNORE_NEW_LINES);

// Replace line with new values
$lines[$_POST['linenum']] = "{$_POST['date']},{$_POST['time']},{$_POST['location']}";

// Create the string to write to the file
$data_string = implode("\n",$lines);

// Write the string to the file, overwriting the current contents
$f = fopen('../data/locations.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array(
		'text' => 'Your gnome location has been edited',
		'type' => 'info'
);

header('Location:../?p=list_locations');

?>