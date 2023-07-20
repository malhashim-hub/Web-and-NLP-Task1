<?php
$conn = mysqli_connect("localhost","","","test2");

$query = "SELECT dir FROM direction ORDER BY created_at DESC LIMIT 1"; // select the latest inserted chareacter
$query_run = mysqli_query($conn,$query); //retrive form the database
if(mysqli_num_rows($query_run) > 0){
    foreach($query_run as $row){
        ?>
        <p><?= $row['dir']; ?></p> <!--print it out-->
        <?php
    }
}

?>