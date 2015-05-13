<?php

    define('NL', "\n");

    $wordlist = file('/usr/share/dict/words');

    $wordlist = array_map(function($w) {
        return strtolower(trim($w));
    }, $wordlist);

    $wordlist = array_filter($wordlist, function($w) {
        return strlen($w) <= 4;
    });

    $wordlist = array_unique($wordlist);
    print_r($wordlist);

    $wordmass = implode($wordlist, "\n") . "\n";
    file_put_contents("../public/words4.txt", $wordmass);

    $wordtotal = count($wordlist);
    $jswordmass = '';
    $i = 0;
    foreach ($wordlist as $w) {
        if ($i % 10 == 0) {
            $jswordmass .= '  "' . $w . '",'; 
        } elseif ($i % 10 == 9) {
            $jswordmass .= '"' . $w . '",' . "\n";
        } else {
            $jswordmass .= '"' . $w . '",';
        }
        $i += 1;
    }
    $jswordmass = 'var DICTWORDS = [' . NL . $jswordmass . NL . '];' . NL;
    file_put_contents("../public/script/dictwords.js", $jswordmass);

    echo implode($wordlist, ' ') . "\n";


?>
