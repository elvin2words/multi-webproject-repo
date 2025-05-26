<?php
// connection with test_quadbtech server
$link = mysqli_connect('localhost', 'root', '','testquadbtech');
// In case error occur the script will run
  if (mysqli_connect_error()){
      die("<script>console.log('There is a problem with mysql connection')</script>");
   }
?>