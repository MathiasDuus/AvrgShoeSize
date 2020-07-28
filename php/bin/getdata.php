<?php

function conn(){
    $conn = new mysqli("localhost", "pman01.skp-dp.sd","2pp3q2p5",
"pman01_skp_dp_sde_dk");
    // makes sure æøå works
    $conn->set_charset("utf8");
    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

