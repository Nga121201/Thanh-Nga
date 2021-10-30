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
                        <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"
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
        <section class="breadcrumb_area search_breadcrumb">
            <div class="container">
                <div class="breadcrumb_text text-left">
                    <h3>Kết quả tìm kiếm “<span>...</span>”</h3>
                    <ul class="nav">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="sample-right-sidebar.html">Tìm kiếm</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Breadcrumb Area =================-->

        <!--================Search page Area =================-->
        <section class="search_page_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="search_inner">
                            <div class="media search_item">
                                <img src="assets/images/search/search_1.jpg" alt="">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>Làm thế nào để bảo vệ bản thân</h3>
                                    </a>
                                    <p>Thứ nhất là luôn phải vệ sinh đôi bàn tay, đây là biện pháp đơn giản mà rất hiệu quả trong phòng chống dịch bệnh.</p>
                                    <p>Thứ hai là cần hạn chế đưa tay sờ lên mặt, mũi, miệng và không vào khu dịch vụ nếu có các biểu hiện sốt hoặc ho, khó thở, mệt mỏi hoặc nếu đang trong thời gian cách ly tại nhà theo yêu cầu của cơ quan y tế.</p>
                                    <p>Thứ ba là luôn che mũi, miệng khi ho hoặc hắt hơi, tốt nhất bằng khăn vải hoặc khăn giấy. Vứt bỏ khăn giấy che mũi, miệng vào thùng rác và rửa sạch tay.</p>
                                    <p>Thứ tư là luôn sử dụng khẩu trang đúng cách khi đến khu dịch vụ theo hướng dẫn của Bộ Y tế và bỏ ngay khẩu trang sau khi sử dụng vào thùng rác. Tuyệt đối không được khạc nhổ bừa bãi.</p>
                                    <a class="text_btn" href="#">View more<i class="linearicons-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="media search_item">
                                <img src="assets/images/search/search_2.jpg" alt="">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>Sự lây lan của biến chủng mới</h3>
                                    </a>
                                    <p>Virus Delta có thể tích rất nhẹ nên nó chậm rơi xuống bề mặt, nó lơ lửng trong không gian nhiều giờ liền nên rất dễ lây lan. Vì thế khi hai người đứng gần nhau (chỉ đứng gần chứ chưa nói chuyện, cũng chẳng bắt tay) trong đó có một người nhiễm biến thể Delta thì chỉ cần vài giây đồng hồ thôi, người đứng gần đã bị nhiễm. Đứng gần là đứng trong phạm vi từ 01 đến 02 mét, còn gần hơn thì tốc độ virus xâm nhập càng nhanh hơn, nó tính bằng tích tắc chứ không phải là 05 hay 10 giây. Đó chính là “sự liên hệ thoáng qua”. Vì vậy cần chú ý phòng, chống biến thể Delta lây lan rất nhanh trong môi trường đông người, nơi ở chật chội, những nơi công cộng… Ngoài lây truyền do hít phải các giọt bắn, nó còn thâm nhập khi ta chạm tay vào hành lang, cầu thang, nút bấm thang máy, cửa xe, thậm chí cả áo mặc ngoài hoặc tiền bạc qua giao dịch. Chúng ta cần nhắc nhở nhau khẩu trang và nước sát khuẩn tay là vật bất ly thân. Khẩu trang đeo khi ra đường và sát khuẩn tay mọi lúc, mọi nơi là biện pháp hiệu quả cho dù các bạn đã tiêm hay chưa tiêm ngừa. Xin nhấn mạnh rằng virus SARS-CoV-2, đặc biệt là biến thể Delta lây truyền qua các hạt siêu nhỏ lơ lửng trong không khí, đặc biệt trong môi trường kín, vì vậy dù ở xa hơn 2m bạn vẫn có thể nhiễm. Với chủng cũ, một người mắc bệnh có thể lây cho vài ba người, nhưng một người nhiễm chủng Delta sẽ lây cho mười, thậm chí hai, ba chục người.</p>
                                    <a class="text_btn" href="#">View more<i class="linearicons-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="media search_item">
                                <img src="assets/images/search/search_3.jpg" alt="">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>Ngăn ngừa Covid-19 lây sang người nhà và cộng đồng</h3>
                                    </a>
                                    <p>Phòng ngừa cho người nghi nhiễm đang chờ kết quả xét nghiệm hoặc bị nhiễm Covid-19, không cần nhập viện và có thể được chăm sóc tại nhà và Phòng ngừa cho người tiếp xúc gần.</p>
                                    <a class="text_btn" href="#">View more<i class="linearicons-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="media search_item">
                                <img src="assets/images/search/search_4.jpg" alt="">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>BẢO ĐẢM SỨC KHỎE TRONG GIAI ĐOẠN DỊCH COVID-19</h3>
                                    </a>
                                    <p>Đối với những người cao tuổi, nhất là những người có bệnh cảnh nền như tăng huyết áp, tiểu đường, béo phì, tim mạch, bệnh phổi mãn tính, bệnh ung thư... cùng với  sức đề kháng suy giảm, khả năng chống đỡ bệnh tật kém, là những đối tượng dễ mắc Covid-19 và dễ chuyển biến nặng dẫn đến khả năng tử vong rất cao. Việt Nam hiện có khoảng 11,4 triệu người cao tuổi, phần lớn trong số này mắc nhiều bệnh mạn tính. Trung bình người Việt Nam trên 60 tuổi có 2,6 bệnh, trên 80 tuổi 6,8 bệnh. Từ đó, nguy cơ nhiễm bệnh và tử vong của nhóm đối tượng này khá cao. Đây là đối tượng ưu tiên trong công tác phòng chống dịch bệnh Covid-19. Vì vậy, Bộ Y tế đã ban hành tài liệu chuyên môn “Hướng dẫn tạm thời quản lý sức khỏe người cao tuổi, người mắc bệnh mạn tính tại tuyến y tế cơ sở trong bối cảnh dịch Covid-19” và “Hướng dẫn chăm sóc sức khỏe phòng chống dịch Covid-19 cho người cao tuổi tại cộng đồng” để quản lý, chăm sóc sức khỏe người cao tuổi, góp phần bảo vệ và nâng cao sức khỏe nhân dân.     </p>
                                    <p>Đối với trẻ em, nhất là trẻ em nhỏ, sức đề kháng cũng còn kém, chậm thích nghi với việc thay đổi quá nhanh của môi trường bên ngoài nên cũng cần quan tâm chăc sóc để phòng ngừa bệnh tốt hơn.</p>
                                    <p>Đối với phụ nữ mang thai, các loại bệnh lý và thuốc men điều trị, nhất là trong giai đoạn 3 tháng đầu của thai kỳ, rất dễ ảnh hưởng sức khỏe của bà mẹ và sự phát triển bình thường của thai nhi, có thể gây ra dị tật bẩm sinh, quái thai, sẩy thai, sinh non... nên việc tăng cường sức khỏe, sức đề kháng để phòng ngừa bệnh tật là vô cùng quan trọng và cần thiết.</p>
                                    <p>Đối với nhóm thanh thiếu niên, là nhóm đối tượng có sức khỏe tốt, có khả năng chống lại bệnh tật tốt. Tuy nhiên, một bộ phận không nhỏ có thói quen và hành vi không tốt như hút thuốc lá, lạm dụng rượu, bia, thức khuya, tình trạng căng thẳng (stress) do công việc hoặc trong quan hệ tình cảm... là các yếu tố có thể ảnh hưởng đến sức khỏe, cần quan tâm để khắc phục những yếu tố ảnh hưởng không tốt đến sức khỏe và sức đề kháng.</p>
                                    
                                    <a class="text_btn" href="#">View more<i class="linearicons-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="media search_item">
                                <img src="assets/images/search/search_5.jpg" alt="">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>Điều cần làm để giữ sức khỏe tốt</h3>
                                    </a>
                                    <p>Để bảo đảm sức khỏe cho mọi người trong mùa dịch Covid-19, chúng ta cần thiết quan tâm đến những việc làm sau đây:</p>
                                    <p>Bảo đảm vệ sinh cá nhân tốt thông qua việc rửa tay sạch sẽ thường xuyên dưới vòi nước chảy ít nhất 20 giây với xà phòng hoặc sử dụng dung dịch rửa tay nhanh chứa cồn trên 60oC, đặc biệt sau khi ho, hắt hơi hay sổ mũi, sau khi đi vệ sinh, trước khi ăn, trước khi chế biến thức ăn, khi chăm sóc trẻ em, sau khi chăm sóc người bệnh, sau khi tiếp xúc với động vật hoặc chất thải của động vật. Trong mùa dịch Covid-19, rửa tay thường xuyên được khuyến sau bất kỳ mọi hoạt động, kể cả khi trao đổi tiền bạc, khi giao dịch, khi chạm bất kỳ vật dụng gì... Rửa tay sạch sẽ không những giúp phòng ngừa Covid-19 mà còn hữu ích trong phòng ngừa bệnh tay-chân-miệng, các bệnh lý đường tiêu hóa... Ngoài ra, cần sử dụng khẩu trang khi ra đường và nơi đông người để ngăn khói, bụi, nắng nóng, phòng ngừa Covid-19 và các bệnh lý lây truyền qua đường hô hấp.</p>
                                    <p>Bảo đảm vệ sinh an toàn thực phẩm thông qua việc ăn chín, uống chín; hạn chế ăn uống những nơi không đạt vệ sinh; không tiếp xúc, vận chuyển, ăn thịt động vật hoang dã.</p>
                                    <p>Bảo đảm vệ sinh môi trường tốt thông qua việc giữ gìn không gian nhà ở, nơi làm việc thật sạch sẽ bằng việc lau chùi. dọn dẹp thường xuyên, đặc biệt đối với những đồ vật bạn hay tiếp xúc trực tiếp. Giữ nhà cửa sạch sẽ và thông thoáng.</p>
                                    <a class="text_btn" href="#">View more<i class="linearicons-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row blog_pagination">
                            <div class="col-md-2">
                                <a class="pagi_btn prev" href="#"><i class="linearicons-arrow-left"></i> Bài viết mới hơn</a>
                            </div>
                            <div class="col-md-8">
                                <nav class="navigation" aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item blank"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-2 text-right">
                                <a class="pagi_btn next" href="#">Bài viết cũ hơn <i
                                        class="linearicons-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="right_sidebar">
                            <aside class="right_widget ct_widget">
                                <div class="r_wd_title">
                                    <h3>Tất cả</h3>
                                </div>
                                <ul class="nav flex-column">
                                    <li><a href="#"><i class="linearicons-arrow-right"></i>Diễn biến dịch bệnh
                                            <span>(17)</span></a></li>
                                    <li><a href="#"><i class="linearicons-arrow-right"></i>Chiến dịch tiêm chủng
                                            <span>(29)</span></a></li>
                                    <li><a href="#"><i class="linearicons-arrow-right"></i>Thuốc điều trị
                                            <span>(18)</span></a></li>
                                    <li><a href="#"><i class="linearicons-arrow-right"></i>Ảnh hưởng của đại dịch
                                            <span>(8)</span></a></li>
                                    <li><a href="#"><i class="linearicons-arrow-right"></i>Cách phòng chống
                                            <span>(33)</span></a></li>
                                    <li><a href="#"><i class="linearicons-arrow-right"></i>Các nghiên cứu
                                            <span>(27)</span></a></li>
                                    
                                </ul>
