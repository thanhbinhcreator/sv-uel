<?php
$sellectFamily = "SELECT * FROM nguoithan";
$getFamily =$conn->query($sellectFamily);
    $familys = $getFamily->fetch_assoc();
?>