<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query = 'SELECT movie_name, movie_leadactor, movie_director
	FROM movie';
   	$result = mysqli_query($db, $query) or die(mysqli_error($db));

	while ($row = mysqli_fetch_assoc($result)) {
	extract($row);
	echo $movie_name;
	$query = 'SELECT people_fullname
		FROM people
		where people_id='.$movie_director;
	
	$result2 = mysqli_query($db, $query) or die(mysqli_error($db));
	$director = mysqli_fetch_assoc($result2);
	extract($director);
	echo "-";
	echo $people_fullname;
	
	$query = 'SELECT people_fullname
		FROM people
		where people_id='.$movie_leadactor;
	
	$result3 = mysqli_query($db, $query) or die(mysqli_error($db));
	$actor = mysqli_fetch_assoc($result3);
	extract($actor);
	echo "-";
	echo $people_fullname;
	echo '<br>';
	}

?>
