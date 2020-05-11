<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Khu Đô Thị Sinh Thái Aqua City Biên Hòa - PKD Novaland</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.4/dist/css/uikit.min.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/app.css">
    <!--JS-->
    <script
        src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.2.0/dist/lazyload.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.4/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v5.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="2428809380682169"
     logged_in_greeting="Bạn cần cắt HTML/CSS? Hãy chat ngay với chúng tôi"
     logged_out_greeting="Bạn cần cắt HTML/CSS? Hãy chat ngay với chúng tôi">
</div>
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden">
    <nav id="header" class="uk-navbar-container uk-background-default uk-navbar-transparent uk-box-shadow-medium" uk-navbar uk-sticky>
        <div class="uk-navbar-left">
            <a class="uk-navbar-item uk-logo" href="."><img src="images/aqua-city-logo.png" alt=""></a>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@l" uk-scrollspy-nav="closest: li; scroll: true; offset: 80">
                <li><a href="#home">TRANG CHỦ</a></li>
                <li><a href="#about">GIỚI THIỆU</a></li>
                <li><a href="#">VỊ TRÍ</a></li>
                <li><a href="#">TIỆN ÍCH</a></li>
                <li><a href="#">MẶT BẰNG</a></li>
                <li><a href="#">THIẾT KẾ</a></li>
                <li><a href="#">THANH TOÁN</a></li>
                <li><a href="#">TIN TỨC</a></li>
            </ul>
        </div>
    </nav>
    <div id="home" class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: scale; autoplay: true;">
        <div id="bg_slider" class="uk-position-bottom-center uk-background-cover uk-position-z-index" data-src="images/edge-1.png" uk-img></div>
        <ul class="uk-slideshow-items">
            <li>
                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="images/e65c966cb6fe4fa016ef-1536x862.jpg" alt="" uk-cover>
                </div>
            </li>
            <li>
                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-right">
                    <img src="images/EliteVilla_Cam006-water-marked-1536x956.jpg" alt="" uk-cover>
                </div>
            </li>
            <li>
                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-left">
                    <img src="images/H9003-CloseUp_Elite_Villa_Garden-1536x864.jpg" alt="" uk-cover>
                </div>
            </li>
            <li>
                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-left">
                    <img src="images/Kayak_ClubHouse_The-Elite-1-1536x690.jpg" alt="" uk-cover>
                </div>
            </li>
        </ul>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-position-z-index" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-position-z-index" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>
    <div id="about" class="uk-section">
        <div class="uk-container uk-container-x">
            <div class="uk-text-center logo-about">
                <img src="images/logo-aqua-city-300x150.jpg" alt="">
            </div>
            <h4 class="title_1 uk-text-center uk-margin-small"><em>SỐNG XANH THỜI HIỆN ĐẠI</em></h4>
            <div class="desc_1">Khu đô thị sinh thái Aqua City 3 mặt giáp sông, nằm ở xã Long Hưng (Biên Hòa) cạnh sân Golf Long Thành, sở hữu vị trí tam giác TPHCM – Đồng Nai – Vũng Tàu và các tỉnh miền tây. Nằm ngay trên trục đường lớn Hương Lộ 2 (Ngô Quyền nối dài) kết nối lên cao tốc Long Thành Dầu Giây, cư dân chỉ mất 15 phút vào Quận 2. Liền kề sân Golf Long Thành.</div>
            <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-margin-medium uk-text-center" uk-grid>
                <?php
                $data = array(
                    array(
                        "src" => "images/about/tong-quan.svg",
                        "txt" => "Khu đô thị sinh thái",
                    ),
                    array(
                        "src" => "images/about/vi-tri.svg",
                        "txt" => "Vị trí chiến lược",
                    ),
                    array(
                        "src" => "images/about/xanh.svg",
                        "txt" => "Trong lành, tươi mát quanh năm",
                    ),
                    array(
                        "src" => "images/about/novaland.svg",
                        "txt" => "Uy tín từ nhà phát triển Novaland",
                    ),
                    array(
                        "src" => "images/about/phap-ly.svg",
                        "txt" => "Pháp lý rõ ràng",
                    ),
                    array(
                        "src" => "images/about/tag.svg",
                        "txt" => "Thanh toán trong 36 tháng & đợt 1 chỉ 15%",
                    ),
                );
                foreach ($data as $k => $v): ?>
                <div>
                    <div class="uk-text-center uk-margin-small">
                        <div class="box_img uk-margin-auto">
                            <img class="uk-responsive-height" src="<?= $v['src'] ?>" alt="">
                        </div>
                    </div>
                    <div><?= $v['txt'] ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="uk-grid-collapse uk-background-cover uk-light uk-flex-middle" uk-grid data-src="images/vitri/background-pattern.png" uk-img>
        <div class="uk-width-expand">
            <img class="uk-responsive-width uk-width-1-1" src="images/vitri/Mặt-bằng-tổng-thể-1.jpg" alt="">
        </div>
        <div class="uk-width-1-3@l">
            <div class="uk-padding">
                <h4 class="title_2">THÔNG TIN DỰ ÁN</h4>
                <ul class="uk-list uk-list-bullet list1">
                    <li>Tên dự án: Aqua City</li>
                    <li>Phát triển dự án: Tập đoàn Novaland</li>
                    <li>Vị trí: Long Hưng, TP.Biên Hòa, Đồng Nai</li>
                    <li>Quy mô: 1000 hecta bao gồm tiện ích + 5 phân khu</li>
                    <li>Số lượng: 1000 căn</li>
                    <li>Diện tích: 6*20, 8*20, 10*20, 15*20….</li>
                    <li>Loại hình: Nhà phố, biệt thự ven sông, shophouse</li>
                    <li>Thiết kế: 1 trệt 2 lầu</li>
                    <li>Khởi công: 2019</li>
                    <li>Dự kiến bàn giao: năm 2023</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>