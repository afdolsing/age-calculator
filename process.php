<?php
    /*
    apakah ada atribut dengan nama 'save' yang dikirim dari form menggunakan method=POST
    cek menggunakan isset()
    jika ada, proses script bawahnya
    */
    if(isset($_POST['save'])){
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];

        // dob = date of birth
        $dob = $day . '-' . $month . '-' . $year;
         // cak waktu sekarang menggunakan class DateTime
        $today = new DateTime($dob);
        // akses array dari fungsi diff untuk menghitung selisih waktu
        $age = $today->diff(new DateTime);
  
        $today = date('d-m-Y');
        echo "<br/>";
        echo "<b>Your birth day : </b>";
        echo $dob;
        echo "<br/>";
        echo "<b>Your Age : </b>";
        // akses dan cetak selisih tahun
        echo $age->y . " years, ";
        echo $age->m . " months, ";
        echo $age->d . " days";
    }