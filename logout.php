<?php
session_start();
session_destroy();
header("Location: user.php?token=logout");
exit();
?>
