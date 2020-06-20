<?php

if(isset($_POST['submit'])){
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    // dob = date of birth
    $dob = $day.'-'.$month.'-'.$year;
    $b_day = new DateTime($dob);
    $age = $b_day->diff(new DateTime);

    $today = date('d-m-Y');
    echo "<br/>";
    echo "<b>Your birth day : </b>";
    echo $dob;
    echo "<br/>";
    echo "<b>Your Age : </b>";
    echo $age->y;
    echo ' years, ';
    echo $age->m;
    echo ' months, ';
    echo $age->d;
    echo ' days';
}