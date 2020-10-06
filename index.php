<?php
require './db.php';
require './DayOf.php';
//People

// var_dump($secondDayArr);



$firstMonday = new DayOf($firstDayArr, $allPeople);
$firstMonday->initFirst();
$firstMonday->initSecond();
$firstMonday->initThird();
$firstMonday->initName();
showDay($allDates[0]['date'], $firstMonday->firstPlaceArr, $firstMonday->secondPlaceArr, $firstMonday->thirdPlaceArr);
echo "\r\n";

$secondTuesday = new DayOf($secondDayArr, $allPeople);
$secondTuesday->initFirst();
$secondTuesday->initSecond();
$secondTuesday->initThird();
$secondTuesday->initName();
showDay($allDates[1]['date'], $secondTuesday->firstPlaceArr, $secondTuesday->secondPlaceArr, $secondTuesday->thirdPlaceArr);
echo "\r\n";

$thirdTuesday = new DayOf($thirdDayArr, $allPeople);
$thirdTuesday->initFirst();
$thirdTuesday->initSecond();
$thirdTuesday->initThird();
$thirdTuesday->initName();
showDay($allDates[2]['date'], $thirdTuesday->firstPlaceArr, $thirdTuesday->secondPlaceArr, $thirdTuesday->thirdPlaceArr);


function showDay($day, $first, $second, $third)
{
  $arr = explode("/", $day);
  $dayName = date("l", mktime(0,0,0,$arr[0], $arr[1], $arr[2]));
  if(gettype($first) ==='array' && gettype($second) ==='array' && gettype($third) ==='array'){
    echo "|$dayName| {$first['name']} ({$first['hours']}), {$second['name']} ({$second['hours']}), {$third['name']} ({$third['hours']})  |";
  }elseif (gettype($first) ==='array' && gettype($second) ==='array' && gettype($third) !=='array') {
    echo "|$dayName| {$first['name']} ({$first['hours']}), {$second['name']} ({$second['hours']}), $third  |";
  }elseif (gettype($first) ==='array' && gettype($second) !=='array' && gettype($third) !=='array') {
    echo "|$dayName| {$first['name']} ({$first['hours']}), $second, $third  |";
  }
}
