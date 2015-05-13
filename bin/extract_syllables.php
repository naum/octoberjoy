<?php

    define('NL', "\n");

    $wordlist = file('/usr/share/dict/words');

    $wordlist = array_map(function($w) {
        return strtolower(trim($w));
    }, $wordlist);

    $wordlist = array_unique($wordlist);
    $syllablelist = array();

    $i = 0;
    foreach ($wordlist as $w) {
        $i += 1;
        $wordmask = syllcode($w);
        if (is_closed_syllable($wordmask) 
            or is_open_syllable($wordmask) 
            or is_silent_e($wordmask, $w)) {
            $syllablelist[] = $w;
        }
        //echo "{$w}: {$wordmask}\n";
        //if ($i >= 10) { break; }
    }

    $syllable_content = implode($syllablelist, "\n") . "\n";
    echo $syllable_content;
    file_put_contents("../public/syllables.txt", $syllable_content);

    $jsmass = '';
    $i = 0;
    foreach ($syllablelist as $s) {
        if ($i % 10 == 0) {
            $jsmass .= '  "' . $s . '",'; 
        } elseif ($i % 10 == 9) {
            $jsmass .= '"' . $s . '",' . "\n";
        } else {
            $jsmass .= '"' . $s . '",';
        }
        $i += 1;
    }
    $jsmass = 'var SYLLABLES = [' . NL . $jsmass . NL . '];' . NL;
    file_put_contents("../public/script/syllables.js", $jsmass);

    #### END OF MAIN ####

    function is_closed_syllable($wm) {
        return preg_match("/^C{1,2}V{1,2}C{1,2}$/", $wm);
    }

    function is_open_syllable($wm) {
        return preg_match("/^C{1,2}V{1,2}$/", $wm) or
               preg_match("/^V{1,2}C{1,2}$/", $wm);
    }

    function is_silent_e($wm, $w) {
        return preg_match("/e$/", $w) and
               is_closed_syllable(substr($wm, 0, -1));
    }

    function syllcode($word) {
        static $vowels = array( 'a', 'e', 'i', 'o', 'u', 'y' );
        $codeword = '';
        $wordlen = strlen($word);
        for ($i = 0; $i < $wordlen; $i += 1) {
            $l = $word[$i];
            if (in_array($l, $vowels)) {
                $codeword .= 'V';
            } else {
                $codeword .= 'C';
            }
        }
        return $codeword;
    }


?>
