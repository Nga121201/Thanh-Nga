
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Thêm mới tin tức</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
        //viết các câu lệnh thêm mới tin tức ở đây
        $ketnoi=mysqli_connect("localhost","root","","btl_db");

        //lấy ra được các dữ liệu mà trang TIN TỨC THÊM MỚI chuyển sang
        $tieu_de = $_POST["txtTieuDe"];
        $hashtag_id=$_POST["txtHashtag"];
        $mo_ta = $_POST["txtMoTa"];
        $noi_dung = $_POST["txtNoiDung"];
        $tac_gia= $_POST["txtTacGia"];
        
        $ngay_dang_tin= $_POST["txtNgayDangTin"];
        $so_lan_doc= $_POST["txtSoLanDoc"];
        $ghi_chu= $_POST["txtGhiChu"];

        //Xử lý hình ảnh --> chưa được
        $anh_minh_hoa = "../images/".basename($_FILES["txtAnhMinhHoa"]["name"]);
        $file_anh_tam=$_FILES["txtAnhMinhHoa"]["tmp_name"];

        //UPLOAD lên máy chủ web
        $result = move_uploaded_file($file_anh_tam, $anh_minh_hoa);
        if (!$result) {
            $anh_minh_hoa=NULL;
        } else {
            $anh_minh_hoa=basename($_FILES["txtAnhMinhHoa"]["name"]);
        }

        //VIết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
        $sql= "INSERT INTO tbl_tin_tuc (tin_tuc_id, tieu_de, hashtag_id, mo_ta, noi_dung, tac_gia, anh_minh_hoa, ngay_dang_tin, so_lan_doc, ghi_chu) VALUES (NULL, '".$tieu_de."', '".$hashtag_id."', '".$mo_ta."', '".$noi_dung."', '".$tac_gia."', '".$anh_minh_hoa."', '".$ngay_dang_tin."', '".$so_lan_doc."', '".$ghi_chu."');";
        $noi_dung_tin_tuc=mysqli_query($ketnoi,$sql);
        
        //echo $sql; exit();
        
        // hiển thị ra thông báo bạn đã thêm mới tin tức thành công và đẩy các bạn về trang quản trị tin tức
         echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã thêm bài viết thành công');
                </script>
            ";

            echo "
                <script type='text/javascript'>
                    window.location.href='quan_tri_tin_tuc.php';
                </script>
            ";
        ;?>
    </body>
</html>
