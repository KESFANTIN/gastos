<?php

function formatDollars($reais)
{
    $formatted = "R$ " . number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $reais)), 2);
    return $reais < 0 ? "({$formatted})" : "{$formatted}";
}

echo formatDollars(2);