<?php
session_start();
session_unset();
session_destroy();
header("Location:http://localhost:63342/DoanKI1/frontend/home.html");
exit();


