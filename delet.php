
<?php
require 'config.php';
// session_start();
// Check if the delete_reservation form is submitted
if (isset($_POST['delete_reservation'])) {
    $reservation_id = $_POST['reservation_id'];

    // Delete the reservation from the database
    $delete_query = "DELETE FROM reservation WHERE `id_reservation` = '$reservation_id'";
    $conn->query($delete_query);
    header("location:index.php?delet=true");

    exit();


}


?>