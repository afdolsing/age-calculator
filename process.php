<?php

if(isset($_POST['save'])){
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    // dob = date of birth
    $dob = $day . '-' . $month . '-' . $year;
    $today = new DateTime($dob); // waktu sekarang
    // selisih waktu
    $age = $today->diff(new DateTime);

    $today = date('d-m-Y');
    echo "<br/>";
    echo "<b>Your birth day : </b>";
    echo $dob;
    echo "<br/>";
    echo "<b>Your Age : </b>";
    echo $age->y . " years, ";
    echo $age->m . " months, ";
    echo $age->d . " days";
}