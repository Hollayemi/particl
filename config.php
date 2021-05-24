<?php
$mysqli=mysqli_connect('localhost','root','','auction');
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];

    $sql="SELECT * FROM auth WHERE id='$id'";
    $run=mysqli_query($mysqli,$sql);
    $resultAuth = mysqli_fetch_assoc($run);
}



