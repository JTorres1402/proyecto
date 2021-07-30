<?php
session_start();
session_destroy();
header("Location: /proyecto/index.html");
exit()
?>