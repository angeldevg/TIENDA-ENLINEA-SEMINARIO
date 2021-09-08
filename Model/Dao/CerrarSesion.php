<?php

session_start();

session_destroy();

echo header("Location: http://localhost/seminario/View/login.html");

?>