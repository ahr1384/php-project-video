<?php


declare(strict_types=1);


function formatDollarAmount(float $amount): string
{
    $isNegative = $amount < 0;

    return ($isNegative ? '-' : '') . '$' . number_format(abs($amount), 2);
}

function formatDate(string $date): string
{
    $out = date('M j, Y', strtotime($date));
    return $out;
}

function formatColor(float $amount): string
{
    $color = null;

    if ($amount < -1000) {
        $color =   'black';
    } elseif ($amount < 0) {
        $color = 'red';
    } elseif ($amount > 1000) {
        $color = 'blue';
    } elseif ($amount > 0) {
        $color =   'green';
    }

    return $color;
}
