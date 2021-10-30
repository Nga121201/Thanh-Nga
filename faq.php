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
                                <li><a class="white-link" href="index.php">Trang chủ</a></li>
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle white-link" data-toggle="dropdown" href="prevention.php"
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
                                <li><a href="appointment.php" class="white-link">Tư vấn</a></li>
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
                                    <a class="dropdown-toggle white-link" data-toggle="dropdown" href="blog.php" role="button"
                                        aria-haspopup="true" aria-expanded="false">Tin tức
                                    </a>
                                    <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.php" class="white-link">Tin tức</a></li>
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
        
    <!--=============== Start braeadcrum Area =================-->
    <section class="faq_breadcrumb_area">
      <img class="overlay_bg" src="assets/images/about/worldmap2.png" alt="" />
      <div class="container">
        <div class="breadcrumb_content text-center">
          <h6>Các câu hỏi thường gặp</h6>
          <h2>Coronavirus (COVID-19): Câu hỏi thường gặp</h2>
        </div>
      </div>
    </section>
    <!--================End braeadcrum Area =================-->
    <!--================Start coronavirus question Area =================-->
    <section class="coronavirus_question_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 col-6">
            <a href="#" class="corona_question">
              <div class="icon">
                <i class="linearicons-first-aid"></i>
              </div>
              Đại dịch COVID-19
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-6">
            <a href="#" class="corona_question">
              <div class="icon">
                <i class="linearicons-eye-dropper"></i>
              </div>
              Các triệu chứng COVID-19 là gì?
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-6">
            <a href="#" class="corona_question">
              <div class="icon">
                <i class="linearicons-earth"></i>
              </div>
              Nguồn gốc dịch bệnh
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-6">
            <a href="#" class="corona_question">
              <div class="icon">
                <i class="linearicons-earth"></i>
              </div>
              Bảo vệ bản thân khỏi Coronavirus
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-6">
            <a href="#" class="corona_question">
              <div class="icon">
                <i class="linearicons-earth"></i>
              </div>
              Chi tiết về Coronavirus và COVID-19
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-6">
            <a href="#" class="corona_question">
              <div class="icon">
                <i class="linearicons-earth"></i>
              </div>
              Sự lây lan của virus
            </a>
          </div>
        </div>
      </div>
    </section>
    
    <!--================End coronavirus question Area =================-->
