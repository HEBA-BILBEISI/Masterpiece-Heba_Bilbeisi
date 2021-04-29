<?php
// open connection
$conn = mysqli_connect("localhost", "root", "", "projectdb");
if (!$conn) {
	die('cannot connecto to server');
}