<?php

require 'env.php';


$conn = mysqli_connect('localhost', 'root', '', 'klik_loginsystem');

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}