<!--================Answers Area =================-->
    <section class="faq_area">
      <div class="container">
        <div class="main_title">
          <h5>Có một vài câu hỏi? Tìm câu trả lời!</h5>
          <h2>Giải đáp thắc mắc</h2>
        </div>
        <ul class="list-unstyled shap_img">
            <img style="width: 300px;height:250px"  src="assets/images/about/dauhoi2.jpg" alt="">
      </ul>
        <div class="row answer_inner">
          <div class="col-lg-4">
            <div class="question_list">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                      aria-expanded="true" aria-controls="collapseOne">
                      Đại dịch COVID-19
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Coronavirus là gì?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Sự khác biệt giữa COVID-19 và các bệnh khác là gì?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">Virus lây lan như thế nào?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab"
                            aria-controls="four" aria-selected="false">Các triệu chứng như thế nào?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Triệu chứng Coronavirus
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home2-tab" data-toggle="tab" href="#home2" role="tab"
                            aria-controls="home2" aria-selected="true">Sự khác biệt giữa COVID-19 & bệnh cúm?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile2-tab" data-toggle="tab" href="#profile2" role="tab"
                            aria-controls="profile2" aria-selected="false">Triệu chứng gây ra bởi virus SARS-CoV-2 qua từng ngày?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact2-tab" data-toggle="tab" href="#contact2" role="tab"
                            aria-controls="contact2" aria-selected="false">Biểu hiện của bệnh COVID-19 có sổ mũi không?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four2-tab" data-toggle="tab" href="#four2" role="tab"
                            aria-controls="four2" aria-selected="false">Biểu hiện sớm nhất của bệnh COVID-19 gây ra bởi virus SARS-CoV-2 là gì?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five2-tab" data-toggle="tab" href="#five2" role="tab"
                            aria-controls="five2" aria-selected="false">Triệu chứng của COVID-19 có nghẹt mũi không?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Bảo vệ bản thân khỏi Coronavirus
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab3" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home3-tab" data-toggle="tab" href="#home3" role="tab"
                            aria-controls="home3" aria-selected="true">Tôi có nên chủng ngừa COVID-19 không?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile3-tab" data-toggle="tab" href="#profile3" role="tab"
                            aria-controls="profile3" aria-selected="false">Triệu chứng gây ra bởi virus SARS-CoV-2 qua từng ngày</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact3-tab" data-toggle="tab" href="#contact3" role="tab"
                            aria-controls="contact3" aria-selected="false">Tôi có nên đeo khẩu trang không?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four3-tab" data-toggle="tab" href="#four3" role="tab"
                            aria-controls="four3" aria-selected="false">Tôi có thể tự làm nước rửa tay không?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five3-tab" data-toggle="tab" href="#five3" role="tab"
                            aria-controls="five3" aria-selected="false">Bạn có thể bắt coronavirus từ các bề mặt không?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingfour">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                      Chi tiết về Coronavirus và COVID-19
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab4" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home4-tab" data-toggle="tab" href="#home4" role="tab"
                            aria-controls="home4" aria-selected="true">Tỷ lệ tử vong COVID là bao nhiêu?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile4-tab" data-toggle="tab" href="#profile4" role="tab"
                            aria-controls="profile4" aria-selected="false">Hệ gen của virus Corona 2019 là gì?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact4-tab" data-toggle="tab" href="#contact4" role="tab"
                            aria-controls="contact4" aria-selected="false">Sự khác biệt giữa coronavirus mới và các coronavirus khác là gì?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingfive">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                      Sự lây lan của virus
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab5" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home5-tab" data-toggle="tab" href="#home5" role="tab"
                            aria-controls="home5" aria-selected="true">Coronavirus có lây qua không khí không?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile5-tab" data-toggle="tab" href="#profile5" role="tab"
                            aria-controls="profile5" aria-selected="false">Lây lan trong cộng đồng là gì?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingsix">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                      Nguồn gốc dịch bệnh COVID-19
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab6" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home6-tab" data-toggle="tab" href="#home6" role="tab"
                            aria-controls="home6" aria-selected="true">Hệ gen của virus Corona 2019 là gì?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile6-tab" data-toggle="tab" href="#profile6" role="tab"
                            aria-controls="profile6" aria-selected="false">Vi rút SARS-CoV-2 được phát hiện khi nào?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact6-tab" data-toggle="tab" href="#contact6" role="tab"
                            aria-controls="contact6" aria-selected="false">Thời gian ủ bệnh virus SARS-CoV-2</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four6-tab" data-toggle="tab" href="#four6" role="tab"
                            aria-controls="four6" aria-selected="false">Nguyên nhân nhiễm vi rút SARS-CoV-2</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="tab-content answer_details" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h4>Virus Corona là gì?</h4>
                <p>
                  Virus Corona 2019 là nhóm các virus thuộc phân họ Coronavirinae trong họ Coronaviridae, của bộ Nidovirales. Coronavirus là hệ gen ARN dương sợi đơn kèm nucleocapsid đối xứng xoắn ốc. Bộ gen của Coronavirus lớn khoảng từ 26 – 32 kilo base.
                </p>
                <p>
                  Tên gọi vi rút Corona 2019 có nguồn gốc từ tiếng Latin, trong đó “corona” có nghĩa là “vương miện” hoặc “hào quang”. Virus này có những chiếc gai bao bọc bên ngoài, chúng tương tác với thụ thể trên tế bào, theo cơ chế tương tự chìa khóa và ổ khóa, từ đó cho phép virus xâm nhập vào bên trong. Virus Corona chủng mới là SARS-CoV-2 chưa từng xuất hiện ở người.
                </p>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h4>Sự khác biệt giữa COVID-19 và bệnh cúm là gì?</h4>
                <p>
                  COVID-19 và bệnh cúm đều là những bệnh truyền nhiễm đường hô hấp do virus gây ra. COVID-19 do virus SARS-CoV-2 gây ra, trong khi bệnh cúm do virus cúm A và B. Những virus này lây lan theo những cách tương tự.
                </p>
                <p>
                 COVID-19 và bệnh cúm gây ra các triệu chứng tương tự. Các bệnh này cũng có thể không gây ra triệu chứng hoặc các triệu chứng nhẹ hoặc nghiêm trọng. Vì có nhiều điểm tương đồng, khó có thể chẩn đoán bạn mắc bệnh nào nếu chỉ dựa vào các triệu chứng. Xét nghiệm có thể được thực hiện để xem liệu bạn có bị nhiễm COVID-19 hay bệnh cúm hay không. Bạn cũng có thể mắc cả hai bệnh cùng một lúc. Tuy nhiên, chúng vẫn có một số khác biệt.
                </p>
                <p>
                  Các triệu chứng COVID-19 thường xuất hiện từ 2 đến 14 ngày sau khi tiếp xúc với SARS-CoV-2. Các triệu chứng cúm thường xuất hiện khoảng 1 đến 4 ngày sau khi tiếp xúc với virus cúm.COVID-19 có thể gây ra các bệnh nghiêm trọng hơn ở một số người so với bệnh cúm. Ngoài ra, COVID-19 có thể gây ra các biến chứng khác với bệnh cúm, chẳng hạn như cục máu đông và hội chứng viêm đa hệ ở trẻ em.
                </p>
                <p>
                  Mặc dù chỉ có một phương pháp điều trị kháng virus COVID-19, nhưng có một số loại thuốc kháng virus có thể được sử dụng để điều trị bệnh cúm. Ngoài ra, bạn có thể tiêm phòng cúm hàng năm để giúp giảm nguy cơ mắc bệnh cúm. Thuốc chủng ngừa cúm cũng có thể làm giảm mức độ nghiêm trọng của bệnh cúm và nguy cơ biến chứng nghiêm trọng. Vaccine có thể được tiêm dưới dạng tiêm hoặc xịt mũi.
                </p>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h4>Virus lây lan như thế nào</h4>
                <p>
                  Các virus nói chung và virus SARS-CoV-2 nói riêng, trong quá trình lưu hành, sau nhiều lần sao chép và nhân bản có thể xuất hiện những biến đổi trong cấu trúc của gen, nghĩa là có sự thay đổi ở một hoặc một số vị trí trên bộ gen di truyền so với bộ gen ban đầu của virus, điều này được gọi là đột biến gen.
                </p>
                <p>
                  Khi quá trình lây nhiễm tăng nhanh, quá trình virus sao chép và nhân bản cũng gia tăng, các đột biến gen của virus có cơ hội xuất hiện nhiều hơn, dẫn đến khả năng xuất hiện biến thể cao hơn. 
                </p>
              </div>
              <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="four-tab">
                <h4>Triệu chứng của bệnh COVID-19?</h4>
                <p>
                  Trong giai đoạn đầu của đại dịch, người ta cho rằng sổ mũi không phải là triệu chứng của COVID-19, nhiều khả năng là dấu hiệu của bệnh cúm thông thường. Tuy nhiên, từ dữ liệu của các cuộc nghiên cứu sau này cho thấy, sổ mũi, ngạt mũi, chảy nước mũi có thể xuất hiện ở bệnh nhân COVID-19, đặc biệt là những bệnh nhân nhiễm biến thể Delta.
                </p>
                <p>
                  Sau thời gian ủ bệnh (trong khoảng từ 2 đến 14 ngày), các triệu chứng nhiễm COVID 19 bắt đầu xuất hiện như ho khan và sốt nhẹ. Sốt được xác định nghi ngờ COVID 19 là từ 38,1oC – 39oC hay 100,5oF – 102,1oF, thường kèm theo giảm chức năng vị giác và khứu giác.
                </p>
                <p>
                  Bệnh nhân sẽ được điều trị và cách ly tại nhà nếu các triệu chứng ở mức độ nhẹ hoặc trung bình và tự khỏi trong 1 tuần. Khoảng 10% người bệnh vẫn còn những triệu chứng sốt, mệt mỏi, ho, tiêu chảy… vào tuần thứ hai. Nếu các triệu chứng càng kéo dài càng xuất hiện thêm nhiều triệu chứng tăng nặng, đòi hỏi người bệnh phải nhập viện, hồi sức tích cực và thở máy xâm lấn. COVID 19 có diễn tiến khó đoán, đặc biệt là ở bệnh nhân lớn tuổi có bệnh nền đi kèm. Biểu hiện lâm sàng thay đổi từ hoàn toàn không có triệu chứng đến triệu chứng nặng và tử vong.
                </p>
                <p>
                  Đại dịch COVID-19 do virus SARS CoV 2 chủ yếu gây ra hội chứng hô hấp cấp tính nghiêm trọng. Mặc dù vậy, COVID-19 vẫn được ghi nhận với nhiều biến chứng của COVID-19 thường gặp như nhức đầu, chóng mặt, thay đổi ý thức, rối loạn khứu giác, rối loạn vị giác, co giật và đột quỵ.
                </p>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <h4>Sự khác nhau giữa mắc COVID-19, cảm lạnh, dị ứng và cảm cúm là gì?</h4>
                <p>
                  Cả COVID-19 và cảm lạnh thông thường đều do virus gây ra. COVID-19 do SARS-CoV-2 gây ra, trong khi cảm lạnh thông thường thường do rhinovirus gây ra. Những virus này lây lan theo những cách tương tự nhau và gây ra nhiều dấu hiệu và triệu chứng giống nhau. Tuy nhiên, có một vài điểm khác biệt.
                </p>
                <p>
                 Trong khi các triệu chứng COVID-19 thường xuất hiện từ 2 đến 14 ngày sau khi tiếp xúc với SARS-CoV-2, các triệu chứng của cảm lạnh thông thường thường xuất hiện từ 1 đến 3 ngày sau khi tiếp xúc với virus gây cảm lạnh.Không có thuốc chữa cảm lạnh thông thường. Điều trị có thể bao gồm thuốc giảm đau và thuốc trị cảm lạnh không kê đơn, chẳng hạn như thuốc thông mũi. Không giống như COVID-19, cảm lạnh thường vô hại. Hầu hết mọi người đều hồi phục sau cảm lạnh thông thường trong vòng 3 đến 10 ngày.
                </p>
              </div>
              <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile3-tab">
                <h4> Triệu chứng gây ra bởi virus SARS-CoV-2 qua từng ngày</h4>
                <p>
                  Tùy theo thể trạng và sức đề kháng, triệu chứng nhiễm corona qua từng ngày của mỗi cá thể là khác nhau, tuy nhiên những triệu chứng này đều biểu hiện rõ từ 2-14 ngày. Do đó, ngay khi có các dấu hiệu nghi ngờ, người bệnh cần đến ngay các cơ sở y tế gần nhất để được chẩn đoán kịp thời.Ngày 1 đến ngày 3:Dấu hiệu giống bệnh cảm thông thườngViêm họng nhẹ, không sốt, không mệt mỏi Ăn uống và hoạt động bình thường.Ngày 4:Cổ họng bắt đầu đau nhẹ, người lờ đờ.Bắt đầu khan tiếng.Nhiệt độ cơ thể tăng nhẹ.Đau đầu nhẹ, tiêu chảy nhẹ.Bắt đầu chán ăn.Ngày 5:Đau họng nhiều hơn, khan tiếng nhiều hơn.Nhiệt độ cơ thể tăng nhẹCơ thể mệt mỏi, đau nhức các khớp xương.Ngày 6:Triệu chứng gây ra bởi virus SARS-CoV-2 là bắt đầu sốt nhẹ.Ho có đàm hoặc ho khan không đàm.Đau họng nhiều hơn, đau khi nuốt nước bọt, khi ăn hoặc nói.Cơ thể mệt mỏi, buồn nôn.Tiêu chảy, có thể nôn ói.Lưng hoặc ngón tay đau nhức.Ngày 7:Sốt cao dưới 38o Ho nhiều hơn, đàm nhiều hơn.Toàn thân đau nhức.Khó thở.Tiêu chảy và nôn ói nhiều hơn.Ngày 8:Sốt khoảng trên dưới 38o.Khó thở, hơi thở khò khè, nặng lồng ngực.Ho liên tục, đàm nhiều, tắt tiếng.Đau khớp xương, đau đầu, đau lưng.Ngày 9:Các tình trạng như sốt, ho, khó thở, nặng lồng ngực… trở nên nặng nề hơn.
                </p>
              </div>
              <div class="tab-pane fade" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                <h4>Sự khác nhau giữa mắc COVID-19, cảm lạnh, dị ứng và cảm cúm là gì?</h4>
                <p>
                  Cả COVID-19 và cảm lạnh thông thường đều do virus gây ra. COVID-19 do SARS-CoV-2 gây ra, trong khi cảm lạnh thông thường thường do rhinovirus gây ra. Những virus này lây lan theo những cách tương tự nhau và gây ra nhiều dấu hiệu và triệu chứng giống nhau. Tuy nhiên, có một vài điểm khác biệt.
                </p>
                <p>
                 Trong khi các triệu chứng COVID-19 thường xuất hiện từ 2 đến 14 ngày sau khi tiếp xúc với SARS-CoV-2, các triệu chứng của cảm lạnh thông thường thường xuất hiện từ 1 đến 3 ngày sau khi tiếp xúc với virus gây cảm lạnh.Không có thuốc chữa cảm lạnh thông thường. Điều trị có thể bao gồm thuốc giảm đau và thuốc trị cảm lạnh không kê đơn, chẳng hạn như thuốc thông mũi. Không giống như COVID-19, cảm lạnh thường vô hại. Hầu hết mọi người đều hồi phục sau cảm lạnh thông thường trong vòng 3 đến 10 ngày.
                </p>
              </div>
              <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">
                <h4> Triệu chứng gây ra bởi virus SARS-CoV-2 qua từng ngày</h4>
                <p>
                  Tùy theo thể trạng và sức đề kháng, triệu chứng nhiễm corona qua từng ngày của mỗi cá thể là khác nhau, tuy nhiên những triệu chứng này đều biểu hiện rõ từ 2-14 ngày. Do đó, ngay khi có các dấu hiệu nghi ngờ, người bệnh cần đến ngay các cơ sở y tế gần nhất để được chẩn đoán kịp thời.Ngày 1 đến ngày 3:Dấu hiệu giống bệnh cảm thông thườngViêm họng nhẹ, không sốt, không mệt mỏi Ăn uống và hoạt động bình thường.Ngày 4:Cổ họng bắt đầu đau nhẹ, người lờ đờ.Bắt đầu khan tiếng.Nhiệt độ cơ thể tăng nhẹ.Đau đầu nhẹ, tiêu chảy nhẹ.Bắt đầu chán ăn.Ngày 5:Đau họng nhiều hơn, khan tiếng nhiều hơn.Nhiệt độ cơ thể tăng nhẹCơ thể mệt mỏi, đau nhức các khớp xương.Ngày 6:Triệu chứng gây ra bởi virus SARS-CoV-2 là bắt đầu sốt nhẹ.Ho có đàm hoặc ho khan không đàm.Đau họng nhiều hơn, đau khi nuốt nước bọt, khi ăn hoặc nói.Cơ thể mệt mỏi, buồn nôn.Tiêu chảy, có thể nôn ói.Lưng hoặc ngón tay đau nhức.Ngày 7:Sốt cao dưới 38o Ho nhiều hơn, đàm nhiều hơn.Toàn thân đau nhức.Khó thở.Tiêu chảy và nôn ói nhiều hơn.Ngày 8:Sốt khoảng trên dưới 38o.Khó thở, hơi thở khò khè, nặng lồng ngực.Ho liên tục, đàm nhiều, tắt tiếng.Đau khớp xương, đau đầu, đau lưng.Ngày 9:Các tình trạng như sốt, ho, khó thở, nặng lồng ngực… trở nên nặng nề hơn.
                </p>
              </div>
              <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact2-tab">
                <h4>Biểu hiện của bệnh COVID-19 có sổ mũi không? </h4>
                <p>
                  Trong giai đoạn đầu của đại dịch, người ta cho rằng sổ mũi không phải là triệu chứng của COVID-19, nhiều khả năng là dấu hiệu của bệnh cúm thông thường. Tuy nhiên, từ dữ liệu của các cuộc nghiên cứu sau này cho thấy, sổ mũi, ngạt mũi, chảy nước mũi có thể xuất hiện ở bệnh nhân COVID-19, đặc biệt là những bệnh nhân nhiễm biến thể Delta.
                </p>
                <p>
                  Theo báo cáo của Tổ chức Y tế Thế giới (WHO), khoảng 5% bệnh nhân mắc Corona virus có triệu chứng nghẹt mũi. Đây không phải là dấu hiệu phổ biến nhất của bệnh, nhưng đây là triệu chứng dễ gây nhầm lẫn với cảm lạnh và cúm. Trên thực tế, nhiều dấu hiệu COVID 19 giống với bệnh cúm như đau đầu, đau nhức cơ thể, mệt mỏi. Một số triệu chứng khác có thể giống như cảm lạnh hoặc dị ứng, như đau họng, ho, sốt và nghẹt mũi.
                </p>
                <p>
                  Báo cáo đưa ra bởi Tổ chức Y tế Thế giới (WHO) cho thấy, trong số 55.924 người mắc COVID 19 được theo dõi, hơn 33% bệnh nhân có biểu hiện ho ra đờm, chất nhầy dày được tạo ra từ phổi. Triệu chứng ho của COVID 19 không phải là hiện tượng ngứa cổ họng khiến người bệnh hắng giọng, cũng không chỉ là do kích thích, mà cơn ho này xuất phát từ vùng ức và các ống phế quản bị viêm rất khó chịu.
                </p>
                <p>
                  Đau họng, ho khan, thậm chí có đờm đặc và bọt, khả năng cao là một trong những triệu chứng điển hình, nghiêm trọng và phổ biến của COVID-19. Dấu hiệu COVID đau họng thường dễ bị nhầm lẫn với đau họng thông thường. Đau họng do bệnh COVID không có hiệu quả điều trị khi uống các thuốc đau họng thông thường. Do đó, nếu cảm thấy ho nhiều, kéo dài, uống thuốc hoặc điều trị tại nhà không đỡ, kết hợp với triệu chứng sốt, khó thở, người bệnh cần đi khám sức khỏe ngay tại các cơ sở khám, chữa bệnh được Nhà nước, Bộ Y tế chỉ định.
                </p>
              </div>
              <div class="tab-pane fade" id="four2" role="tabpanel" aria-labelledby="four2-tab">
                <h4>Biểu hiện sớm nhất của bệnh COVID-19 gây ra bởi virus SARS-CoV-2 là gì?</h4>
                <p>
                  Theo cảnh báo từ Trung tâm Kiểm soát và Phòng ngừa dịch bệnh Hoa Kỳ (CDC Hoa Kỳ), khi mắc COVID 19, một hoặc tất cả các triệu chứng đều có thể xuất hiện bất cứ lúc nào trong vòng 2-14 ngày sau khi tiếp xúc với virus SARS-CoV-2. Theo đó, các biểu hiện sớm nhất để phát hiện bệnh là:
                </p>
                <p>
                <ul>
                  <il> Sốt: Sốt là dấu hiệu nhận biết corona đầu tiên. Hầu hết trẻ em và người lớn sẽ được xác định là sốt khi nhiệt độ vượt mức 38oC. Các chuyên gia khuyến cáo, bệnh nhân không nên dựa vào nhiệt độ đo buổi sáng vì sốt do virus thường khiến thân nhiệt tăng vào cuối buổi chiều và đầu buổi tối.</il>
                  <il>Ho khan: Ho là một triệu chứng COVID 19 sớm và phổ biến nhất. Ho do COVID 19 gây ra sẽ không thể điều trị dứt điểm khi uống thuốc ho thông thường. </il>
                  <il>Mệt mỏi: Mệt mỏi, kiệt sức, đau nhức cơ thể là biểu hiện COVID 19 sớm. Nghiên cứu của WHO cho thấy, khoảng 40% trong số gần 6.000 người mắc bệnh trải qua giai đoạn mệt mỏi. Trạng thái này thậm chí còn kéo dài ngay sau khi COVID 19 kết thúc một vài tuần. </il>
               </ul>
             </p>
              </div>
              <div class="tab-pane fade" id="five2" role="tabpanel" aria-labelledby="five2-tab">
                <h4>Triệu chứng của COVID-19 có nghẹt mũi không?</h4>
                <p>
                  Theo báo cáo của Tổ chức Y tế Thế giới (WHO), khoảng 5% bệnh nhân mắc Corona virus có triệu chứng nghẹt mũi. Đây không phải là dấu hiệu phổ biến nhất của bệnh, nhưng đây là triệu chứng dễ gây nhầm lẫn với cảm lạnh và cúm. Trên thực tế, nhiều dấu hiệu COVID 19 giống với bệnh cúm như đau đầu, đau nhức cơ thể, mệt mỏi. Một số triệu chứng khác có thể giống như cảm lạnh hoặc dị ứng, như đau họng, ho, sốt và nghẹt mũi.
                </p>  
              </div>
              <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile4-tab">
                <h4>Hệ gen của virus Corona 2019 là gì?</h4>
                <p>
                  Bộ gen của virus Corona 2019 là bộ gen lớn nhất trong số các virus RNA, bao gồm các vùng: vùng 5’UTR, khung đọc mở, vùng 3’UTR và cuối cùng là đuôi-poly (A).
                </p>
                <p>
                  Theo các nghiên cứu, bộ gen của virus Corona 2019 có các mặt tương đồng như sau:
                </p>
                <ul>
                  <il>Tương đồng 50% mã gen so với chủng virus MERS-CoV;</il>
                  <il>Tương đồng 79,5% mã gen so với chủng virus SARS-CoV;</il>
                  <il>Tương đồng 96% mã gen so với chủng virus Corona được phát hiện trong dơi, đặc biệt là dơi móng ngựa;</il>
                  <il>Tương đồng 99% mã gen so với chủng virus Corona có trong loài Tê tê.</il>
                </ul>
                <p>
                  Khi phân tích vi rút Corona 2019, các nhà khoa học nhận thấy vi rút Corona cùng loài với virus gây bệnh SARS vào năm 2003 với độ tương đồng lên đến 94.6% các chuỗi axit amin.
                </p>
                <p>
                  Trong bộ gen của vi rút Corona 2019 có một gen thiết yếu là RdRp (RNA phụ thuộc RNA polymerase), gen này có độ bảo tồn cao, được dùng để chẩn đoán phát hiện vi rút Corona.
                </p>
              </div>
              <div class="tab-pane fade" id="home3" role="tabpanel" aria-labelledby="home3-tab">
                <h4>Tôi có nên chủng ngừa COVID-19 không?</h4>
                <p>
                  Có. Ba loại vắc xin COVID-19 đã được Cục Quản lý Thực phẩm và Dược phẩm Hoa Kỳ (FDA) cho phép sử dụng khẩn cấp cho các nhóm tuổi cụ thể và hiện tại vắc xin Pfizer đã nhận được sự chấp thuận đầy đủ của FDA. Johns Hopkins Medicine xem tất cả các vắc xin COVID-19 được ủy quyền và phê duyệt là có hiệu quả cao trong việc ngăn ngừa bệnh hiểm nghèo, nhập viện và tử vong do COVID-19. 
                </p>
              </div>
              <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile3-tab">
                <h4>Biến thể delta là gì?</h4>
                <p>
                  Kể từ khi bắt đầu đại dịch COVID-19, SARS-CoV-2, loại coronavirus gây ra COVID-19, đã đột biến (thay đổi), dẫn đến các biến thể khác nhau. Một trong số này được gọi là biến thể delta. Delta được coi là một trong những dạng dễ lây lan nhất của coronavirus cho đến nay, và hiện chiếm phần lớn các trường hợp COVID-19 ở Hoa Kỳ
                </p>
                <p>
                  Việc đi du lịch quốc tế nếu bạn chưa được tiêm phòng đầy đủ COVID-19 không được khuyến khích, vì nó khiến bạn có nguy cơ bị nhiễm các biến thể delta. Điều này bao gồm cả trẻ em chưa được tiêm chủng.
                </p>
                <p>
                  Tiêm phòng đầy đủ COVID-19 có thể bảo vệ bạn khỏi biến thể delta . Tất cả ba loại vắc xin COVID-19 được FDA cấp phép hoặc được FDA chấp thuận đều có thể bảo vệ bạn khỏi những tác động nghiêm trọng nhất của biến thể delta. Mặc dù vắc-xin COVID-19 không phải là hoàn hảo, và những người được tiêm chủng đầy đủ vẫn có thể mắc và truyền vi-rút, nhưng chúng có hiệu quả cao trong việc chống lại bệnh coronavirus nghiêm trọng và giảm đáng kể khả năng nhập viện và tử vong do COVID-19.
                </p>
              </div>
              <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact3-tab">
                <h4>Tôi có nên đeo khẩu trang không?</h4>
                <p>
                  CDC tiếp tục theo dõi sự lây lan của COVID-19 và khuyến nghị đeo khẩu trang - đối với những người đã được  tiêm chủng đầy đủ  cũng như những người chưa được tiêm chủng - đặc biệt là khi bạn đang ở trong những khu vực có khả năng lây truyền vi rút cao.
                </p>
                <p>
                  CDC khuyến nghị đeo khẩu trang và duy trì khoảng cách vật lý trong văn phòng bác sĩ, bệnh viện hoặc cơ sở chăm sóc dài hạn. Hướng dẫn an toàn hiện tại của Johns Hopkins Medicine yêu cầu mọi người phải đeo khẩu trang bên trong các cơ sở của chúng tôi, bao gồm bệnh viện, trung tâm chăm sóc và văn phòng.
                </p>
              </div>
              <div class="tab-pane fade" id="four3" role="tabpanel" aria-labelledby="four3-tab">
                <h4>Tôi có thể tự làm nước rửa tay không?</h4>
                <p>
                 Không có nghiên cứu nào chứng minh hiệu quả của nước rửa tay tự chế trong việc tiêu diệt vi rút coronavirus trên tay của mọi người. Các chuyên gia đồng ý rằng phương pháp tốt nhất để làm sạch tay là rửa ít nhất 20 giây với xà phòng và nước.
                </p>
              </div>
              <div class="tab-pane fade" id="five3" role="tabpanel" aria-labelledby="five3-tab">
                <h4>Bạn có thể bắt coronavirus từ các bề mặt không?</h4>
                <p>
                  Mặc dù coronavirus suy yếu và chết theo thời gian bên ngoài cơ thể người, các nghiên cứu cho thấy nó có thể sống trên các bề mặt trong vài giờ hoặc lên đến vài ngày, tùy thuộc vào bề mặt, nhiệt độ và các yếu tố môi trường khác. Ví dụ, một lượng nhỏ coronavirus có thể được phát hiện trên bề mặt nhựa trong tối đa ba ngày, trên thép không gỉ trong tối đa hai ngày và lên đến một ngày trên bìa cứng,  nhưng nó ở dưới 0,1% vật liệu vi rút ban đầu .
                </p>
                <p>
                  Cho đến nay, bằng chứng cho thấy vi rút không tồn tại tốt trên bề mặt mềm (chẳng hạn như vải) như trên bề mặt cứng thường xuyên chạm vào như nút thang máy và tay nắm cửa.
                </p>
                <p>
                  Nghiên cứu thêm sẽ cung cấp thông tin về coronavirus và thời gian nó sống trên các bề mặt. Trong thời gian chờ đợi, hãy  rửa tay thật sạch  sau khi ở những nơi công cộng.
                </p>
              </div>
              <div class="tab-pane fade" id="home4" role="tabpanel" aria-labelledby="home4-tab">
                <h4>Tỷ lệ tử vong COVID là bao nhiêu?</h4>
                <p>
                  COVID-19 gây ra nhiều trường hợp bệnh nặng và nhiều ca tử vong hơn so với bệnh cúm theo mùa. Những người trên 85 tuổi có nguy cơ tử vong cao nhất và trẻ em dưới 19 tuổi có nguy cơ tử vong thấp nhất, nhưng điều này có thể thay đổi khi nhiều người được kiểm tra hơn và xu hướng trở nên rõ ràng hơn đối với các biến thể. Nếu theo thời gian, thử nghiệm rộng rãi phát hiện các trường hợp nhẹ hơn, không béo của COVID-19, tỷ lệ tử vong sẽ giảm xuống.
                </p>
              </div>
              <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact4-tab">
                <h4>
                 Sự khác biệt giữa coronavirus mới và các coronavirus khác là gì?
                </h4>
                <p>
                  Có nhiều loại coronavirus khác nhau. Một số chỉ ảnh hưởng đến động vật. Một số đã lưu hành trong con người trong nhiều năm, gây bệnh đường hô hấp và cảm lạnh. Một số khác đã từng gây ra các đợt bùng phát bệnh nhỏ và nghiêm trọng ở người trong quá khứ, chẳng hạn như coronavirus gây ra hội chứng hô hấp cấp tính nghiêm trọng (SARS) vào năm 2003 và hội chứng hô hấp Trung Đông (MERS) vào năm 2012. Loại coronavirus mới khác với những loại này, và là loại đầu tiên xác định vào tháng 12 năm 2019.
                </p>
                
              </div>
              <div class="tab-pane fade" id="home5" role="tabpanel" aria-labelledby="home5-tab">
                <h4>Coronavirus có lây qua không khí không?</h4>
                <p>
                 Có, coronavirus có thể được truyền qua không khí bởi các hạt hô hấp nhỏ có chứa virus. Những phần tử lây nhiễm này được phát tán vào không khí khi một người mang virus coronavirus hít thở, nói chuyện, hát, ho hoặc hắt hơi. CDC đã cập nhật thông tin về  sự lây lan của coronavirus trong không khí .
                </p>
                <p>
                 Các giọt hô hấp có kích thước khác nhau, nhưng nhìn chung chúng được coi là lớn hay nhỏ. Các giọt hô hấp lớn có thể nhìn thấy và chúng rơi xuống đất tương đối gần với người thở ra - thường là vài giây đến một phút sau khi họ thở ra. Tuy nhiên, các giọt nhỏ hơn trong đường hô hấp có thể lơ lửng trong không khí từ vài phút đến hàng giờ, và chúng có thể bay xa người thở ra.
                </p>
                <p>
                  Thực tế là coronavirus có thể lây nhiễm qua không khí là lý do tại sao việc đeo khẩu trang  khi ở gần những người khác là rất quan trọng  , ngay cả sau khi bạn đã được tiêm phòng đầy đủ. Khẩu trang ngăn không cho các giọt đường hô hấp lây lan, không chỉ khi bạn ho và hắt hơi, mà còn khi bạn đang nói chuyện, ca hát hoặc tập thể dục.
                </p>
                <p>
                  Ngoài việc đeo khẩu trang, duy trì khoảng cách cơ thể (ít nhất là 6 feet), rửa tay và làm sạch và khử trùng bề mặt là những cách quan trọng để ngăn ngừa lây truyền vi rút. Khi vi rút coronavirus đang lây lan khắp cộng đồng của bạn, tránh xa các khu vực trong nhà thông gió kém và tụ tập đông người trong nhà là những cách quan trọng để tránh gặp phải sự tập trung của các giọt nhỏ lơ lửng và các phần tử mang vi rút.
                </p>
                <p>Hiếm khi, vi-rút có thể lây lan khi chạm vào các bề mặt tiếp xúc nhiều như công tắc đèn, tay nắm cửa hoặc tay vịn và sau đó chạm vào mặt, miệng hoặc mắt của bạn. Đảm bảo thường xuyên khử trùng các bề mặt tiếp xúc nhiều và rửa tay hoặc sử dụng nước rửa tay thường xuyên.</p>
              </div>
              <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile5-tab">
                <h4>Lây lan trong cộng đồng nghĩa là gì ?</h4>
                <p>
                  Lây lan trong cộng đồng nghĩa là mọi người bị lây nhiễm vi-rút trong một khu vực, bao gồm cả một số đối tượng không biết rõ họ đã bị lây nhiễm ở đâu và bằng cách nào. Mỗi sở y tế xác định sự lây lan trong cộng đồng khác nhau tùy theo tình hình địa phương. Để biết thêm thông tin về lây lan trong cộng đồng tại khu vực của quý vị, xin vui lòng truy cập trang web của sở y tế của quý vị.
                </p>
              </div>
              <div class="tab-pane fade" id="home6" role="tabpanel" aria-labelledby="home6-tab">
                <h4>Hệ gen của virus Corona 2019 là gì?</h4>
                <p>
                  Bộ gen của virus Corona 2019 là bộ gen lớn nhất trong số các virus RNA, bao gồm các vùng: vùng 5’UTR, khung đọc mở, vùng 3’UTR và cuối cùng là đuôi-poly (A).
                </p>
                <p>
                  Theo các nghiên cứu, bộ gen của virus Corona 2019 có các mặt tương đồng như sau:
                </p>
                <ul>
                  <il>Tương đồng 50% mã gen so với chủng virus MERS-CoV;</il>
                  <il>Tương đồng 79,5% mã gen so với chủng virus SARS-CoV;</il>
                  <il>Tương đồng 96% mã gen so với chủng virus Corona được phát hiện trong dơi, đặc biệt là dơi móng ngựa;</il>
                  <il>Tương đồng 99% mã gen so với chủng virus Corona có trong loài Tê tê.</il>
                </ul>
                <p>
                  Khi phân tích vi rút Corona 2019, các nhà khoa học nhận thấy vi rút Corona cùng loài với virus gây bệnh SARS vào năm 2003 với độ tương đồng lên đến 94.6% các chuỗi axit amin.
                </p>
                <p>
                  Trong bộ gen của vi rút Corona 2019 có một gen thiết yếu là RdRp (RNA phụ thuộc RNA polymerase), gen này có độ bảo tồn cao, được dùng để chẩn đoán phát hiện vi rút Corona.
                </p>
              </div>
              <div class="tab-pane fade" id="profile6" role="tabpanel" aria-labelledby="profile6-tab">
                <h4>
                 Vi rút SARS-CoV-2 được phát hiện khi nào?
                </h4>
                <p>
                  Bùng phát vào cuối tháng 12/2019, bắt nguồn từ một chợ hải sản ở Hồ Nam, Vũ Hán, miền Trung Trung Quốc, virus SARS-CoV-2 ban đầu được xác nhận là một loại bệnh “viêm phổi lạ” hoặc “viêm phổi không rõ nguyên nhân”. Chỉ sau 100 ngày xuất hiện, đại dịch viêm đường hô hấp cấp do virus SARS-CoV-2 đã nhanh chóng tác động tới các lĩnh vực kinh tế, xã hội, thị trường tài chính chao đảo, nền kinh tế toàn cầu rơi vào suy thoái với tỷ lệ thất nghiệp và nghèo đói chưa từng có trong lịch sử.
                </p>
                <p>
                  Cho đến nay, đã có 215 quốc gia, vùng lãnh thổ (trong đó có 2 tàu du lịch) ghi nhận ca mắc COVID-19.
                </p>
                
              </div>
              <div class="tab-pane fade" id="contact6" role="tabpanel" aria-labelledby="contact6-tab">
                <h4>Thời gian ủ bệnh virus SARS-CoV-2</h4>
                <p>
                  Theo CDC Mỹ, các triệu chứng COVID-19 thường xuất hiện từ ngày thứ 2 – 14 sau khi nhiễm virus tùy thuộc vào từng cá thể, trung bình là 5 ngày. Riêng với biến thể Delta, thời gian ủ bệnh ngắn, chỉ khoảng 2 – 4 ngày. Trong thời gian này, virus vẫn có thể truyền bệnh cho người khác
                </p>
                <p>
                  1. Đối với Coronavirus :Các ước tính hiện tại cho thấy, các chủng virus Corona chẳng hạn như MERS và SARS có thời gian ủ bệnh khoảng 2-11 ngày. Giống như các bệnh về đường hô hấp khác, sau khi hết giai đoạn ủ bệnh, người nhiễm Coronavirus sẽ xuất hiện các triệu chứng gồm sổ mũi, đau họng, ho và sốt… Bệnh có thể diễn tiến nặng ở một số người khi gây ra viêm phổi cấp. Nguy hiểm hơn, Covid-19 có thể nhanh chóng gây tử vong cho đối tượng nguy cơ cao như người già, người mắc bệnh mạn tính (tiểu đường, tim mạch, ung thư, viêm phổi tắc nghẽn mãn tính COPD…).
                </p>
                <p>
                  2. Đối với chủng mới: Viêm đường hô hấp cấp do virus Corona chủng mới có thể xuất hiện các triệu chứng sau thời gian ủ bệnh kéo dài từ 2 đến 14 ngày, trung bình là 5 ngày. Trong thời gian này, virus vẫn có thể truyền bệnh cho người khác. Mặc dù vậy, nhiều nghiên cứu cũng chỉ ra rằng, sẽ có một số ít trường hợp thời gian ủ bệnh Sars-Cov 2 có thể kéo dài hơn 14 ngày. Nghiên cứu  được thực hiện bởi Trường Y tế Cộng đồng Johns Hopkins Bloomberg (Mỹ) cho thấy, trong số 10.000 đối tượng bị nhiễm Covid-19 thì có khoảng 101 trường hợp xuất hiện các triệu chứng đầu tiên sau 14 ngày. Do đó, các chuyên gia cho rằng các việc tiếp xúc với người không có biểu hiện bệnh không có nghĩa là an toàn. Nói cách khác, Covid-19 có thể lây nhiễm ngay cả trước khi các triệu chứng đầu tiên xuất hiện.
                </p>
              </div>
              <div class="tab-pane fade" id="four6" role="tabpanel" aria-labelledby="four6-tab">
                <h4>Nguyên nhân nhiễm vi rút SARS-CoV-2</h4>
                <p>
                  Người bị nhiễm virus SARS-CoV-2 là từ người tiếp xúc với các giọt dịch hô hấp của cơ thể của người có mầm bệnh khi hắt hơi, ho hoặc thở ra. Các nhà khoa học và quan chức có trách nhiệm đã xác nhận ba cách lây truyền: truyền trực tiếp, truyền tiếp xúc và truyền khí dung.
                <p>
                  Trung tâm kiểm soát và phòng ngừa dịch bệnh Hoa Kỳ (CDC) đã đưa ra danh sách những người có nguy cơ cao nhất nhiễm vi rút Corona. Đây là nhóm đối tượng cực kỳ nhạy cảm và dễ tử vong do virus Corona gồm cả trẻ em, người lớn, người cao tuổi, phụ nữ có thai, người có tiền sử bệnh, người bị suy giảm miễn dịch hoặc có các bệnh lý nền (bệnh tim, bệnh phổi mạn tính, suy giảm miễn dịch, béo phì, đái tháo đường…).
                </p>
                <p>
                  Người bệnh có thể lây truyền virus ngay cả khi họ không có triệu chứng điển hình. Cần xác định người bệnh bằng xét nghiệm, cách ly, và chăm sóc y tế, tùy thuộc vào mức độ nghiêm trọng. Thậm chí, người đã được xác định mắc COVID-19 nhưng không biểu hiện triệu chứng cũng cần được cách ly và thực hiện nghiêm túc các biện pháp giãn cách, kiểm soát để hạn chế tiếp xúc với người khác nhằm ngăn chặn sự lây lan của bệnh.  
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Answers Area =================-->
    <!--================Worldwide Tracker Area =================-->
    <section class="world_wide_tracker pad_top">
      <div class="container">
        <img class="tracker_map" src="assets/images/tracker-map-bg.png" alt="" />
        <div class="tracker_text">
          <h5>Theo dõi trên toàn thế giới</h5>
          <h2>Các trường hợp nhiễm COVID-19 đã được xác nhận</h2>
          <p>Ngày cập nhập: <?php echo date("d/m/Y");?></p>
        </div>
        <div class="row tracker_inner">
          <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="300">
            <div class="media">
              <div class="d-flex">
                <img src="assets/images/icon/corona-red-1.png" alt="" />
              </div>
              <div class="media-body">
                <h2 id="total_cases"></h2>
                <p>Tổng số trường hợp</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="400">
            <div class="media">
              <div class="d-flex">
                <img src="assets/images/icon/corona-black-1.png" alt="" />
              </div>
              <div class="media-body">
                <h2 id="total_deaths"></h2>
                <p>Tổng số người chết</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="500">
            <div class="media">
              <div class="d-flex">
                <img src="assets/images/icon/corona-green-1.png" alt="" />
              </div>
              <div class="media-body">
                <h2 id="total_recovered"></h2>
                <p>Đã hồi phục</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="600">
            <div class="media">
              <div class="d-flex">
                <img src="assets/images/icon/corona-yellow-1.png" alt="" />
              </div>
              <div class="media-body">
                <h2 id="new_cases"></h2>
                <p>Các trường hợp mới</p>
              </div>
            </div>
          </div>
        </div>
        <div class="tracker_btn">
          <a class="green_btn wow fadeInUp" data-wow-delay="500" href="#"><i class="linearicons-earth-lock"></i> See
            Live
            Track</a>
        </div>
      </div>
    </section>
    <!--================End Worldwide Tracker Area =================-->
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