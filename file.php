<?php
require_once 'Untitled-1.php';

// $filepath= "F:\patient_data\Blood_details";
$file1 = fopen("F:\patient_data\Blood_details\Blood_details.txt","r");
$file2 = fopen("F:\patient_data\Blood_pressure\Blood_pressure.txt","r");
$file3 = fopen("F:\patient_data\Blood_suger\Blood_suger.txt","r");
$file4 = fopen("F:\patient_data\Height\Height.txt","r");
$file5 = fopen("F:\patient_data\spo2\spo2.txt","r");
$file6 = fopen("F:\patient_data\Weight\Weight.txt","r");

while(!feof($file1))
{
    $content1= fgets($file1);
    $carray = explode("_",$content1);
    list($Name,$Date,$Time,$Area,$Blood_group)= $carray;
//     echo "<pre>";
//     var_dump($Blood_group);
    //Blood pressure
    $content2= fgets($file2);
    $carray = explode("_",$content2);
    list($Name,$Date,$Time,$Area,$Blood_pressure)= $carray;
    //Blood suger
    $content3= fgets($file3);
    $carray = explode("_",$content3);
    list($Name,$Date,$Time,$Area,$Blood_suger)= $carray;
    //Height
    $content4= fgets($file4);
    $carray = explode("_",$content4);
    list($Name,$Date,$Time,$Area,$Height)= $carray;
    //spo2
    $content5= fgets($file5);
    $carray = explode("_",$content5);
    list($Name,$Date,$Time,$Area,$spo2)= $carray;
    //
    $content6= fgets($file6);
    $carray = explode("_",$content6);
    list($Name,$Date,$Time,$Area,$Weight)= $carray;
    //sql quiry
    
$sql= "INSERT INTO `patient2` ( `Patient Name`, `Blood_details`, `Blood_pressure`, `Blood_sugur`, `Height`, `spO2`, `Weight`)
VALUES ('$Name', '$Blood_group', '$Blood_pressure', '$Blood_suger', '$Height', '$spo2', '$Weight')";

$con->query($sql);

}

// while(!feof($file2))
// {
//     $content2= fgets($file2);
//     $carray = explode("_",$content2);
//     list($Name,$Date,$Time,$Area,$Blood_pressure)= $carray;
//     // echo "<pre>";
//     // var_dump($Blood_pressure);
// }

// while(!feof($file3))
// {
//     $content3= fgets($file3);
//     $carray = explode("_",$content3);
//     list($Name,$Date,$Time,$Area,$Blood_suger)= $carray;
//     // echo "<pre>";
//     // var_dump($Blood_suger);
// }

// while(!feof($file4))
// {
//     $content4= fgets($file4);
//     $carray = explode("_",$content4);
//     list($Name,$Date,$Time,$Area,$Height)= $carray;
//     // echo "<pre>";
//     // var_dump($Height);
// }

// while(!feof($file5))
// {
//     $content5= fgets($file5);
//     $carray = explode("_",$content5);
//     list($Name,$Date,$Time,$Area,$spo2)= $carray;
    // echo "<pre>";
    // var_dump($spo2);
// }

// while(!feof($file6))
// {
//     $content6= fgets($file6);
//     $carray = explode("_",$content6);
//     list($Name,$Date,$Time,$Area,$Weight)= $carray;
//     // echo "<pre>";
//     // var_dump($Weight);
// }

// $sql= "INSERT INTO `patient2` ( `Patient Name`, `Blood_details`, `Blood_pressure`, `Blood_sugur`, `Height`, `spO2`, `Weight`)
//  VALUES ('$Name', '$Blood_group', '$Blood_pressure', '$Blood_suger', '$Height', '$spo2', '$Weight')";

// $con->query($sql);

?>