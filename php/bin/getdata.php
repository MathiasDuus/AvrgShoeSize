<?php

function conn(){
    $conn = new mysqli("localhost", "pman01.skp-dp.sd","2pp3q2p5","pman01_skp_dp_sde_dk");
    // makes sure æøå works
    $conn->set_charset("utf8");
    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function numRow(){
    $conn = conn();
    $sql = 'SELECT * FROM hyppighed'; 
    $result = $conn->query($sql);
    $rows = $result->num_rows;

        return $rows;
}

function checkProject($ID){
    $conn = conn();
    $sql = 'SELECT * FROM hyppighed  WHERE HyppighedID ="'.$ID.'"'; 
    $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        $navn = $row["Navn"];
        $alder = $row["Alder"];
        $skostr = $row["Skostr"];

        return array($navn, $alder, $skostr);
}


function hyppighed(){
    $conn = conn();
    //  Get row count & Table Data
                $array = array();
                $sql2 = mysqli_query($conn, "SELECT Skostr, COUNT(Skostr) FROM hyppighed GROUP BY Skostr HAVING COUNT(Skostr) > 0");
                while ($row = mysqli_fetch_array($sql2)){
                $size = $row["Skostr"];
                $hyppighed = $row["COUNT(Skostr)"];
                $entry =  "[".$size.",".$hyppighed."],";
                array_push($array, $entry);
                }
    return $array;
}

