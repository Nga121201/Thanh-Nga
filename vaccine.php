<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="assets/images/favicon.png" type="image/png" />
  <title>COVID - 19</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css" />
  <link rel="stylesheet" href="assets/vendors/linearicons/css/linearicons.css" />
  <link rel="stylesheet" href="assets/vendors/slick/slick.css" />
  <link rel="stylesheet" href="assets/vendors/slick/slick-theme.css" />
  <link rel="stylesheet" href="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.min.css" />
  <link rel="stylesheet" href="assets/vendors/animate-css/animate.css" />

  <!-- main css -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body data-scroll-animation="true">
  <div class="body_wrapper">

    <!--================Preloader Area =================-->
    <div class="preloader">
      <div class="three-bounce">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
      </div>
    </div>
    <!--================End Preloader Area =================-->
       <!--================Mobile Canvus Menu Area =================-->
        <div class="mobile_canvus_menu">
            <div class="close_btn">
                <img src="assets/images/icon/close-dark.png" alt="">
            </div>
            <div class="menu_part_lux">
                <ul class="menu_list wd_scroll">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li>
                        <a href="index.php">Phòng chống
                            <i class="linearicons-chevron-down"></i>
                        </a>
                        <ul class="list">
                            <li><a href="symptom.php">Các triệu chứng thường gặp</a></li>
                            <li><a href="symptom-checker.php">Kiểm tra triệu chứng</a></li>
                            <li><a href="prevention.php">Biện pháp phòng chống</a></li>
                            <li><a href="tracker.php">Theo dỗi tình hình</a></li>
                        </ul>
                    </li>
                    <li><a href="appointment.php">Tư vấn</a></li>
                    <li class="active">
                        <a href="#">Giới thiệu
                            <i class="linearicons-chevron-down"></i>
                        </a>
                        <ul class="list">
                            <li><a href="coronavirus.php">Corona Virus</a></li>
                            <li><a href="doctors.php">Đội ngũ bác sĩ</a></li>
                            <li><a href="vaccine.php">Vaccine phòng COVID-19</a></li>
                            <li><a href="faq.php">FAQS</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="index.php">Tin tức
                            <i class="linearicons-chevron-down"></i>
                        </a>
                        <ul class="list">
                            <li><a href="blog.php">Tin tức</a></li>
                            <li><a href="single-blog.php">Tin tức chi tiết</a></li>

                        </ul>
                    </li>
                    <li><a href="contact.php">Liên hệ</a></li>
                </ul>
            </div>
            <div class="menu_btm">
                <a class="green_btn" href="#"><i class="linearicons-pulse"></i> Kiểm tra triệu chứng</a>
            </div>
        </div>
        <!--================End Mobile Canvus Menu Area =================-->
        <!--================Sidebar Form Area =================-->
        <div class="body_capture"></div>
        <section class="sidebar_widget scroll_body">
            <div class="info_sidebar_inner">
                <div class="close_btn">
                    <img src="assets/images/icon/close.png" alt="">
                </div>
                <ul class="nav info_social">
                    <li>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                    </li>
                </ul>
                <div class="info_title">
                    <h2>Liên lạc</h2>
                    <p>Nếu bạn có bất kỳ câu hỏi nào trước khi bắt đầu liên lạc, vui lòng điển vào biểu mẫu liên hệ .</p>
                </div>
                <form action="#" class="appoinment_form js-form">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_name" name="a_name" placeholder=""
                                    required />
                                <label><i class="linearicons-user"></i>Họ và Tên</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_email" name="a_email" placeholder=""
                                    required />
                                <label><i class="linearicons-envelope-open"></i>Email</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_number" name="a_number" placeholder=""
                                    required />
                                <label><i class="linearicons-telephone"></i>Số điện thoại</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="a_message" id="a_message" cols="30" rows="10" class="form-control"
                                    required></textarea>
                                <label><i class="linearicons-document"></i>Nội dung</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group checkbox_field">
                                <div class="checkbox">
                                    <input type="checkbox" value="None" id="squared2" name="check" />
                                    <label class="l_text" for="squared2">Tôi chấp nhận  <span> Chính sách bảo mật</span></label>
                                </div>
                                <button type="submit" class="green_btn" name="appoinment" id="appoinment"
                                    value="appoinment" data-value="appoinment">Gửi</button>
                            </div>
                        </div>
                    </div>
                    <div class="success-message">
                        <i class="fa fa-check text-primary"></i> Cảm ơn bạn ! Phản hồi của bạn đã được gửi thành công ...
                    </div>
                    <div class="error-message">Chúng tôi xin lỗi, có thông tin bị lỗi</div>
                </form>
                <div class="info_footer">
                    <p>© Bản quyền
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Công ty Epidemic.
                    </p>
                </div>
            </div>
        </section>
        <!--================End Sidebar Form Area =================-->
        <!--================Header Area =================-->
        <header class="header_area">
            <ul class="nav menu_social flex-column">
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
            <div class="main_menu">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png"
                                srcset="assets/images/logo-2x.png 2x" alt="" /></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li><a href="index.php">Trang chủ</a></li>
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="prevention.php"
                                        role="button" aria-haspopup="true" aria-expanded="false">Phòng chống </a>
                                    <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="symptom.php">Các triệu chứng thường gặp</a></li>
                                        <li><a href="symptom-checker.php">Kiểm tra triệu chứng</a></li>
                                        <li><a href="prevention.php">Biện pháp phòng chống</a></li>
                                        <li><a href="tracker.php">Theo dõi tình hình </a></li>
                                    </ul>
                                </li>
                                <li><a href="appointment.php">Tư vấn</a></li>
                                <li class="dropdown submenu active">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="true" aria-expanded="false">Giới thiệu</a>
                                    <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="coronavirus.php">Corona virus</a></li>
                                        <li><a href="doctors.php">Đội ngũ bác sĩ</a></li>
                                        <li><a href="vaccine.php">Vaccine phòng COVID-19</a></li>
                                        <li><a href="faq.php"> FAQS </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="blog.php" role="button"
                                        aria-haspopup="true" aria-expanded="false">Tin tức
                                    </a>
                                    <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.php">Tin tức</a></li>
                                        <li><a href="single-blog.php">Tin tức chi tiết</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Liên hệ</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="checker_btn">
                                    <a href="#">Kiểm tra triệu chứng</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="right_burger">
                    <ul class="nav">
                        <li>
                            <div class="search_btn" data-toggle="modal" data-target="#exampleModal">
                                <img src="assets/images/icon/search.png" alt="" />
                            </div>
                        </li>
                        <li>
                            <div class="menu_btn">
                                <img src="assets/images/icon/burger.png" alt="" />
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!--================End Header Area =================-->
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="container">
                <div class="breadcrumb_text text-left">
                    <h6>VACCINE COVID-19</h6>
                    <h3>VACCINE phòng ngừa virus Corona</h3>
                    <ul class="nav">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="vaccine.php">Giới Thiệu</a></li>
                        <li><a href="vaccine.php"></a>VACCINE phòng ngừa virus Corona</li>
                    </ul>
                </div>
            </div>
        </section>
    <!--================ About Area =================-->
    <section class="home_about_corona about_corona_aera">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="home_ab_img">
              <img class="wow fadeInUp" data-wow-delay="500ms" src="assets/images/about/timhieu.jpg" style="width:550px;height:auto;"alt="" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="coronavirus_promo_content">
              <h2> Tìm hiểu sự thật</h2>
              <h5>
                Lợi ích của vắc xin COVID-19
                </h5>
                  <li>Ngăn bạn nhiễm COVID-19 hoặc bị ốm nặng hoặc chết do COVID-19.</li>
                  <li>Ngăn bạn lây lan vi-rút gây COVID-19 cho người khác</li>
                  <li>Thêm vào số người trong cộng đồng được bảo vệ khỏi nhiễm COVID-19 - làm cho bệnh khó lây lan hơn và góp phần vào khả năng miễn dịch của đàn</li>
                  <li>Ngăn chặn vi rút gây ra COVID-19 lây lan và nhân rộng, cho phép nó đột biến và có thể trở nên kháng vắc xin hơn</li>
              </ol>
              
              <h5>Tính an toàn và tác dụng phụ của vắc xin COVID-19</h5>
              <p>Một COVID-19 vắc-xin có thể gây ra tác dụng phụ nhẹ sau liều đầu tiên hoặc thứ hai, bao gồm:</p>
              <li>Đau, đỏ hoặc sưng ở nơi tiêm</li>
              <li>Sốt</li>
              <li>Mệt mỏi</li>
              <li>Đau đầu</li>
              <li>Đau cơ</li>
              <li>Ớn lạnh</li>
              <li>Đau khớp</li>
              <li>Buồn nôn và ói mửa</li>
              <li>Cảm thấy không khỏe</li>
              <li>Sưng hạch bạch huyết</li>
              <p>Bạn sẽ được theo dõi trong 15 phút sau khi chủng ngừa COVID-19 để xem bạn có bị phản ứng dị ứng hay không. Hầu hết các tác dụng phụ sẽ biến mất sau vài ngày. Các tác dụng phụ sau liều thứ hai có thể dữ dội hơn. Nhiều người không có tác dụng phụ.</p>
              <p>Một COVID-19 vắc-xin có thể gây ra tác dụng phụ tương tự như dấu hiệu và triệu chứng của COVID-19 . Nếu bạn đã tiếp xúc với COVID-19 và bạn xuất hiện các triệu chứng hơn ba ngày sau khi chủng ngừa hoặc các triệu chứng kéo dài hơn hai ngày, hãy tự cách ly và đi xét nghiệm.</p>
              
              <h3>GỌI 911 nếu bạn gặp trường hợp khẩn cấp về y tế như khó thở hoặc khó thở nghiêm trọng.</h3>
            </div>
          </div>
         <?php
                            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                             include('config.php');

                            // 2. Viết câu lệnh truy vấn để lấy ra được DỮ LIỆU MONG MUỐN (TIN TỨC đã lưu trong CSDL)
                                $sql = " SELECT * 
                                                FROM tbl_vaccine, tbl_vaccine_chi_tiet
                                                 where tbl_vaccine.vaccine_id= tbl_vaccine_chi_tiet.vaccine_id ORDER BY tbl_vaccine.vaccine_id DESC";
                            // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
                                $noi_dung_vaccine = mysqli_query($ket_noi, $sql);

                             // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy được
                             while ($row = mysqli_fetch_array($noi_dung_vaccine)) 

                            {
                             ;?>
                            <?php 
                             }

                            // 5. Đóng kết nối sau khi sử dụng xong
                            mysqli_close($ket_noi);
                        ;?>
                        </ul>
                    </div>
                </div>
                
                    <div class="row blog_item_inner">
                    <?php 
                    // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                    $ket_noi = mysqli_connect("localhost","root","","btl_db_1");
                    // 2. Viết câu lệnh truy vấn để lấy ra được DỮ LIỆU MONG MUỐN (TIN TỨC đã lưu trong CSDL)
                    $sql = " SELECT * 
                            FROM tbl_vaccine, tbl_vaccine_chi_tiet
                             where tbl_vaccine.vaccine_id= tbl_vaccine_chi_tiet.vaccine_id ORDER BY tbl_vaccine.vaccine_id DESC";
                    // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
                    $noi_dung_vaccine = mysqli_query($ket_noi, $sql);

                    // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy được
                    while ($row = mysqli_fetch_array($noi_dung_vaccine))  {
                    
                    ;?>
                            <div class="col-lg-6 comm travel edu quarantine">
                        <div class="big_l_blog_item"> 
                            <div class="l_blog_img">
                                <img  class="img-fluid" src="<?php echo $row['anh_minh_hoa'] ? 'assets/images/about/'.$row['anh_minh_hoa'] :'assets/images/about/astrazeneca.jpeg';?>" alt="" />
                            </div>
                            <div class="l_blog_text">
                                <div class="blog_btm_text">
                                    <div class="author">
                                      <a><?php echo $row["mo_ta"];?>  </a>    
                                    </div>
                                    <a href="vaccine_chi_tiet.php?id=<?php echo $row['vaccine_id'];?>">
                                        <h3><?php echo $row["ten_vaccine"] ;?><br /></h3>
                                    </a>
                                    <a class="text_btn" href="vaccine_chi_tiet.php?id=<?php echo $row['vaccine_id'];?>">Đọc thêm <i class="linearicons-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                     }


                    // 5. Đóng kết nối sau khi sử dụng xong
                    mysqli_close($ket_noi);
                ;?>
        </div>
      </div>
    </section>
    <!--================End About Area =================-->


 <!--================App Area =================-->
    <section class="app_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="app_text">
              <h2>Tải ứng dụng<span> epidemic</span></h2>
              <p>
                Tải xuống ứng dụng của chúng tôi ngay bây giờ, theo dõi các trường hợp Coronavirus trong thời gian thực và theo dõi các bản cập nhật tức thì.
              </p>
              <a class="wow fadeIn" data-wow-delay="400" href="#"><img src="assets/images/apple-btn.png" alt="" /></a>
              <a class="wow fadeIn" data-wow-delay="500" href="#"><img src="assets/images/google-btn.png" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="app_mobile">
              <div class="mobile_image">
                <img src="assets/images/mobile-1.png" alt="" />
                <img class="wow fadeInUp" data-wow-delay="500ms" src="assets/images/mobile-2.png" alt="" />
              </div>
              <ul class="corona_img nav">
                <li>
                  <img src="assets/images/icon/app-virus-1.png" alt="" />
                </li>
                <li>
                  <img src="assets/images/icon/app-virus-2.png" alt="" />
                </li>
                <li>
                  <img src="assets/images/icon/app-virus-3.png" alt="" />
                </li>
                <li data-parallax='{"y": -100}'>
                  <img src="assets/images/icon/app-virus-4.png" alt="" />
                </li>
                <li data-parallax='{"y": 100}'>
                  <img src="assets/images/icon/app-virus-5.png" alt="" />
                </li>
                <li>
                  <img src="assets/images/icon/app-virus-6.png" alt="" />
                </li>
                <li data-parallax='{"y": -200}'>
                  <img src="assets/images/icon/app-virus-7.png" alt="" />
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End App Area =================-->
     <!--================Subscribe Area =================-->
    <section class="subscribe_area apps_craft_animation">
      <ul class="nav">
        <li><img class="layer layer2" data-depth="0.5" src="assets/images/icon/subs-1.png" alt=""></li>
        <li><img src="assets/images/icon/subs-2.png" alt=""></li>
        <li><img src="assets/images/icon/subs-3.png" alt=""></li>
      </ul>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="media">
              <div class="d-flex">
                <i class="linearicons-mailbox-full"></i>
              </div>
              <div class="media-body">
                <h4>Đăng kí nhận tin tức</h4>
                <p>
                  Tham gia danh sách người nhận tin tức của chúng tôi để nhận thông tin diễn biến COVID-19 được gửi trong hộp thư</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mail_box">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="&#xe997; Nhập email của bạn"
                  aria-label="Recipient's username" aria-describedby="button-addon2" />
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                    <i class="linearicons-arrow-right"></i>
                  </button>
                </div>
              </div>
              <label class="container-checkbox">Tôi chấp nhận <span>Chính sách bảo mật</span>
                <input type="checkbox" />
                <span class="checkmark"></span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Subscribe Area =================-->
    <!--================Footer Area =================-->
    <footer class="footer_area">
      <div class="footer_widgets_area pad_top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <aside class="f_widget contact_widget">
                <div class="f_title">
                  <h3>Liên hệ</h3>
                </div>
                <div class="ct_wd_text">
                  <div class="media">
                   
                    <div class="media-body">
                      <h5>Cuộc gọi khẩn cấp</h5>
                        <h4>024 3825 5599</h4>
                      </a>
                    </div>
                  </div>
                  <div class="media">
                   
                    <div class="media-body">
                      <h5>Địa chỉ</h5>
                      <p>36 Ngô Quyền, phường Hàng Bài,
                        </br> quận Hoàn Kiếm, Hà Nội
                      </p>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
            
            <div class="col-lg-4 item-tk">
              <aside class="f_widget list_widget">
                <div class="f_title">
                  <h3>Thống kê</h3>
                </div>
                <ul class="nav flex-column">
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Số lượt đang truy cập</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Tổng số lượt truy cập</a>
                  </li>
                  
                </ul>
              </aside>
            </div>
            <div class="col-lg-4">
             <div class="gg-fb">
                <div>
                  <div class="fb-page page-fb" data-href="https://www.facebook.com/trungtamytequanhoankiem36ngoquyen" data-tabs="timeline" data-width="270" data-height="152" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/trungtamytequanhoankiem36ngoquyen" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/trungtamytequanhoankiem36ngoquyen">Trung Tâm Y Tế Quận Hoàn Kiếm:36 Ngô Quyền</a></blockquote></div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.2281567295654!2d105.85251131402812!3d21.023554993333946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abec902b9623%3A0xdfe9443e9ca77d59!2zVHJ1bmcgVMOibSBZIFThur8gUXXhuq1uIEhvw6BuIEtp4bq_bSAzNg!5e0!3m2!1svi!2s!4v1634628981628!5m2!1svi!2s" width="270" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
                </div>
           
                   </div>
      </div>
      <div class="footer_copyright">
        <div class="container">
          <img src="assets/images/f-logo.png" alt="" />
          <p>
            © Copyright
            <script>
              document.write(new Date().getFullYear());
            </script>
            Epidemic Organisation Ltd.
          </p>
          <ul class="nav">
            <li><a href="#">Điều khoản sử dụng</a></li>
            <li><a href="#">Chính sách bảo mật</a></li>
            <li><a href="#">Dấu ấn</a></li>
          </ul>
          <h6>
            Designed<i class="linearicons-heart"></i> by
            <span>Nhóm HANL</span>
          </h6>
        </div>
      </div>
    </footer>
    <!--================End Footer Area =================-->
  </div>

  <div class="modal fade search_modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <img src="assets/images/icon/close-white.png" alt="">
    </button>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Nội dung tìm kiếm..." aria-label="Recipient's username">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button"><i class="linearicons-magnifier"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/vendors/corona-live/dashboard.js"></script>
  <script src="assets/vendors/isotop/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendors/isotop/isotope.pkgd.min.js"></script>
  <script src="assets/vendors/slick/slick.min.js"></script>
  <script src="assets/vendors/datetimepicker/moment.js"></script>
  <script src="assets/vendors/datetimepicker/tempusdominus-bootstrap-4.min.js"></script>
  <script src="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="assets/vendors/animate-css/wow.min.js"></script>
  <script src="assets/vendors/scroll-animation/jquery.parallax-scroll.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/theme.js"></script>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="XVpXxaji"></script>
  </body>

</html>