<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'tp_master'
) or die(mysqli_error($mysqli));

?>
