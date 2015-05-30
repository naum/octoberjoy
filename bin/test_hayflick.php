<?php

require("../public/hayflick.php");

$b = [ 'name' => 'Shepherd' ];
$t = "Hello, {{name}}.";

$hout = hayflick\render($t, $b);
echo $hout . "\n";
