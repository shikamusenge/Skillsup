<?php
$conn = mysqli_connect("localhost","root","","skillup");
$sql = mysqli_query($conn,"SELECT * From contact WHERE Stutus = 0");
$cNn = mysqli_num_rows($sql);
?>