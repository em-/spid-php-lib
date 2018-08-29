<?php

if (empty($_GET) or !isset($_GET['idp'])) {
  // TODO report error
  echo "Missing idp parameter<br>";
} else {
    $idp = $_GET['idp'];
    if (!$sp->login($idp, 0, 1)) {
        echo "Already logged in !<br>";
    }
}
echo "<a href=\"/\">Home</a>";
