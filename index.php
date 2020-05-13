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
                <li><a href="#vitri">VỊ TRÍ</a></li>
                <li><a href="#tienich">TIỆN ÍCH</a></li>
                <li><a href="#matbang">MẶT BẰNG</a></li>
                <li><a href="#thietke">THIẾT KẾ</a></li>
                <li><a href="#thanhtoan">THANH TOÁN</a></li>
                <li><a href="#tintuc">TIN TỨC</a></li>
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
    <div id="about">
        <div class="uk-section">
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
    <div id="vitri">
        <div class="uk-section-small">
            <div class="uk-container uk-container-x">
                <div class="uk-text-uppercase">VỊ TRÍ VÀNG, ĐẮC ĐỊA</div>
                <h3 class="title_3 uk-text-uppercase uk-margin">VỊ TRÍ DỰ ÁN</h3>
                <div class="desc_1">Khu đô thị sinh thái Aqua City nằm tại xã Long Hưng, Biên Hòa, Đồng Nai. Dự án nằm trong Khu Đô Thị Vệ Tinh lơn nhất Đồng Nai. Tọa lạc tại vị trí tâm điểm kết nối các tuyến giao thông huyết mạch liên vùng ngay tại cửa ngõ phía Đông TP.HCM, từ dự án dễ dàng tiếp cận đến TP.HCM và các tỉnh lân cận vùng Đông Nam Bộ.</div>
            </div>
        </div>
        <div class="uk-grid-collapse uk-background-cover uk-light uk-flex-middle" uk-grid data-src="images/vitri/background-pattern.png" uk-img>
            <div class="uk-width-expand">
                <img class="uk-responsive-width uk-width-1-1" src="images/vitri/d8b6e71df54d0f13565c.jpg" alt="">
            </div>
            <div class="uk-width-1-3@l uk-flex-first@l">
                <div class="uk-padding">
                    <h4 class="title_2">KẾT NỐI NHANH CHÓNG TỚI</h4>
                    <ul class="uk-list uk-list-divider list1">
                        <li>
                            <div class="uk-flex uk-flex-between uk-flex-middle">
                                <span>KDL Suối Tiên, KCN Cao Q9</span>
                                <span>5p</span>
                            </div>
                        </li>
                        <li>
                            <div class="uk-flex uk-flex-between uk-flex-middle">
                                <span>Đại Học Quốc Gia TPHCM</span>
                                <span>7p</span>
                            </div>
                        </li>
                        <li>
                            <div class="uk-flex uk-flex-between uk-flex-middle">
                                <span>Trung tâm Biên Hòa & Bình Dương</span>
                                <span>10p</span>
                            </div>
                        </li>
                        <li>
                            <div class="uk-flex uk-flex-between uk-flex-middle">
                                <span>TT Tài Chính Thủ Thiêm</span>
                                <span>15p</span>
                            </div>
                        </li>
                        <li>
                            <div class="uk-flex uk-flex-between uk-flex-middle">
                                <span>Trung tâm TPHCM</span>
                                <span>25p</span>
                            </div>
                        </li>
                        <li>
                            <div class="uk-flex uk-flex-between uk-flex-middle">
                                <span>Cách sân bay Quốc tế Long Thành</span>
                                <span>20p</span>
                            </div>
                        </li>
                        <li>
                            <div class="uk-flex uk-flex-between uk-flex-middle">
                                <span>Trạm cuối Metro Bến Thành – Suối Tiên</span>
                                <span>10p</span>
                            </div>
                        </li>
                    </ul>
                    <a href="" class="uk-button uk-button-secondary uk-width-1-1">xem bản đồ</a>
                </div>
            </div>
        </div>
    </div>
    <div id="tienich" class="uk-section-small">
        <div class="uk-container uk-container-x">
            <div class="uk-text-uppercase">+50 TIỆN ÍCH HẤP DẪN</div>
            <h3 class="title_3 uk-text-uppercase uk-margin">HỆ THỐNG TIỆN ÍCH</h3>
            <div class="desc_1"><a href="">Aqua City Biên Hòa</a> là khu đô thị sinh thái mang lại không gian sống xanh ven sông Đồng Nai. Hệ thống tiện ích nghỉ dưỡng tại đây như, khu thương mại, Club house, hồ bơi. Đặc biệt bến du thuyền tại sông Đồng Nai, cư dân Aqua City có thể trải nghiệm cuộc sống đẳng cấp tại đây. Hệ thống trường mẫu giáo, trường cấp hai tại đây cũng được chú trọng. Khu vui chơi trẻ em, công viên cây xanh…</div>
            <div class="uk-child-width-1-2 uk-margin uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l uk-grid-2 uk-grid-3-s" uk-grid uk-lightbox="animation: slide">
                <?php
                $data = array(
                    array(
                        "src" => "images/tienich/0018.jpg",
                        "txt" => "CLUB KAYAT",
                    ),
                    array(
                        "src" => "images/tienich/e116f1ea7ab49ceac5a5.jpg",
                        "txt" => "CÔNG VIÊN",
                    ),
                    array(
                        "src" => "images/tienich/b690284fc82d2e73773c.jpg",
                        "txt" => "AQUA SPORT",
                    ),
                    array(
                        "src" => "images/tienich/81f0968cdf03395d6012.jpg",
                        "txt" => "CLUBHOUSE",
                    ),
                    array(
                        "src" => "images/tienich/0237ff8ebb015d5f0410.jpg",
                        "txt" => "AQUA MALL",
                    ),
                    array(
                        "src" => "images/tienich/z1738022161292_300564d186b30c50730dae5b80e2cf17.jpg",
                        "txt" => "AQUA MARINA",
                    ),
                    array(
                        "src" => "images/tienich/z1738022173104_9d22bbc0b1d811b3b8b267316d9ab2ae.jpg",
                        "txt" => "SÂN GOLF",
                    ),
                    array(
                        "src" => "images/tienich/z1738022178738_5090deb9c99810c22a578e2dde0b435c.jpg",
                        "txt" => "BẾN DU THUYỀN",
                    ),
                    array(
                        "src" => "images/tienich/z1738022165747_88d5875028d60b82e01c0366bfd26fe4.jpg",
                        "txt" => "PHỐ THƯƠNG MẠI",
                    ),
                    array(
                        "src" => "images/tienich/z1749339255918_effaa20031eab3b1caa2e4234548c2e9.jpg",
                        "txt" => "HỒ BƠI",
                    ),
                );
                foreach ($data as $k => $v): ?>
                    <div>
                        <a href="<?= $v['src'] ?>" data-caption="<?= $v['txt'] ?>">
                            <div class="uk-position-relative uk-light">
                                <div class="uk-cover-container uk-transition-toggle">
                                    <img class="uk-transition-scale-up uk-position-top-left uk-transition-opaque" data-src="<?= $v['src'] ?>" alt="" uk-img uk-cover>
                                    <canvas width="201" height="151"></canvas>
                                </div>
                                <div class="uk-padding-small uk-position-bottom box1_tienich">
                                    <?= $v['txt'] ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="uk-position-relative">
        <div class="uk-background-cover uk-section uk-position-relative uk-width-1-1 uk-position-z-index" data-src="images/e65c966cb6fe4fa016ef-1536x862.jpg" uk-img>
            <div class="uk-container uk-container-expand">
                <div class="uk-flex-center" uk-grid>
                    <div class="uk-width-2-5@l">
                        <div class="uk-card uk-card-default card1">
                            <div class="uk-card-body uk-background-default uk-height-1-1">
                                <div class="uk-text-uppercase uk-text-center">ĐĂNG KÝ ĐỂ NHẬN</div>
                                <h3 class="title_4 uk-text-uppercase uk-text-center uk-margin">ƯU ĐÃI & BẢNG GIÁ</h3>
                                <form>
                                    <fieldset class="uk-fieldset">
                                        <div class="uk-margin">
                                            <input class="uk-input" type="text" placeholder="Tên khách hàng*">
                                        </div>
                                        <div class="uk-margin">
                                            <input class="uk-input" type="tel" placeholder="Số điện thoại*">
                                        </div>
                                        <div class="uk-margin">
                                            <input class="uk-input" type="email" placeholder="Địa chỉ Email*">
                                        </div>
                                        <div class="uk-margin">
                                            <button type="submit" class="uk-button btn1 uk-button-default uk-width-1-1">NHẬN BẢNG GIÁ</button>
                                        </div>
                                    </fieldset>
                                </form>
                                <ul class="uk-list list1 uk-list-bullet">
                                    <li><span>CHIẾT KHẤU TỪ 1% – 20%</span></li>
                                    <li>Trả lãi suất <span>15%/NĂM</span> nếu không mua nữa</li>
                                    <li>Tặng gói thiết kế Sân Vườn <span>450TR</span></li>
                                    <li>Hỗ trợ vay <span>0 GỐC + 0 LÃI</span></li>
                                    <li>Thanh toán 30% ngưng đến lúc nhân nhà</li>
                                    <li>Tặng Viên Kim Cương <span>150TR</span></li>
                                    <li>Trả Góp chỉ 60tr/tháng đến nhận nhà</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="matbang">
        <div class="uk-section-small">
            <div class="uk-container uk-container-x">
                <div class="uk-text-uppercase">THÔNG TIN</div>
                <h3 class="title_3 uk-text-uppercase uk-margin">MẶT BẰNG TỔNG QUAN</h3>
                <div class="desc_1">Aqua City khu đô thị lớn quy mô giai đoạn 1 hơn 305ha, gồm nhiều phân khu thiết kế mẫu nhà theo nhiều chủ đề khác nhau. Quý khách hàng vui lòng “Click vào hình” để xem rõ mặt bằng tổng thể, phân lô từng khu.</div>
                <div class="uk-margin-medium uk-column-1-2@s">
                    <?php
                    $data = array(
                        "Trung tâm thương mại",
                        "Trường học",
                        "Lối Đi Bộ",
                        "Khu thể thao",
                        "Khu vui chơi trẻ em",
                        "Vườn BBQ",
                        "Hệ thống hồ bơi",
                        "Clubhouse",
                        "Khu cắm trại",
                        "Bến Du Thuyền",
                    );
                    foreach ($data as $k => $v): ?>
                    <div class="uk-margin-small">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto"><span class="uk-badge"><?= $k+1 ?></span></div>
                            <div class="uk-width-expand"><?= $v ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <img class="uk-width-1-1" src="images/matbang/e377ff37de55250b7c44-Copy-1024x673.jpg" alt="">
        <div class="uk-container uk-container-x uk-padding-remove">
            <div class="uk-child-width-1-2 uk-margin uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-2 uk-grid-2-s" uk-grid uk-lightbox="animation: slide">
                <?php
                $data = array(
                    array(
                        "src" => "images/matbang/z1636946022337_616862d09f6ac49f11d56ac8f4c8e02a.jpg",
                        "txt" => "Khu Stella",
                    ),
                    array(
                        "src" => "images/matbang/917883aa6ed88886d1c9.jpg",
                        "txt" => "Khu Grand Villa",
                    ),
                    array(
                        "src" => "images/matbang/MB-Valencia-File-moi-5mb.jpg",
                        "txt" => "Khu Valencia",
                    ),
                    array(
                        "src" => "images/matbang/e377ff37de55250b7c44-Copy-1024x673.jpg",
                        "txt" => "Khu Elite",
                    ),
                );
                foreach ($data as $k => $v): ?>
                    <div>
                        <a href="<?= $v['src'] ?>" data-caption="<?= $v['txt'] ?>">
                            <div class="uk-position-relative uk-light sp1">
                                <div class="uk-cover-container uk-transition-toggle">
                                    <img class="uk-transition-scale-up uk-position-top-left uk-transition-opaque" data-src="<?= $v['src'] ?>" alt="" uk-img uk-cover>
                                    <canvas width="300" height="300"></canvas>
                                </div>
                                <div class="uk-overlay uk-overlay-default uk-position-cover"></div>
                                <div class="uk-padding-small uk-position-bottom box1_tienich">
                                    <?= $v['txt'] ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div id="thietke">
        <div class="uk-section-small">
            <div class="uk-container uk-container-x">
                <div class="uk-text-uppercase">THÔNG TIN DỰ ÁN</div>
                <h3 class="title_3 uk-text-uppercase uk-margin">MẪU NHÀ KHU ELITE</h3>
                <div class="desc_1"><strong class="c1">Aqua City khu Elite</strong> được thiết kế nhiều loại diện tích gồm Nhà phố và Shophouse 6*20, nhà phố 8*20, biệt thự
                    <a href="">Aqua City</a> vip view sông từ 200m2 – 400m2 thiết kế sang trọng đẳng cấp.</div>
                <div class="uk-child-width-1-2 uk-margin-medium uk-child-width-1-3@s uk-grid-2 uk-grid-2-s" uk-grid uk-lightbox="animation: slide">
                    <?php
                    $data = array(
                        array(
                            "src" => "images/thietke/z1737432968116_651cf9e0dc4808743c57b0447eba725d.jpg",
                            "txt" => "Nhà Phố 6*20",
                        ),
                        array(
                            "src" => "images/thietke/0029.jpg",
                            "txt" => "Nhà Phố 8*20",
                        ),
                        array(
                            "src" => "images/thietke/0031.jpg",
                            "txt" => "Biệt Thự 10*20",
                        ),
                        array(
                            "src" => "images/thietke/630a4be8dccb27957eda.jpg",
                            "txt" => "Villa Sông 15*20",
                        ),
                        array(
                            "src" => "images/thietke/z1783570394563_1a8297f07196ad4b65afa9b2616c44ba.jpg",
                            "txt" => "Biệt Thự Sông 15*25",
                        ),
                        array(
                            "src" => "images/thietke/7297869111b2eaecb3a3.jpg",
                            "txt" => "Villa Sông 400m2",
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <div>
                            <a href="<?= $v['src'] ?>" data-caption="<?= $v['txt'] ?>">
                                <div class="uk-position-relative uk-light sp1">
                                    <div class="uk-cover-container uk-transition-toggle">
                                        <img class="uk-transition-scale-up uk-position-top-left uk-transition-opaque" data-src="<?= $v['src'] ?>" alt="" uk-img uk-cover>
                                        <canvas width="341" height="193"></canvas>
                                    </div>
                                    <div class="uk-overlay uk-overlay-default uk-position-cover"></div>
                                    <div class="uk-padding-small uk-position-bottom box1_tienich">
                                        <?= $v['txt'] ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-x">
                <h3 class="title_3 uk-text-uppercase uk-margin">MẪU BIỆT THỰ GRAND VILLAS</h3>
                <div class="desc_1"><a href=""><strong>Biệt Thự Aqua City Grand Villas</strong></a> là khu biệt thự đẳng cấp thiết kế theo phong cách Châu Âu, loại diện tích 15*20. Đây là khu riêng biệt đồng bộ, kết cấu 1 trệt 2 lầu, bao quanh sông và khu clubhouse, công viên cây xanh. Chỉ cần thanh toán 30% sở hữu, không gốc, không lãi.</div>
                <div class="uk-position-relative uk-margin uk-visible-toggle uk-light" tabindex="-1" uk-slideshow>

                    <ul class="uk-slideshow-items">
                        <li>
                            <img src="images/thietke/z1683885588000_09d06daa5ac53a3dd3ec75e04212343b.jpg" alt="" uk-cover>
                        </li>
                        <li>
                            <img src="images/thietke/z1690818665263_40f76592ebb7b66ef01ab6092dd396b5.jpg" alt="" uk-cover>
                        </li>
                        <li>
                            <img src="images/thietke/z1690818665508_c89055d571353e8ceb4c2131fe1f7646.jpg" alt="" uk-cover>
                        </li>
                        <li>
                            <img src="images/thietke/z1690818659979_18ecfafdd3aa3c798286d934af0090d9.jpg" alt="" uk-cover>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                    <ul class="uk-slideshow-nav uk-position-bottom-center uk-dotnav uk-flex-center uk-margin"></ul>

                </div>
                <div class="uk-child-width-1-2 uk-margin uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-2 uk-grid-2-s" uk-grid uk-lightbox="animation: slide">
                    <?php
                    $data = array(
                        array(
                            "src" => "images/thietke/z1730978169957_acbac475794134705b492435d498af7b.jpg",
                        ),
                        array(
                            "src" => "images/thietke/z1730978176675_8cbdba345b38c81db5d4761661ab3b84.jpg",
                        ),
                        array(
                            "src" => "images/thietke/z1730978178133_79983a50772249bbe78f9bb26e5cc6bb.jpg",
                        ),
                        array(
                            "src" => "images/thietke/z1730978184698_9f4f4418d1f6acbd6e400277f0072057.jpg",
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <div>
                            <a href="<?= $v['src'] ?>" data-caption="">
                                <div class="uk-position-relative uk-light sp1">
                                    <div class="uk-cover-container uk-transition-toggle">
                                        <img class="uk-transition-scale-up uk-position-top-left uk-transition-opaque" data-src="<?= $v['src'] ?>" alt="" uk-img uk-cover>
                                        <canvas width="252" height="178"></canvas>
                                    </div>
                                    <div class="uk-overlay uk-overlay-default uk-position-cover"></div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-x">
                <h3 class="title_3 uk-text-uppercase uk-margin">LAYOUT KHU VALENCIA</h3>
                <div class="desc_1"><a href=""><strong>Aqua City Valencia</strong></a> thuộc phân kì mới của khu đô thị Aqua City thiết kế theo phong cách Tây Ban Nha, nằm ngay trục đường chính Nam Cao nối lên sân Golf Long Thành, trục đường 45m của khu Stella, gồm nhà phố 6*19.5m, 7*19.5m, 8*19.5m và Shophouse 6*19,5m. “Click” vào hình xem rõ layout</div>
                <div class="uk-child-width-1-2 uk-margin uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-2 uk-grid-2-s" uk-grid uk-lightbox="animation: slide">
                    <?php
                    $data = array(
                        array(
                            "src" => "images/VALENCIA/5-195m.jpg",
                            "txt" => "Townhouse 5*19.5m",
                        ),
                        array(
                            "src" => "images/VALENCIA/6-19.jpg",
                            "txt" => "Townhouse 6*19.5m",
                        ),
                        array(
                            "src" => "images/VALENCIA/shop-3.jpg",
                            "txt" => "Shophouse 6*19,5m",
                        ),
                        array(
                            "src" => "images/VALENCIA/shop-6-195.jpg",
                            "txt" => "Shophouse 6*19,5m",
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <div>
                            <a href="<?= $v['src'] ?>" data-caption="<?= $v['txt'] ?>">
                                <div class="uk-position-relative uk-light sp1">
                                    <div class="uk-cover-container uk-transition-toggle">
                                        <img class="uk-transition-scale-up uk-position-top-left uk-transition-opaque" data-src="<?= $v['src'] ?>" alt="" uk-img uk-cover>
                                        <canvas width="252" height="252"></canvas>
                                    </div>
                                    <div class="uk-overlay uk-overlay-default uk-position-cover"></div>
                                    <div class="uk-padding-small uk-position-bottom box1_tienich">
                                        <?= $v['txt'] ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-x">
                <h3 class="title_3 uk-text-uppercase uk-margin">LAYOUT KHU STELLA</h3>
                <div class="desc_1"><a href=""><strong>Aqua City Stella</strong></a> được thiết kế theophong cách Châu Âu với diện tích sân vườn lên đến 36m2 gồm nhà phố 6*20, 6*25, Shophouse 6*20 trục đường lớn 45m nối ra sân Golf Long Thành. Biệt thự song lập 10*24m, thiết kế đẳng cấp, sang trọng, hiện tại đang cho khách hàng booking có hoàn lại. “Click” vào hình để xem rõ layout.</div>
                <div class="uk-child-width-1-2 uk-margin uk-child-width-1-2@s uk-child-width-1-2@m uk-grid-2 uk-grid-2-s" uk-grid uk-lightbox="animation: slide">
                    <?php
                    $data = array(
                        array(
                            "src" => "images/STELLA/c4ca781e0314f94aa005.jpg",
                        ),
                        array(
                            "src" => "images/STELLA/cdd5299c5296a8c8f187.jpg",
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <div>
                            <a href="<?= $v['src'] ?>" data-caption="">
                                <div class="uk-position-relative uk-light sp1">
                                    <div class="uk-cover-container uk-transition-toggle">
                                        <img class="uk-transition-scale-up uk-position-top-left uk-transition-opaque" data-src="<?= $v['src'] ?>" alt="" uk-img uk-cover>
                                        <canvas width="508" height="381"></canvas>
                                    </div>
                                    <div class="uk-overlay uk-overlay-default uk-position-cover"></div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div id="thanhtoan">
        <div class="uk-section-small">
            <div class="uk-container uk-container-x">
                <div class="uk-text-uppercase">THANH TOÁN CHỈ 52 TRIỆU/THÁNG</div>
                <h3 class="title_3 uk-text-uppercase uk-margin">TIẾN ĐỘ THANH TOÁN</h3>
                <div class="desc_1">Mỗi khu Aqua City tiến độ thanh toán khác nhau. Để cập nhật tiến độ thanh toán từng khu quý khách hàng liên hệ PKD Novaland 0898.797.712. Sau đây là tiến độ thanh toán <strong>Aqua City Stella, trả góp chỉ 1%/ tháng</strong> đến lúc nhận nhà.</div>
                <div class="uk-margin uk-text-center">
                    <div><img src="images/thanhtoan/0001.jpg" alt=""></div>
                    <div><img class="uk-width-1-1@l" src="images/thanhtoan/0003.jpg" alt=""></div>
                </div>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-x">
                <h3 class="title_3 uk-text-uppercase uk-margin">TIẾN ĐỘ XÂY DỰNG</h3>
                <div class="desc_1">Hiện tại Aqua City đã có nhà mẫu để khách hàng tham quan. Hình ảnh giống nhà mẫu 100%. Quý khách hàng vui lòng liên hệ PKD Novaland 0898.797.712 để nhận ưu đãi và có xe đi tham quan dự án miễn phí. Chúng tôi sẽ luôn cập nhật hình ảnh cập nhật mới nhất</div>
                <div class="uk-child-width-1-2 uk-margin uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-2 uk-grid-2-s" uk-grid uk-lightbox="animation: slide">
                    <?php
                    $data = array(
                        array(
                            "src" => "images/xaydung/z1854036691201_d650479b833fa7fdd4769012f447d959-1024x725.jpg",
                        ),
                        array(
                            "src" => "images/xaydung/z1862107583005_f9f1870dd21f6e8a83515083e1cc7c66-1024x768.jpg",
                        ),
                        array(
                            "src" => "images/xaydung/z1864053073408_5c39b525aa2d730df1bba774748a8a49.jpg",
                        ),
                        array(
                            "src" => "images/xaydung/z1864053095177_e5041c8e268a23de0daf500392760e89.jpg",
                        ),
                        array(
                            "src" => "images/xaydung/z1864053100243_031edd35dd1a481e5304f166a2a8c9e0.jpg",
                        ),
                        array(
                            "src" => "images/xaydung/z1864053108931_77377eaecbfabb861913717260799ee0.jpg",
                        ),
                        array(
                            "src" => "images/xaydung/z1864053122933_66fc125e5a0b37c07e92ea177e395562.jpg",
                        ),
                        array(
                            "src" => "images/xaydung/z1864053115627_bb47b34434d05010b1b8a026cb89c76a.jpg",
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <div>
                            <a href="<?= $v['src'] ?>" data-caption="">
                                <div class="uk-position-relative uk-light sp1">
                                    <div class="uk-cover-container uk-transition-toggle">
                                        <img class="uk-transition-scale-up uk-position-top-left uk-transition-opaque" data-src="<?= $v['src'] ?>" alt="" uk-img uk-cover>
                                        <canvas width="252" height="142"></canvas>
                                    </div>
                                    <div class="uk-overlay uk-overlay-default uk-position-cover"></div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-position-relative">
        <div class="bg1 uk-background-cover uk-position-cover" data-src="images/bg/st-v2-up1.jpg" uk-img></div>
        <div class="uk-position-relative uk-position-z-index uk-section">
            <div class="uk-container uk-container-x">
                <div class="uk-flex-left" uk-grid>
                    <div class="uk-width-3-5@l">
                        <div class="uk-card uk-card-default card1">
                            <div class="uk-card-body uk-background-default uk-height-1-1">
                                <div class="uk-text-uppercase uk-text-center">ĐĂNG KÝ ĐỂ NHẬN</div>
                                <h3 class="title_4 uk-text-uppercase uk-text-center uk-margin">ƯU ĐÃI & BẢNG GIÁ</h3>
                                <form>
                                    <fieldset class="uk-fieldset">
                                        <div class="uk-margin">
                                            <input class="uk-input" type="text" placeholder="Tên khách hàng*">
                                        </div>
                                        <div class="uk-margin">
                                            <input class="uk-input" type="tel" placeholder="Số điện thoại*">
                                        </div>
                                        <div class="uk-margin">
                                            <input class="uk-input" type="email" placeholder="Địa chỉ Email*">
                                        </div>
                                        <div class="uk-margin">
                                            <button type="submit" class="uk-button btn1 uk-button-default uk-width-1-1">NHẬN BẢNG GIÁ</button>
                                        </div>
                                    </fieldset>
                                </form>
                                <ul class="uk-list list1 uk-list-bullet">
                                    <li><span>CHIẾT KHẤU TỪ 1% – 20%</span></li>
                                    <li>Trả lãi suất <span>15%/NĂM</span> nếu không mua nữa</li>
                                    <li>Tặng gói thiết kế Sân Vườn <span>450TR</span></li>
                                    <li>Hỗ trợ vay <span>0 GỐC + 0 LÃI</span></li>
                                    <li>Thanh toán 30% ngưng đến lúc nhân nhà</li>
                                    <li>Tặng Viên Kim Cương <span>150TR</span></li>
                                    <li>Trả Góp chỉ 60tr/tháng đến nhận nhà</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tintuc">
        <div class="uk-section-small">
            <div class="uk-container uk-container-x">
                <h4 class="title_1 uk-text-center uk-margin-small"><span>TIN TỨC DỰ ÁN</span></h4>
                <div class="desc_1 uk-text-center">Cập nhật tin tức dự án mới nhất</div>
            </div>
        </div>
    </div>
    <div class="uk-position-relative">
        <div class="bg2 uk-background-cover uk-position-cover" data-src="images/bg/tong-quan-aqua-city.jpg" uk-img></div>
        <div class="uk-position-relative uk-position-z-index uk-section-large">
            <div class="uk-container uk-container-x">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-2-5@m">
                        <div class="uk-text-center uk-light">
                            <div><img style="width: 200px;" src="images/bg/logo-aqua-white.svg" alt=""></div>
                            <h4 class="title_1 uk-text-center uk-margin">SÀN GIAO DỊCH DỰ ÁN</h4>
                            <ul class="uk-list">
                                <li>181 Hàm Nghi, phường Nguyễn Thái Bình, Quận 1, HCM</li>
                                <li><span uk-icon="icon: receiver; ratio: 1"></span> 0898 797 712 | 0363 624 265</li>
                                <li><span uk-icon="icon: mail; ratio: 1"></span> huong.lethithu3@novaland.com.vn</li>
                                <li>Thời gian làm việc: 8:00 – 18:00 Các ngày trong tuần</li>
                            </ul>
                            <h4 class="title_1 uk-text-center uk-margin">NHÀ PHÁT TRIỂN DỰ ÁN</h4>
                            <div><img style="width: 150px;" src="images/bg/novaland-logo.svg" alt=""></div>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="uk-card uk-card-default card1">
                            <div class="uk-card-body uk-background-default uk-height-1-1">
                                <div class="uk-text-uppercase uk-text-center">ĐĂNG KÝ ĐỂ NHẬN</div>
                                <h3 class="title_4 uk-text-uppercase uk-text-center uk-margin">ƯU ĐÃI & BẢNG GIÁ</h3>
                                <form>
                                    <fieldset class="uk-fieldset">
                                        <div class="uk-margin">
                                            <input class="uk-input" type="text" placeholder="Tên khách hàng*">
                                        </div>
                                        <div class="uk-margin">
                                            <input class="uk-input" type="tel" placeholder="Số điện thoại*">
                                        </div>
                                        <div class="uk-margin">
                                            <input class="uk-input" type="email" placeholder="Địa chỉ Email*">
                                        </div>
                                        <div class="uk-margin">
                                            <button type="submit" class="uk-button btn1 uk-button-default uk-width-1-1">NHẬN BẢNG GIÁ</button>
                                        </div>
                                    </fieldset>
                                </form>
                                <div class="desc_1">*Mọi thông tin về dự án Aqua City quý khách có thể liên hệ ngay với chúng tôi qua hotline hoặc form đăng ký.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer" class="uk-section-xsmall uk-background-muted uk-text-center">
        <div class="uk-container uk-container-x">
            <div class="desc_1 uk-text-center">Copyright 2020 © <strong>Aqua City</strong> - Dev by cathtmlcss.net</div>
        </div>
    </div>
</div>
</body>
</html>