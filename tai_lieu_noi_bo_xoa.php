<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tài liệu xóa</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

            <?php
                //  1.Kết nối máy chủ dữ liệu và đến csdl muốn  xóa.

               //1. Load file cấu hình để kết nối đến máy chủ CSDL,CSDL
                include('./config.php');

                // 2. Lấy ra id để xóa
                $tai_lieu_noi_bo_id = $_GET['id'];

                //3.Truy vấn đẻ xóa  trong csdl
                $sql = " DELETE FROM tbl_tai_lieu_noi_bo WHERE tbl_tai_lieu_noi_bo.tai_lieu_noi_bo_id = '$tai_lieu_noi_bo_id' ";

                // 4.Thực thi câu lệnh truy vấn ( mục đính trả về dữ liệu các bạn cần)
                $noi_dung_tai_lieu_noi_bo = mysqli_query($ket_noi, $sql);

                // 5. Hiển thị thông báo cá bạn đã xóa thành công
                    echo"
                    <script type = 'text/javascript'>
                    window.alert('bạn đã xóa thành công');
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
