<?php
$sellectAV = "SELECT * FROM thongtinsv";
$getAV =$conn->query($sellectAV);
    $avs = $getAV->fetch_assoc();
?>