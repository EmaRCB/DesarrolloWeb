<?php
    session_start();

    session_destroy();

    header("location: anunciate.php?estado=5");
?>