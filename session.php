<?php 
include('connect.php');
session_start();

if (!isset($_SESSION['id']) || $_SESSION['id'] == ''){
    ?>
    <script>
        window.location = 'index.php';
    </script>
    <?php
}

$session_id = $_SESSION['id'];

$sql = "SELECT * FROM graduand WHERE id = :session_id";
$query = $conn->prepare($sql);
$query->execute(array(':session_id' => $session_id));
$row = $query->fetch();

if ($row) {
    $name = $row['graduand_Fname']. " " . $row['graduand_Mname']. " " . $row['graduand_Lname'];
    $pic = $row['graduand_picture'];
    $sess_pass = $row['password'];
} else {
    // Handle the case when no result is found
    // For example, display an error message or redirect to an error page
    echo "No graduand found.";
}

?>