<?php

require("../public/hgen.php");

echo hgen\tag("div", "welcome") . "\n";
echo hgen\tag("p", "stuff goes in here.", [ 'class' => 'big', 'id' => 'lede' ]) . "\n";
echo hgen\tag_no_enc("img", [ 'src' => 'image/i0000001.jpg' ]) . "\n";
