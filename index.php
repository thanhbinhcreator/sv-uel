<!DOCTYPE html>
<?php
// Create connection
require_once('./getDB/connect_db.php');
$getStudents = "SELECT MSSV, HoVaTen, Email FROM thongtinsv";
$students = $conn->query($getStudents);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./Resources/logo uel.png" type="image/x-icon">
    <link rel="stylesheet" href="./reset.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="./col.css" rel="stylesheet">
    <link href="./Resources/index.css" rel="stylesheet">
    <title> Danh sách sinh viên </title>
</head>
<body>
    <header id="header" class="fixed-top">
        <div id="logo">
            <img src="./Resources/logo uel.png">
            <h1>
                Sổ tay thông tin
            </h1>
        </div>
    </header>
<div>
    <div class="smallbar">
    </div>
    <p class="trangttsv">
        Trang thông tin sinh viên
    </p></div>

    <div class="container">
        <div class="tablelist">
              <div>
                    <ul class="list-header">
                        <li class="col-stt">STT</li>
                        <li class="col-name">Họ và tên</li>
                        <li class="col-email">Email </li>
                        <li class="col-action">Hành động</li>
                    </ul>
                </div>
                <ul>

                    <?php
                    $i=1;
                    if ($students->num_rows > 0):
                        // Load dữ liệu lên website
                        while($st = $students->fetch_assoc()): ?>
                     
                       <li class="list-info">
                      <span class="item-count col-stt"><?php echo $i ?></span>

                        <span class="item-name col-name"> <span class="item-text__name"><?php echo $st["HoVaTen"] ?>
                                </span><br><span class="item-text__mssv"><?php echo $st["MSSV"] ?></span>

                        </span>
                        <span class="item-email col-email"><?php echo $st["Email"] ?></span>
                        <span class="view-detail col-action">
                            <a href="xemdulieu.php?MSSV=<?php echo $st['MSSV']. '&Name=' .$st['HoVaTen'].'&Email=' .$st['Email'] ;?>" type="submit" class="btn-view col-action" target="_blank">
                                Chi tiết
                            </a>
                        </span>
                    </li>
                    <?php $i++ ?>
                    <?php endwhile; ?>      
                     <?php endif; ?>     
                </ul>
         
        </div>
        <div class="info-div">
       <!-- <iframe src="xemdulieu.php" frameborder="0" width="100%" height="100%"></iframe> -->
       
       <div class="info-nolist active" >
       <img class="img-error" name="frameInfo" src="./Resources/hello.svg"
                    style="border: 0px;"> 
                </img><br>
                <p class="info-desc">Hello, what are you thinking?</p>
                </div>
                    <!-- list -->
                    
            <!-- list -->
            
        </div>
    </div>
</body>
<!-- <script src="./handler-btn.js"></script> -->
</html>
<?php
$conn->close();
?>