<?php
$sellectCourse = "SELECT * FROM thongtinkhoahoc";
$getCourses =$conn->query($sellectCourse);
    $courses = $getCourses->fetch_assoc();
?>