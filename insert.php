<?php

require('connection.php');
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['vorname']) && isset($_POST['nachname'])){
    $fname = $_POST['vorname'];
    $lname = $_POST['nachname'];
    //$company = $_POST['company'];
    //$position = $_POST['position'];
    //$phonenummber = $_POST['phonenummber'];
    //$birthdate = $_POST['birthdate'];, "'. $company .'", "'. $position.'", "'. $birthdate .'", "'. $note  .'", "'. $phonenummber.'"
    //$note = $_POST['note'];, company, position, birthDay, notizen, phoneNummber

    $query = 'INSERT INTO contacts ( firstName , lastName)
                VALUES( "'.$fname.'", "'.$lname.'");';

    if ($connection->query($query)){
        echo $fname;
    }
}
else {
    echo "Data not received properly.";
}

}



?>