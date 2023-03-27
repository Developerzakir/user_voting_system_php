<?php 

include "../actions/connect.php";

session_start();
session_destroy();

header('Location: ../');


 ?>