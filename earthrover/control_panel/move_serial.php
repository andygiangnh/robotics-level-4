<?php

$cmd=$_POST["direction"];

$xx=exec("sudo python /var/www/html/earthrover/control_panel/move_serial.py $cmd");

?>
