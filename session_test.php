<?php

    session_start();

    echo $_SESSION['name'];
    echo "<br>";
    echo $_SESSION['car'];

    // session_unset()
    // session_destroy()
?>

