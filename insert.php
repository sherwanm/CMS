<?php

require('connection.php');
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['vorname']) && isset($_POST['nachname'])){
    $fname = $_POST['vorname'];
    $lname = $_POST['nachname'];
    $img = $_FILES['img']['tmp_name'];
    $img2 =  addslashes(file_get_contents($img));
    //$company = $_POST['company'];
    //$position = $_POST['position'];
    //$phonenummber = $_POST['phonenummber'];
    //$birthdate = $_POST['birthdate'];, "'. $company .'", "'. $position.'", "'. $birthdate .'", "'. $note  .'", "'. $phonenummber.'"
    //$note = $_POST['note'];, company, position, birthDay, notizen, phoneNummber

    $query = 'INSERT INTO contacts ( firstName , lastName, image)
                VALUES( "'.$fname.'", "'.$lname.'", '.$img2.');';

    if ($connection->query($query)){
        echo $fname;
    }
}
        else
        {
        echo "Data not received properly.";
    }

}
 
?>