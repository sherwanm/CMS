<?php

require_once('connection.php');

if($_POST['live-search']){ 
    $value =  $_POST['live-search'];
    $sql = "SELECT * FROM contacts WHERE firstName LIKE '$value%'";

    $result = MySQLi_query($connection, $sql);

    echo '<ul>';
    while($row = mysqli_fetch_array($result)){
        ?>
        <li onclick="">
        <div class="live-search-image">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']);?>"></div>
            <?php echo $row['firstName'] ?>
        </li>

        <?php
    }
}