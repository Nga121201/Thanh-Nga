<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Quản trị vaccine</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
            include("simple-sidebar.php");
        ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản trị vaccine</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Hệ thống</a></li>
                            <li class="breadcrumb-item active">VACCINE</li>
                        </ol> 
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Danh sách vaccine |<a href="vaccine_them_moi.php"> Thêm mới</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center; ">STT</th>
                                            <th style="text-align: center; ">Tên VACCINE</th>
                                            <th style="text-align: center; ">Mô Tả</th>
                                            <th style="text-align: center; ">Ảnh minh họa</th>
                                            <th style="text-align: center; ">Sửa</th>
                                            <th style="text-align: center; ">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                          $ket_noi = mysqli_connect("localhost","root","","btl_db_1");
                                     
                                        $sql = "SELECT * 
                                                FROM tbl_vaccine
                                                 ORDER BY vaccine_id DESC ";

                                        $noi_dung_vaccine = mysqli_query($ket_noi,$sql);

                                        $i=0;
                                        while ($row=mysqli_fetch_array($noi_dung_vaccine)) 
                                        {
                                            $i++;
                                    ;?>
                                        <tr>
                                            <td style="text-align: center; width: 30px"><?php echo $i;?></td>
                                            <td style="text-align: center; "><?php echo $row["ten_vaccine"];?></td>
                                            <td style="text-align: center; "><?php echo $row["mo_ta"];?></td>
                                            <td style="text-align: center; "><img src="../images/about/<?php echo $row["anh_minh_hoa"];?>" style="width: 50px; height: auto;"></td>
                                            <td style="text-align: center; "><a href="vaccine_sua.php?id=<?php echo $row['vaccine_id'];?>">Sửa</a></td>
                                            <td style="text-align: center; "><a href="vaccine_xoa.php?id=<?php echo $row['vaccine_id'];?>">Xóa</a></td>
                                        </tr>
                                    <?php
                                    }
                                        mysqli_close($ket_noi);
                                    ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                           
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
