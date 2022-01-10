<?php
    session_start();
	//remove all session all variable
    session_unset();

    //destroy
    session_destroy();
?>