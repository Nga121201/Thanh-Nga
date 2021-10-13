<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tài Liệu sửa</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php

        //Viết câu lệnh sửa

            //1. Load file cấu hình để kết nối đến máy chủ CSDL,CSDL
                include('./config.php');

                // 2. Lấy ra các dữ liệu mà trang TINTUCTHEMMOI chuyển sang
                $tai_lieu_noi_bo_id = $_POST["txtID"];
                $phong_ban_id = $_POST["txtPhongBan"];
                $ten_tai_lieu = $_POST["txtTenTaiLieu"];
                $ngay_ban_hanh = $_POST["txtNgayBanHanh"];
                $link_tai_ve = $_POST["txtLinkTaiVe"];
                $ghi_chu = $_POST["txtGhiChu"];

                 $sql ="
                    UPDATE tbl_tai_lieu_noi_bo
                    SET phong_ban_id = '$phong_ban_id', ten_tai_lieu= '$ten_tai_lieu', ngay_ban_hanh = '$ngay_ban_hanh',link_tai_ve='$link_tai_ve',ghi_chu = '$ghi_chu' 
                    WHERE tai_lieu_noi_bo_id = '$tai_lieu_noi_bo_id' ";

                // 4. Thực thi câu lệnh truy vấn 
                    $noi_dung_tai_lieu_noi_bo = mysqli_query($ket_noi, $sql);

                // 5. hiển thị ra thông báo bạn đã thêm mới tin tức thành công
                    echo"
                    <script type = 'text/javascript'>
                    window.alert('bạn đã sửa thành công');
                    </script>  
                    ";
                     echo"
                    <script type = 'text/javascript'>
                    window.location.href='quan_tri_tai_lieu_noi_bo.php';
                    </script>  
                    ";
        ;?>
    </body>
</html>
