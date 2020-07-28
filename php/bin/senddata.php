<?php

include 'getdata.php';

if (isset($_POST['buttonreg'])){
    regData();
}



function regData(){
$conn = conn();

$navn = $_POST['Navn'];
$email = $_POST['Email'];
$alder = $_POST['Alder'];
$skostr = $_POST['Sko'];


$sql = "INSERT INTO hyppighed(`Navn`, `Email`, `Alder`, `Skostr`) "
                   . "VALUES ("."'$navn', "."'$email', "."'$alder', "."'$skostr')";

if (mysqli_query($conn, $sql)) {
  mysqli_close($conn);
  header("Location: ../index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}



