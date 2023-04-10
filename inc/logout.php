<?php
@session_start();
session_destroy();
header("location:/lumino/index.php");




?>