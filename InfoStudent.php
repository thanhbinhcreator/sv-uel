<head>
<link rel="stylesheet" href="./Resources/index.css">
</head>
<body>
    

<div class="info-list">
                <div class="info-class">
                    <?php
                $sellectAV = "SELECT * FROM thongtinsv";
                $getAV =$conn->query($sellectAV);
                    $avs = $getAV->fetch_assoc();
                        echo '<div class="img-student">
                     
                        <img class="img-student__item"                  
                            src='."./avatar/".$avs["MSSV"].".jpg".' alt="">
                    </div>';
                    ?>
                   
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
            </body>