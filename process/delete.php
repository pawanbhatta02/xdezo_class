<?php
require('db.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $delete = "DELETE FROM tasks WHERE id = '$id'";
    $result = mysqli_query($conn,$delete);
    echo header('Location: ../index.php');
}

?>