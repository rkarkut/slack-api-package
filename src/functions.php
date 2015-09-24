<?php

function d($var) {
    print "<pre>".print_r($var, true)."</pre>";
}

function dd($var) {
    die("<pre>".print_r($var, true)."</pre>");
}