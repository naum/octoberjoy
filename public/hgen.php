<?php

namespace hgen;

function parse_opt_str($ostr) {
    $optlist = [];
    if (is_array($ostr)) {
        foreach($ostr as $k => $v) {
            $optlist[] = "$k=\"$v\"";
        }
        return implode(' ', $optlist);
    } else {
        return '';
    }
}

function tag($n, $c, $opt=null) {
    if ($opt) {
        return "<{$n} " . parse_opt_str($opt) . ">{$c}</{$n}>";
    } else {
        return "<{$n}>$c</$n>";
    }
}

function tag_no_enc($n, $opt=null) {
    if ($opt) {
        return "<{$n} " . parse_opt_str($opt) . ">";
    } else {
        return "<{$n}>";
    }
}
