<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query = 'ALTER TABLE movie
	ADD FOREIGN KEY (people_id) REFERENCES people(people_id)';
	Echo "Alter table succesful";
?>