gae-sae-ki
Phuong Linh
<div class="r_wd_title">
                                    <h3>Những người khác đang quan tâm</h3>
                                </div>
                                <ul class="nav">
                                    <li><a href="#">Vaccine</a></li>
                                    <li><a href="#">Corona Virus</a></li>
                                    <li><a href="#">covid-19</a></li>
                                    <li><a href="#">Astra Zeneca</a></li>
                                    <li><a href="#">Pfizer</a></li>
                                    <li><a href="#">F0</a></li>
                                    <li><a href="#">StayAtHome</a></li>
                                    <li><a href="#">Cách ly</a></li>
                                </ul>
gae-sae-ki
Phuong Linh
<aside class="right_widget wash_widget">
                                <h6>Quy trình rửa tay</h6>
                                <h3>Các bước rửa tay theo tiêu chuẩn của Bộ Y Tế</h3>
                                <p>Ngày nay, tất cả mọi người đều phải cần có thói quen rửa tay, thậm chí các em nhỏ, ngay từ bậc mẫu giáo đã được giáo dục rất kỹ về các bước rửa tay - một công việc tưởng chừng đơn giản nhưng lại mang lại rất nhiều lợi ích. Vậy tại sao chúng ta phải rửa tay và rửa tay như thế nào cho đúng?
                                </p>
                                <a class="text_btn" href="#">Xem thêm <i class="linearicons-arrow-right"></i></a>
                            </aside>
                            <aside class="right_widget archive_widget ct_widget">
                                <div class="r_wd_title">
                                    <h3>Tổng hợp</h3>
                                </div>
                                <ul class="nav flex-column">
                                    <li><a href="#"><i class="linearicons-calendar-text"></i>10/2021
                                            <span>(49)</span></a></li>
                                    <li><a href="#"><i class="linearicons-calendar-text"></i>9/2021
                                            <span>(40)</span></a></li>
                                    <li><a href="#"><i class="linearicons-calendar-text"></i>8/2021
                                            <span>(32)</span></a></li>
                                    <li><a href="#"><i class="linearicons-calendar-text"></i>7/2021
                                            <span>(26)</span></a></li>
                                    <li><a href="#"><i class="linearicons-calendar-text"></i>6/2021
                                            <span>(7)</span></a></li>
                                    <li><a href="#"><i class="linearicons-calendar-text"></i>5/2021
                                            <span>(0)</span></a></li>
                                    <li><a href="#"><i class="linearicons-calendar-text"></i>4/2021
                                            <span>(0)</span></a></li>
                                    <li><a href="#"><i class="linearicons-calendar-text"></i>3/2021
                                            <span>(0)</span></a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================End Search page Area Area =================-->

        <!--================Check Now Area =================-->
                    <div class="check_now_area check_now_box">
                    <div class="row m-0 justify-content-between">
                        <div class="left">
                            <div class="media">
                                <div class="d-flex">
                                    <img src="assets/images/check-4.png" alt="">
                                    <img src="assets/images/check-5.png" alt="">
                                    <img src="assets/images/check-6.png" alt="">
                                </div>
                                <div class="media-body">
                                    <h4>
                                    Bạn nghi ngờ mình lây nhiễm ?
                                    </h4>
                                 <p>
                                    Hãy thử một bài kiểm tra đơn giản để biết bạn có lây nhiễm không.
                                </p>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <a class="icon_btn" href="#">Kiểm tra ngay <i class="linearicons-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    <!--================End Check Now Area =================-->
    <!--================App Area =================-->
    <section class="app_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="app_text">
              <h2>Tải<span> Epidemic</span> ứng dụng!</h2>
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
    <!--================End App Area =================-->    <!--================Footer Area =================-->
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