<?php

	if (isset($_GET['logout'])) {

		session_start();
        //session_destroy();

        $_SESSION['aproved'] = "No";
        unset($_SESSION['username']);
        header("location: index.php");

    }

?>