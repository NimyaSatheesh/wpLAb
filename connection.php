<?php
$con = mysqli_connect("localhost","root","","CarBooking");
if($con===false)
{die("ERROR: Could not connect.".mysqli_connect_error());
}

echo "connect successfully.Host info:".mysqli_get_host_info($con);
?>
