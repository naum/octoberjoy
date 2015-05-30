<?php

namespace hayflick;

function render($t, $bind=null) {
    $hout = $t;
    if ($bind) {
        foreach ($bind as $b => $v) {
            $rtex = '{{' . $b . '}}';
            $hout = str_replace($rtex, $v, $hout);
        }
    }
    return $hout;
}
                
