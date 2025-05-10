<?php

/**
 * Hours to mins helper to be used to convert 1.6667 or multiple thereof into hours and minutes (1 hr 40 mins)
 */

function toHoursMins($num_hours)
{
    $hours = floor($num_hours);
    $mins = round(($num_hours - $hours) * 60);
    return $hours . 'hr ' . $mins . 'mins';
}


function removeHyphen($string)
{
    return ucfirst(str_replace('-', ' ', $string));
}

function replaceHyphenWith_($string)
{
    return str_replace('-', '_', $string);
}

/* averages.blade.php */
function getAverage($n)
{
    return round(array_sum($n) / count($n));
}

function roundArraySum($n)
{
    return round(array_sum($n));
}
