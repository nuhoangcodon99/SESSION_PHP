<?php
    session_start();
    session_destroy();
    header("location: showSession.php");
?>
