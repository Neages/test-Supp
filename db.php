<?php

$connect = new PDO('mysql:host=localhost;dbname=testsupport;charset=utf8','root','');

$allPeople = $connect->query("SELECT * FROM employees");
$allPeople = $allPeople->fetchAll(PDO::FETCH_ASSOC);

//Day of Week
$allDates = $connect->query("SELECT DISTINCT `date` FROM time_reports");
$allDates = $allDates->fetchAll(PDO::FETCH_ASSOC);



$firstDayArr = $connect->query("SELECT employee_id, hours FROM time_reports WHERE date='{$allDates[0]['date']}'");
$firstDayArr = $firstDayArr->fetchAll(PDO::FETCH_ASSOC);

$secondDayArr = $connect->query("SELECT employee_id, hours FROM time_reports WHERE date='{$allDates[1]['date']}'");
$secondDayArr = $secondDayArr->fetchAll(PDO::FETCH_ASSOC);

$thirdDayArr = $connect->query("SELECT employee_id, hours FROM time_reports WHERE date='{$allDates[2]['date']}'");
$thirdDayArr = $thirdDayArr->fetchAll(PDO::FETCH_ASSOC);

// $fourthDayArr = $connect->query("SELECT employee_id, hours FROM time_reports WHERE date='{$allDates[3]['date']}'");
// $fourthDayArr = $fourthDayArr->fetchAll(PDO::FETCH_ASSOC);

// $fifthDayArr = $connect->query("SELECT employee_id, hours FROM time_reports WHERE date='{$allDates[4]['date']}'");
// $fifthDayArr = $fifthDayArr->fetchAll(PDO::FETCH_ASSOC);

// $sixthDayArr = $connect->query("SELECT employee_id, hours FROM time_reports WHERE date='{$allDates[5]['date']}'");
// $sixthDayArr = $sixthDayArr->fetchAll(PDO::FETCH_ASSOC);

// $seventhDayArr = $connect->query("SELECT employee_id, hours FROM time_reports WHERE date='{$allDates[6]['date']}'");
// $seventhDayArr = $seventhDayArr->fetchAll(PDO::FETCH_ASSOC);