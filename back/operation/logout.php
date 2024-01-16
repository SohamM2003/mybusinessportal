<?php
session_start();
session_unset();
session_destroy();
header("LOCATION: http://localhost/mybusinessportal/index.php"); 
// header("Refresh: 1; URL = http://localhost/mybusinessportal/index.php");
