<?php
$conn = mysqli_connect("localhost","root","","projectdb");
    if(!$conn){
        die("cannot connect ot server");
    }