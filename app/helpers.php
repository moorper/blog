<?php

if (!function_exists('parsedown')) {
    function parsedown(string $str)
    {
        return  \Parsedown::instance()->text($str);
    }
}
