@extends('partials.head')

<header>
    @include('partials.header')
    @include('partials.navigation')
</header>
<div id="aau-wrapper">
    <div class="single-bar">
        <div class="container">
            <div class="row">
                <div class="bar col-md-12">
                    <div class="bg">
                        <div class="row">
                            <div class="col-md-9 col-sm-8 col-xs-6">
                                <p id="breadcrumbs"><span typeof="v:Breadcrumb"><a href="../index.html" rel="v:url" property="v:title">Trang Chủ</a></span> \ Liên Hệ</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 content">
                    <div class="post">
                        <div class="title">
                            <h1>Liên Hệ</h1></div>
                        <div class="contact">
                            <h2>TRỤ SỞ CHÍNH</h2>
                            <p><u>Địa chỉ:</u> Hẻm TK26, số TK28/6 Nguyễn Cảnh Chân, P.Cầu Kho, Quận 1, TP HCM.</p>
                            <p><u>Hotline</u>: 0938.39.16.56 - 0286.29.29.898</p>
                            <p><u>Email:</u> <a href="mailto:thuytien2530@gmail.com">thuytien2530@gmail.com</a> – <u>Website:</u> <a href="../index.html">www.aliceNailsandSpa.vn</a></p>
                            <p><u>Facebook:</u> <a href="https://www.facebook.com/alicenailsspaTK28.6/">fb.com/alicenailsspaTK28.6</a></p>
                            <p><a href="https://www.google.com/maps/place/TK28%2F6+Nguy%E1%BB%85n+C%E1%BA%A3nh+Ch%C3%A2n,+C%E1%BA%A7u+Kho,+Qu%E1%BA%ADn+1,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7588086,106.6885459,17.75z/data=!4m5!3m4!1s0x31752f10746cf489:0xb72657dd399f99ff!8m2!3d10.7587334!4d106.6883899?hl=vi-VN" target="_blank" target="_blank" rel="attachment wp-att-31508 noopener noreferrer"><img class="aligncenter size-full wp-image-31508" src="/images/maps/1.png" alt="" width="800" height="263" srcset="/images/maps/1.png" sizes="(max-width: 800px) 100vw, 800px" /></a><em>(Click vào hình để xem bản đồ lớn)</em></p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 sidebar">
                    <div class="sidebar-spacing hidden-xs"></div>
                    <div class="support">
                        <div class="number">
                            <h2>Đặt lịch tư vấn</h3>
                                <p>0938.39.16.56</p>
                                <p>0286.29.29.898</p>
                                <span>HAY</span>
                        </div>

                        <!-- form -->
                        <form id="ggsheet" class="row" style="margin-left: 0px;"  method="POST" action="" target="no-target">
                            <div class="form-group">
                                <label for="name">Họ tên </label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nhập họ tên" required="required" />
                            </div>

                            <div class="form-group">
                                <label for="name">Số Điện Thoại </label>
                                <input type="number" class="form-control" id="phone" name="phonenumber" placeholder="Nhập số điện thoại" required="required" />
                            </div>

                            <div class="form-group">
                                <label for="name">Email </label>
                                <input type="text" class="form-control" id="mail" name="address" placeholder="Nhập email" required="required" />
                            </div>

                            <div class="form-group">
                                <label for="name">
                                    Nội dung </label>
                                <textarea name="message" id="content" name="note" class="form-control" rows="9" cols="25" required="required" placeholder="Nội dung cần tư vấn"></textarea>
                            </div>

                            <button id="form-submit" type="submit" class="btn btn-primary pull-right">
                                Đặt lịch tư vấn</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
@include('partials.footer')
<!-- end footer -->
@include('partials.endhead')

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script>
    $('#ggsheet').one('submit', function() {
        var inputName = encodeURIComponent($('#name').val());
        var inputSdt = encodeURIComponent($('#phone').val());
        var inputEmail = encodeURIComponent($('#mail').val());
        var inputContent = encodeURIComponent($('#content').val());

        // id
        var nameID = "entry.1682615381";
        var sdtID = "entry.812550251";
        var emailID = "entry.2131806386";
        var contentID = "entry.1784671824";

        var baseURL = "https://docs.google.com/forms/d/e/1FAIpQLSelOYrqunhyk2xoVbxh_pLmz8dIXKL9OfW-Ab-scklFuZX9SQ/formResponse?";
        var submitRef = '&submit=Submit';
        var submitURL = (baseURL + nameID + "=" + inputName + "&" + sdtID + "=" + inputSdt + "&" + emailID + "=" + inputEmail + "&" + contentID + "=" + inputContent + submitRef);
        console.log(submitURL);
        console.log("sent successfully");
        $(this)[0].action = submitURL;
    });
</script>