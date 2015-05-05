<?php

  $wordlist = file('/usr/share/dict/words');

  $wordlist = array_map(function($w) {
    return strtolower(trim($w));
  }, $wordlist);

  $wordlist = array_filter($wordlist, function($w) {
    return strlen($w) <= 6;
  });

  $wordlist = array_unique($wordlist);

  $wordmass = implode($wordlist, "\n") . "\n";
  file_put_contents("../public/words.txt", $wordmass);

  echo implode($wordlist, ' ') . "\n";


?>
