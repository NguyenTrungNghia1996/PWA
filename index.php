<?php
$l = explode(".", $_SERVER['HTTP_HOST']);
$filename = $l[0] . "_manifest.json";
if (file_exists("./manifest/" . $filename)) {
    $filename = "./manifest/" . $filename;
} else {
    $filename = "./manifest/default_manifest.json";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link rel="manifest" href="<?php echo($filename) ?>">
    <link rel="stylesheet" href="stylesvn.css">
</head>
<body>
<img id="myImg" src="df.webp" width="0%" height="0%" alt="">
<div class="container">
    <div class="row">
        <div class="w-item wf-topbar style-1 col-xs-12">
            <div class="w-inner">
                <div class="container">
                    <div class="navbar">
                        <ul class="nav pull-left">
                            <li><a href="javascript:void(0)"><span><i class="ico ico_common phone"></i>Hotline: <strong
                                                class="hightlight">0898.081.819</strong> - Quảng Cáo: <strong
                                                class="hightlight">0964.705.888</strong></span></a></li>
                        </ul>
                        <ul class="nav pull-left">
                            <!--li><a href="https://tintuc.vn/tin-dia-phuong" class="uppercase hightlight">Tin tức 63 tỉnh</a></li-->
                            <li><a href="https://tintuc.vn/tin-tuc-24h" class="uppercase">Tin mới</a></li>
                        </ul>
                        <ul class="nav pull-left" id="header_address"></ul>
                        <ul class="nav pull-right">
                            <li>
                                <form id="SearchForm" action="https://tintuc.vn/tim-kiem" method="get">
                                    <div class="input-group"><input class="input-group-field input-quiet" type="text"
                                                                    placeholder="Tìm kiếm" name="q">
                                        <div class="input-group-button">
                                            <button type="submit" class="button-quiet"><i
                                                        class="search ico ico_common"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-item wf-banner style-1 col-xs-12">
            <div class="logo-wrap col-xs-3 no-pad"><!--<h1>--><a href="https://tintuc.vn" class="logo"
                                                                 title="Đọc Báo Tin Tức Việt Nam"><p
                            style="background: transparent url(https://static.tintuc.com.vn/tintuc/icon/logo.png) 0 0 no-repeat; background-size: 86%">
                        Đọc Báo Tin Tức Việt Nam</p></a><!--</h1>--></div>
            <div class="col-xs-9 no-pad" style="max-height:100px !important;overflow: hidden !important;">
                <div class="ad_topPopup" style="display:none;">
                    <div align="center" class="center_ads"><span>Hãy Cho Phép (Allow) để xác nhận bạn đủ 18 tuổi để truy cập tất cả các nội dung của TinTuc.Vn</span>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                <div class="ads_topHeader"><!--ads_header--><!-- Dautrang_pc_us -->
                    <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px"
                         data-ad-client="ca-pub-1405858229168267" data-ad-slot="3789049465"></ins>
                    <script>     (adsbygoogle = window.adsbygoogle || []).push({});</script>
                </div>
            </div>
        </div>
    </div>
    <div class="lwrap lt-home desktop">
        <div class="lpos lpos-0">
            <div class="row">
                <div class="w-item w-825 col-xs-12 wf-menu hor ">
                    <div class="w-inner">
                        <ul class="nav main-nav has-indicator" id="MenuHorz">
                            <li class="active"><a href="https://tintuc.vn" title="Trang chủ"><i
                                            class="ico ico_20x16 home no-mg"></i><span class="indicator"></span></a>
                            </li>
                            <li class=""><a href="https://tintuc.vn/xa-hoi" target="_self" title="Xã hội">Xã hội<span
                                            class="indicator"></span></a></li>
                            <li class=""><a href="https://tintuc.vn/phap-luat" target="_self" title="Pháp luật">Pháp
                                    luật<span class="indicator"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="lpos lpos-1">
            <div class="row" data-sticky_parent="">
                <div class="w-item w-12 col-xs-12 wf-home style-1 height-wrap">
                    <div class="w-inner">
                        <div class="w480 pull-left height-target">
                            <div class="media">
                                <a class="block"
                                   href="https://tintuc.vn/mien-phi-xang-tren-toan-quoc-cho-ong-doan-ngoc-hai-ai-la-nguoi-chi-dao-post1935656"
                                   title="Miễn phí xăng trên toàn quốc cho ông Đoàn Ngọc Hải: Ai là người chỉ đạo?"><img
                                            class="thumbnail"
                                            src="https://static.tintuc.com.vn/images/ver3/2021/03/04/1614834464238-1614828947420-1614825919733-photo1614823850852-1614823851091587408157.png"
                                            alt="Miễn phí xăng trên toàn quốc cho ông Đoàn Ngọc Hải: Ai là người chỉ đạo?"
                                            style="min-height:257px"> </a>
                                <h2 class="heading"><a class="huge ovl"
                                                       href="https://tintuc.vn/mien-phi-xang-tren-toan-quoc-cho-ong-doan-ngoc-hai-ai-la-nguoi-chi-dao-post1935656"
                                                       title="Miễn phí xăng trên toàn quốc cho ông Đoàn Ngọc Hải: Ai là người chỉ đạo?">Miễn
                                        phí xăng trên toàn quốc cho ông Đoàn Ngọc Hải: Ai là người chỉ đạo?</a>
                                    <time class="time friendly rel-time" datetime="2021-03-04 10:35:46"></time>
                                </h2>
                                <p class="sapo">"Anh Dương chủ tịch chỉ đạo?" - Ông Đoàn Ngọc Hải chia sẻ trên FB. Vậy
                                    "anh Dương chủ tịch" là ai?</p>
                            </div>
                        </div>
                        <div class="w315 pull-left height-apply">
                            <div class="tabs-wrap" id="">
                                <div class="tabs-content">
                                    <div class="tabs-panel active" id="" style="height: 420px;">
                                        <div class="swiper-container scroll-content swiper-container-vertical">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide swiper-slide-active">
                                                    <div class="w-inner">
                                                        <div class="w-body">
                                                            <div class="media" id="">
                                                                <div class="media-left"><a class="block"
                                                                                           href="https://tintuc.vn/thanh-nien-chay-xe-may-khong-qua-noi-mieng-cong-va-vu-tai-nan-trong-dem-khien-nhieu-nguoi-ta-hoa-post1935623"
                                                                                           title="Thanh niên chạy xe máy không qua nổi miệng cống và vụ tai nạn trong đêm khiến nhiều người tá hoả">
                                                                        <div class="pos-rel"><img class="thumbnail w100"
                                                                                                  src="https://static.tintuc.com.vn/images/ver3/2021/03/04/150x100/1614831368266-miegncong.jpg"
                                                                                                  alt="Thanh niên chạy xe máy không qua nổi miệng cống và vụ tai nạn trong đêm khiến nhiều người tá hoả">
                                                                        </div>
                                                                    </a></div>
                                                                <div class="media-body">
                                                                    <h3 class="heading normal"><a
                                                                                href="https://tintuc.vn/thanh-nien-chay-xe-may-khong-qua-noi-mieng-cong-va-vu-tai-nan-trong-dem-khien-nhieu-nguoi-ta-hoa-post1935623"
                                                                                title="Thanh niên chạy xe máy không qua nổi miệng cống và vụ tai nạn trong đêm khiến nhiều người tá hoả">Thanh
                                                                            niên chạy xe máy không qua nổi miệng cống và
                                                                            vụ tai nạn trong đêm khiến nhiều người tá
                                                                            hoả</a>
                                                                        <time class="time friendly rel-time"
                                                                              datetime="2021-03-04 11:16:07"></time>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-scrollbar" style="opacity: 0; display: none;">
                                                <div class="swiper-scrollbar-drag" style="height: 126px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w184 pull-right height-apply">
                            <div class="tabs-wrap" id="">
                                <ul class="tabs height-sub nav expanded has-indicator">
                                    <li class="tabs-title active"><a href="javascript:void();" title="Tiện ích">Tiện ích<span
                                                    class="indicator"></span></a></li>
                                </ul>
                                <div class="tabs-content">
                                    <div class="tabs-panel active" id="" style="height: 389px;">
                                        <div class="swiper-container scroll-content swiper-container-vertical">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide wf-gadgets swiper-slide-active">
                                                    <div class="w-body">
                                                        <ul class="nav icon-top row col-up-2 no-mg items">
                                                            <li class="col" style="margin:1px 0px;"><a
                                                                        href="https://tintuc.vn/chu-de/gia-vang-hom-nay-17?utm_source=tienich_pc&amp;utm_medium=gia_vang"
                                                                        title="Giá vàng" rel="nofollow"> <img
                                                                            src="https://static.tintuc.com.vn/addon/gia-vang.png"
                                                                            alt="Giá vàng"> <span>Giá vàng</span> </a>
                                                            </li>
                                                            <li class="col" style="margin:1px 0px;"><a
                                                                        href="https://tintuc.vn/chu-de/ty-gia-ngoai-te-121?utm_source=tienich_pc&amp;utm_medium=ty_gia"
                                                                        title="Ngoại tệ" rel="nofollow"> <img
                                                                            src="https://static.tintuc.com.vn/addon/ty-gia.png"
                                                                            alt="Tỷ giá"> <span>Tỷ giá</span> </a></li>
                                                            <li class="col" style="margin:1px 0px;"><a target="_blank"
                                                                                                       href="https://xoso.tintuc.vn/?utm_source=tienich_pc&amp;utm_medium=xo_so"
                                                                                                       title="Kết quả xổ số">
                                                                    <img src="https://static.tintuc.com.vn/addon/xo-so.png"
                                                                         alt="Kết quả xổ số"> <span>Xổ số</span> </a>
                                                            </li>
                                                            <li class="col" style="margin:1px 0px;"><a
                                                                        href="https://bongda.tintuc.vn/ket-qua-bong-da?utm_source=tienich_pc&amp;utm_medium=bong_da"
                                                                        title="Kết quả bóng đá"> <img
                                                                            src="https://static.tintuc.com.vn/addon/bong-da.png"
                                                                            alt="Kết quả bóng đá"> <span>Bóng đá</span>
                                                                </a></li>
                                                            <li class="col" style="margin:1px 0px;"><a
                                                                        href="https://gamevui.tintuc.vn/?utm_source=tienich_pc&amp;utm_medium=game"
                                                                        title="Trò chơi"> <img
                                                                            src="https://static.tintuc.com.vn/addon/game.png"
                                                                            alt="Trò chơi"> <span>Trò chơi</span> </a>
                                                            </li>
                                                            <li class="col" style="margin:1px 0px;"><a target="_blank"
                                                                                                       href="https://bigshare.tintuc.vn/?utm_source=tienich_pc&amp;utm_medium=free_card"
                                                                                                       title="Kiếm tiền online">
                                                                    <img src="https://static.tintuc.com.vn/addon/card.png"
                                                                         alt="Kiếm tiền online">
                                                                    <span>Cộng tác viên</span> </a></li>
                                                            <li class="col" style="margin:1px 0px;"><a
                                                                        href="https://tintuc.vn/chu-de/thoi-tiet-hom-nay-18?utm_source=tienich_pc&amp;utm_medium=thoi_tiet"
                                                                        title="Dự báo thời tiết" rel="nofollow"> <img
                                                                            src="https://static.tintuc.com.vn/addon/thoi-tiet.png"
                                                                            alt="Thời tiết"> <span>Thời tiết</span> </a>
                                                            </li>
                                                            <li class="col" style="margin:1px 0px;"><a
                                                                        href="https://tintuc.vn/su-kien/lai-suat-ngan-hang-335871?utm_source=tienich_pc&amp;utm_medium=lai_suat"
                                                                        title="Lãi suất gửi tiết kiệm ngân hàng"
                                                                        rel="nofollow"> <img
                                                                            src="https://static.tintuc.com.vn/addon/bank.png"
                                                                            alt="Lãi suất"> <span>Lãi suất</span> </a>
                                                            </li>
                                                        </ul>
                                                    </div><!--ul class="nav vertical"></ul--></div>
                                            </div><!--div class="swiper-scrollbar"></div--></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-item w-11 col-xs-8 wf-groupwidget  w672 no-pad-r bdr-t-inner height-wrap">
                    <div class="w-item w-40 col-xs-12 wf-listpost style-1">
                        <div class="w-inner">
                            <div class="wbox">
                                <div class="w-body list page24h">
                                    <div class="media col-xs-4 clearfix">
                                        <div class="">
                                            <a class="block pos-rel" href="https://tintuc.vn/bat-them-nhieu-doi-tuong-vu-hon-chien-nhu-phim-tai-can-tho-post1935721" title="Bắt thêm nhiều đối tượng vụ hỗn chiến như phim tại Cần Thơ">
                                                <img class="thumbnail" src="https://static.tintuc.com.vn/images/ver3/2021/03/04/300x200/1614837304059-1614834436227-1-xam-tro-16148306929131372756836-crop-1614830758751473937995.jpg" alt="Bắt thêm nhiều đối tượng vụ hỗn chiến như phim tại Cần Thơ" width="100%">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <p class="smaller">
                                                <a class="dim" href="https://tintuc.vn/phap-luat"><b>Pháp luật</b></a> <span class="dim" datetime="2021-03-04 12:55:04">- 04/03/2021 12:55</span>
                                            </p>
                                            <h3 class="heading"><a class="pretty-big" href="https://tintuc.vn/bat-them-nhieu-doi-tuong-vu-hon-chien-nhu-phim-tai-can-tho-post1935721" title="Bắt thêm nhiều đối tượng vụ hỗn chiến như phim tại Cần Thơ">Bắt thêm nhiều đối tượng vụ hỗn chiến như phim tại Cần Thơ</a></h3>
                                            <p class="sapo">Công an TP Cần Thơ đã bắt thêm nhiều đối tượng đang lẩn trốn tại nhiều tỉnh, thành tham gia vụ hỗn chiến có sử...</p>
                                        </div>
                                    </div>
                                    <div class="media col-xs-4 ">
                                        <div class="">
                                            <a class="block pos-rel" href="https://tintuc.vn/ke-cuop-giat-khien-2-nguoi-tu-vong-o-quan-tan-phu-da-tron-o-dau-post1935676" title="Kẻ cướp giật khiến 2 người tử vong ở quận Tân Phú đã trốn ở đâu?">
                                                <img class="thumbnail" src="https://static.tintuc.com.vn/images/ver3/2021/03/04/300x200/1614830624181-capture.png" alt="Kẻ cướp giật khiến 2 người tử vong ở quận Tân Phú đã trốn ở đâu?" width="100%">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <p class="smaller">
                                                <a class="dim" href="https://tintuc.vn/phap-luat"><b>Pháp luật</b></a> <span class="dim" datetime="2021-03-04 11:03:44">- 04/03/2021 11:03</span>
                                            </p>
                                            <h3 class="heading"><a class="pretty-big" href="https://tintuc.vn/ke-cuop-giat-khien-2-nguoi-tu-vong-o-quan-tan-phu-da-tron-o-dau-post1935676" title="Kẻ cướp giật khiến 2 người tử vong ở quận Tân Phú đã trốn ở đâu?">Kẻ cướp giật khiến 2 người tử vong ở quận Tân Phú đã trốn ở đâu?</a></h3>
                                            <p class="sapo">Sau khi thấy đồng bọn chết tại hiện trường ở quận Tân Phú, TP.HCM, kẻ cướp đã dựng xe bỏ chạy vào Bệnh viện...</p>
                                        </div>
                                    </div>
                                    <div class="media col-xs-4">
                                        <div class="">
                                            <a class="block pos-rel" href="https://tintuc.vn/bat-nguyen-chu-tich-thi-tran-lap-ho-so-cap-dat-trai-quy-dinh-post1935677" title="Bắt nguyên chủ tịch thị trấn lập hồ sơ cấp đất trái quy định">
                                                <img class="thumbnail" src="https://static.tintuc.com.vn/images/ver3/2021/03/04/300x200/1614829700919-1614827562933-untitled-1-copy21-1614822189811988281419.jpg" alt="Bắt nguyên chủ tịch thị trấn lập hồ sơ cấp đất trái quy định" width="100%">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <p class="smaller">
                                                <a class="dim" href="https://tintuc.vn/phap-luat"><b>Pháp luật</b></a> <span class="dim" datetime="2021-03-04 10:48:20">- 04/03/2021 10:48</span>
                                            </p>
                                            <h3 class="heading"><a class="pretty-big" href="https://tintuc.vn/bat-nguyen-chu-tich-thi-tran-lap-ho-so-cap-dat-trai-quy-dinh-post1935677" title="Bắt nguyên chủ tịch thị trấn lập hồ sơ cấp đất trái quy định">Bắt nguyên chủ tịch thị trấn lập hồ sơ cấp đất trái quy định</a></h3>
                                            <p class="sapo">Mặc dù nhiều diện tích đất nằm không đủ điều kiện cấp đất, nhưng 2 nguyên cán bộ thị trấn Ngọc Lặc (Thanh...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gw-item col-xs-12 wf-boxcats style-7 ">
                        <div class="w-inner">
                            <div class="w-head"><h3 class="w-title"><a href="https://tintuc.vn/the-thao" title="Thể thao">Tin ngày 4/3/2021</a></h3>
                            </div>
                            <div class="w-body">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <div class="media"><a class="block"
                                                              href="https://tintuc.vn/sau-klopp-den-luot-solskjaer-cam-cua-hoc-tro-ve-phuc-vu-dtqg-post1935764"
                                                              title="Sau Klopp, đến lượt Solskjaer cấm cửa học trò về phục vụ ĐTQG">
                                                <div class="pos-rel"><img class="thumbnail"
                                                                          src="https://static.tintuc.com.vn/images/ver3/2021/03/04/1614844396725-1614844100247-solskjaer.jpg"
                                                                          alt="Sau Klopp, đến lượt Solskjaer cấm cửa học trò về phục vụ ĐTQG">
                                                </div>
                                            </a>
                                            <h2 class="heading"><a class="big ovl"
                                                                   href="https://tintuc.vn/sau-klopp-den-luot-solskjaer-cam-cua-hoc-tro-ve-phuc-vu-dtqg-post1935764"
                                                                   title="Sau Klopp, đến lượt Solskjaer cấm cửa học trò về phục vụ ĐTQG">Sau
                                                    Klopp, đến lượt Solskjaer cấm cửa học trò về phục vụ ĐTQG</a>
                                                <time class="time friendly rel-time"
                                                      datetime="2021-03-04 14:53:16"></time>
                                            </h2>
                                            <p class="sapo">HLV Ole Gunnar Solskjaer đã để ngỏ khả năng sẵn sàng ngăn
                                                cản tiền vệ Bruno Fernandes trở về làm nghĩa vụ quốc tế với ĐT Bồ Đào
                                                Nha vào tháng tới.</p></div>
                                    </div>
                                    <div class="col-xs-5">
                                        <div class="media" id="">
                                            <div class="media-left"><a class="block"
                                                                       href="https://tintuc.vn/solskjaer-da-den-luc-tin-tuong-henderson-post1935747"
                                                                       title="Solskjaer, đã đến lúc tin tưởng Henderson!">
                                                    <div class="pos-rel"><img class="thumbnail w100"
                                                                              src="https://static.tintuc.com.vn/images/ver3/2021/03/04/150x100/1614840517718-1614839722098-den-henderson1.jpg"
                                                                              alt="Solskjaer, đã đến lúc tin tưởng Henderson!">
                                                    </div>
                                                </a></div>
                                            <div class="media-body">
                                                <h3 class="heading normal"><a
                                                            href="https://tintuc.vn/solskjaer-da-den-luc-tin-tuong-henderson-post1935747"
                                                            title="Solskjaer, đã đến lúc tin tưởng Henderson!">Solskjaer,
                                                        đã đến lúc tin tưởng Henderson!</a>
                                                    <time class="time friendly rel-time"
                                                          datetime="2021-03-04 13:48:37"></time>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-item w-12 col-xs-4 wf-groupwidget  w324 no-pad-l">
                    <div class="w-inner">
                        <div class="row gwwrap">
                            <div class="gw-item w-14 col-xs-12 wf-boxcats style-5 pad-l-24">
                                <div class="w-item w-12 col-xs-4 wf-groupwidget w308 no-pad-l">
                                    <div class="w-inner">
                                        <div class="row gwwrap">
                                            <div class="gw-item w-14 col-xs-12 wf-boxcats style-17 pad-l-13 event-list">
                                                <div class="w-inner">
                                                    <div class="w-head event-head"><h3 class="w-title"><a
                                                                    href="https://tintuc.vn/su-kien/be-gai-roi-tu-tang-12-chung-cu-o-hn-336047"
                                                                    title="Tin Đọc Nhiều ">Tin đọc nhiều</a></h3></div>
                                                    <div class="w-body">
                                                        <div class="media">
                                                            <div class="media-left"><a class="block"
                                                                                       href="https://tintuc.vn/be-gai-3-tuoi-nga-tu-tang-12-chung-cu-o-ha-noi-du-kien-duoc-xuat-vien-vao-ngay-mai-post1935624"
                                                                                       title="Bé gái 3 tuổi ngã từ tầng 12 chung cư ở Hà Nội dự kiến được xuất viện vào ngày mai">
                                                                    <div class="pos-rel"><img
                                                                                class="thumbnail w100 lazy"
                                                                                data-original="https://static.tintuc.com.vn/images/ver3/2021/03/04/150x100/1614824564746-1614823622224-photo1614822901709-16148229020011709543601.jpg"
                                                                                src="https://static.tintuc.com.vn/images/ver3/2021/03/04/150x100/1614824564746-1614823622224-photo1614822901709-16148229020011709543601.jpg"
                                                                                alt="Bé gái 3 tuổi ngã từ tầng 12 chung cư ở Hà Nội dự kiến được xuất viện vào ngày mai">
                                                                    </div>
                                                                </a></div>
                                                            <div class="media-body">
                                                                <h3 class="heading normal"><a
                                                                            href="https://tintuc.vn/be-gai-3-tuoi-nga-tu-tang-12-chung-cu-o-ha-noi-du-kien-duoc-xuat-vien-vao-ngay-mai-post1935624"
                                                                            title="Bé gái 3 tuổi ngã từ tầng 12 chung cư ở Hà Nội dự kiến được xuất viện vào ngày mai">Bé
                                                                        gái 3 tuổi ngã từ tầng 12 chung cư ở Hà Nội dự
                                                                        kiến được xuất viện vào ngày mai</a>
                                                                    <time class="time friendly rel-time"
                                                                          datetime="2021-03-04 09:22:43"></time>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
<script src="app.js"></script>
</html>
