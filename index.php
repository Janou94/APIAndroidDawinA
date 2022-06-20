<?php

$dbc = mysqli_connect('localhost', 'root', 'root', 'sokomap');

$query = "SELECT id, map FROM map";

$result = mysqli_query($dbc, $query);

$response = [];

while ($row = mysqli_fetch_array($result)) {
	extract($row);
	$response[]=$row;
}

echo json_encode($response);