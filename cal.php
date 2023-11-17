<?php

function leapyear($y) {
    if ($y % 400 == 0) return true;
    else if ($y % 100 == 0) return false;
    else if ($y % 4 == 0) return true;
    else return false;
}

$ndays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

function days($y, $m) {
    global $ndays;
    $sum = 0;
    for ($i = 1; $i < $y; $i += 1) {
        if (leapyear($i)) $sum += 366;
        else $sum += 365;
    }
    for ($i = 1; $i < $m; $i += 1){
        $sum += $ndays[$i - 1];
        if ($i == 2 && leapyear($y))
            $sum += 1;
    }
    return $sum;
}

function dayoftheweek($y, $m) {
    return (days($y, $m) + 1) % 7;
}

function printd($x) {
    if ($x < 10) print(" ");
    print($x);
    print(" ");
}

$mname = ["January", "February", "March", "April", "May",
          "June", "July", "August", "September", "October",
          "November", "December"];
$week_template = "Su Mo Tu We Th Fr Sa";

function pcal($y, $m) {
    global $ndays, $mname, $week_template;
    $title = $mname[$m - 1] . " " . $y;
    $ll = strlen($title);
    $w = (20 - $ll) / 2;
    for ($i = 0; $i < $w; $i++) print(" ");
    print("$title\n$week_template\n");
    $k = dayoftheweek($y, $m);
    for ($i = 0; $i < $k; $i++) print("   ");
    $dd = $ndays[$m - 1];
    if (leapyear($y) && $m == 2) $dd += 1;
    $c = 1;
    while ($c <= $dd) {
        printd($c);
        $k = ($k + 1) % 7;
        $c += 1;
        if ($k == 0) print("\n");
    }
    print("\n");
}

echo "\n";
pcal(2023, 11);echo "\n";
pcal(2023, 12);echo "\n";
pcal(1961, 9);echo "\n";
pcal(2000, 12);echo "\n";
pcal(2001, 1);echo "\n";
pcal(2026, 3);echo "\n";

