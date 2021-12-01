<!DOCTYPE html>
<?php
// Create connection
$conn = mysqli_connect('localhost', 'root','','tracuu_sinhvien');
//Chuyển tiếng Việt
mysqli_set_charset($conn, 'UTF8'); 
// Trỏ đến bảng thongtinSV lấy các cột
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
                            <a href="#info-list?" class="btn-view col-action">
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

            <div class="info-nolist  active"><img class="img-error" name="frameInfo" src="./Resources/oops.svg"
                    style="border: 0px;"> </img></div>
            <div class="info-list">
                <div class="info-class">
                    <div class="img-student">
                     
                        <img class="img-student__item"                  
                            src="" alt="">
                    </div>
                    <div class="info-class__list">
                        <span class="info-list_heading">Họ và tên:</span><span class="info-list_name">Ngô Song Tuyết
                            Ngân</span><br>
                        <span class="info-list_heading">MSSV:</span><span class="info-list_mssv">K204061426</span><br>
                        <span class="info-list_heading">Email:</span><span
                            class="info-list_name">ngannst20406c@st.uel.edu.vn</span><br>
                        <span class="info-list_heading">Niên khoá:</span><span
                            class="info-list_name">2020-2024</span><br>
                        <span class="info-list_heading">Chuyên ngành:</span><span class="info-list_name">Hệ thống thông
                            tin quản lý chất lượng cao</span><br>

                    </div>
                </div>
                <div class="info-contact">
                    <h3 class="contact-heading">Thông tin liên hệ</h3>
                    <div class="contact-detail">
                        <span class="info-list_heading">Ngày sinh:</span><span
                            class="info-list_name">01/01/2002</span><br>
                        <span class="info-list_heading">CMND/CCCD:</span><span
                            class="info-list_name">215522223</span><br>
                        <span class="info-list_heading">Số điện thoại:</span><span
                            class="info-list_name">0968213999</span><br>
                        <span class="info-list_heading">Quê quán:</span><span class="info-list_name">699, QL1A, P. Linh
                            Xuân, Thủ Đức, TP.HCM</span><br>
                        <span class="info-list_heading">Địa chỉ tạm trú:</span><span class="info-list_name">699, QL1A,
                            P.
                            Linh
                            Xuân, Thủ Đức, TP.HCM</span><br>
                        <span class="info-list_heading">Họ và tên cha:</span><span class="info-list_name">Trần Văn
                            X</span><br>
                        <span class="info-list_heading">Họ và tên mẹ:</span><span class="info-list_name">Nguyễn Thị
                            Y</span><br>
                        <span class="info-list_heading">SĐT người giám hộ:</span><span
                            class="info-list_name">099992323</span>
                    </div>
                    <div class="info-action">
                        <a href="" class="btn-delete">Xoá</a>
                        <div class="info-action__request">
                            <a href="" class="btn-edit">Chỉnh sửa</a>
                            <a href="" class="btn-save">Lưu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./handler-btn.js"></script>
</html>
<?php
$conn->close();
?>