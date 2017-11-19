@extends('partials.head')
<header>
    @include('partials.header')
    @include('partials.navigation')

    <!-- slider -->
    <div class="hidden-xs">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
                <li data-target="#myCarousel" data-slide-to="7"></li>
                <li data-target="#myCarousel" data-slide-to="8"></li>
                <li data-target="#myCarousel" data-slide-to="9"></li>
                <li data-target="#myCarousel" data-slide-to="10"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/images/homeslider/5.jpg" alt="">
                </div>
                <div class="item">
                    <img src="/images/homeslider/2.jpg" alt="">
                </div>
                <div class="item">
                    <img src="/images/homeslider/3.jpg" alt="">
                </div>
                <div class="item">
                    <img src="/images/homeslider/4.jpg" alt="">
                </div>
                <div class="item">
                    <img src="/images/homeslider/1.jpg" alt="">
                </div>
                <div class="item">
                    <img src="/images/homeslider/6.jpg" alt="">
                </div>
                <div class="item">
                    <img src="/images/homeslider/7.jpg" alt="">
                </div>
                <div class="item">
                    <img src="/images/homeslider/8.jpg" alt="">
                </div>
                <div class="item">
                    <img src="/images/homeslider/9.jpg" alt="">
                </div>
                <div class="item">
                    <img src="/images/homeslider/10.jpg" alt="">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- end slider -->

</header>

<!-- todo -->
<div class="registry visible-xs">
    <h2>Alice Nails &amp; Spa</h2> <img src="" alt="">
    <div class="text-center">
        <img src="/images/homeslider/5.jpg">
    </div>
    <p>Đẹp mãi với thời gian</p>
</div>

<!-- Tin tuc cc -->
<div class="container" style="height: 40px;">
    <div class="container-wrapper" id="hot-new-widget" style="margin-left: 0" tabindex="0">
        <div class="newinfo-bar">
            <div class="newinfo-title">
                <div class="newinfo-top">
                    <h3 style="margin-right: 10px;"><em class='glyphicon glyphicon-list'></em> Nổi bật:</h3>
                </div>
                <div id="example666" style="width: 700px;">
                    <ul class="newinfo-title-list ContentHotNews" style="margin-bottom: 0;background-color: white;">
                        <li>
                            <span>21/09/2017 </span>
                            <a class="vna-ajax-modal" href="/vi-sao-ban-hit-khong-khi-cung-beo">Vì sao bạn 'hít không khí' cũng béo?</a>
                        </li>
                    </ul>
                    <ul class="newinfo-title-list ContentHotNews" style="margin-bottom: 0;background-color: white;">
                        <li>
                            <span>21/09/2017 </span>
                            <a class="vna-ajax-modal" href="/10-cach-tri-quang-tham-mat-bang-nguyen-lieu-tu-nhien">10 cách trị quầng thâm mắt bằng nguyên liệu tự nhiên</a>
                        </li>
                    </ul>
                    <!-- <ul class="newinfo-title-list ContentHotNews" style="margin-bottom: 0;background-color: white;">
                        <li>
                            <span>19/09/2017 </span>
                            <a class="vna-ajax-modal" ref="">Mẹ một con sở hữu vóc dáng nóng bỏng nhờ tập gym</a>
                        </li>
                    </ul> -->
                </div>
                <a href='/vn/en/about-us/press-room/news' style="color: rgb(179, 117, 16);margin-top: -52px;" class="pull-right"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Xem thêm</a>
            </div>
        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('#example666').vTicker();
    });
</script>


<!-- video demo and user picture -->
<div id="aau-wrapper">
    <div class="media">
        <div class="container">
            <div class="row">
                <div class="col-md-6 video">
                    <div class="title">
                        <h3><i class="fa fa-youtube-play" aria-hidden="true"></i> Video</h3></div>
                    <div class="a-single a-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DdlD5_UMYLk?rel=0"></iframe>
                        </div>                        </div>
                    <!-- <div class="text">
                        <h1>Alice Nails &amp; Spa</h1></div> -->
                </div>
                <div class="col-md-6 images">
                    <div class="title">
                        <h3><i class="fa fa-picture-o" aria-hidden="true"></i> <a href="hinh-anh/index.html">Hình ảnh</a></h3>
                        <div class="icontrol"><span class="inext"></span><span class="iprev"></span></div>
                    </div>

                    <div id="image-slide">
                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/3.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/12.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-6 col-xs-6 pr0"><img class="m-slider" src="/images/islider/1.jpg" alt=""></div>
                                <div class="col-md-6 col-xs-6 pr0"><img class="m-slider" src="/images/islider/2.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/5.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/13.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/18.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/19.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/4.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/6.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/8.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/11.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/7.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/9.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/10.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/14.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/15.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/16.jpg" alt=""></div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 pr0"><img class="m-slider" src="/images/islider/17.jpg" alt=""></div>
                            </div>
                        </div>

                    </div>
                    <!-- <div style="font-size: 12px; font-style: italic;"> * Hiệu quả có thể thay đổi tuỳ theo từng người.</div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Doctor -->

    <div class="doctor">
        <div class="container">
            <div class="strike">
                <h2>NGHỆ SĨ TẠI ALICE</h2>
                <div class="text-center">Một số nghệ sĩ đã sử dụng dịch vụ của Alice Nails &amp; Spa</div>
            </div>
            <div class="dnbs">
                <div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#artist1" aria-controls="artist1" role="tab" data-toggle="tab">
                                <img src="/images/nghesi/thumb/1.jpg" alt="">
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#artist2" aria-controls="artist2" role="tab" data-toggle="tab">
                                <img src="/images/nghesi/thumb/2.jpg" alt="">
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#artist3" aria-controls="artist3" role="tab" data-toggle="tab">
                                <img src="/images/nghesi/thumb/3.jpg" alt="">
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#artist4" aria-controls="artist4" role="tab" data-toggle="tab">
                                <img src="/images/nghesi/thumb/4.jpg" alt="">
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#artist5" aria-controls="artist5" role="tab" data-toggle="tab">
                                <img src="/images/nghesi/thumb/5.jpg" alt="">
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#artist6" aria-controls="artist6" role="tab" data-toggle="tab">
                                <img src="/images/nghesi/thumb/6.jpg" alt="">
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#artist7" aria-controls="artist7" role="tab" data-toggle="tab">
                                <img src="/images/nghesi/thumb/7.jpg" alt="">
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#artist8" aria-controls="artist8" role="tab" data-toggle="tab">
                                <img src="/images/nghesi/thumb/8.jpg" alt="">
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#artist9" aria-controls="artist9" role="tab" data-toggle="tab">
                                <img src="/images/nghesi/thumb/9.jpg" alt="">
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#artist10" aria-controls="artist10" role="tab" data-toggle="tab">
                                <img src="/images/nghesi/thumb/10.jpg" alt="">
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#artist11" aria-controls="artist11" role="tab" data-toggle="tab">
                                <img src="/images/nghesi/thumb/11.jpg" alt="">
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#artist13" aria-controls="artist13" role="tab" data-toggle="tab">
                                <img src="/images/nghesi/thumb/13.jpg" alt="">
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="artist1">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <img style="border-radius: 10px;" src="/images/nghesi/1.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="artist2">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <img style="border-radius: 10px;" src="/images/nghesi/2.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="artist3">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <img style="border-radius: 10px;" src="/images/nghesi/3.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="artist4">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <img style="border-radius: 10px;" src="/images/nghesi/4.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="artist5">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <img style="border-radius: 10px;" src="/images/nghesi/5.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="artist6">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <img style="border-radius: 10px;" src="/images/nghesi/6.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="artist7">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <img style="border-radius: 10px;" src="/images/nghesi/7.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="artist8">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <img style="border-radius: 10px;" src="/images/nghesi/8.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="artist9">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <img style="border-radius: 10px;" src="/images/nghesi/9.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="artist10">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <img style="border-radius: 10px;" src="/images/nghesi/10.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="artist11">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <img style="border-radius: 10px;" src="/images/nghesi/11.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="artist13">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <img style="border-radius: 10px;" src="/images/nghesi/13.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end doctor -->

    <!-- co so vat chat -->
    <div class="introduct hidden-sm hidden-xs">
        <div class="container">
            <div class="strike">
                <h2>VỀ ALICE</h2>
                <div class="text-center">Alice Nails &amp; Spa sử dụng các thiết bị tân tiến nhằm đem lại cảm giác trải nghiệm tốt nhất cho khách hàng</div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-6 intro-item">
                    <div class="inhover">
                        <img class="img-responsive"
                             src="/images/facilities/6.jpg"
                             alt="">
                    </div>
                </div>
                <!-- <div class="col-md-4 col-sm-6 intro-item">
                    <div class="inhover">
                    <img class="img-responsive"
                        src="/images/facilities/12.jpg"
                        alt="">
                        <h3>Tư vấn tận tình</h3>
                        <p>Đến với Alice Nails &amp; Spa, bạn sẽ được tiếp đón bởi đội ngũ tư vấn viên năng động và thân thiện, luôn sẵn sàng lắng nghe và giải đáp những thắc mắc, cũng như đem lại cho bạn những lời tư vấn tốt và phù hợp với nhu cầu của bạn nhất.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 intro-item">
                    <div class="inhover">
                    <img class="img-responsive"
                    src="/images/facilities/10.jpg"
                    alt="">
                        <h3>Đội ngũ chuyên viên chuyên nghiệp</h3>
                        <p>Alice Nails &amp; spa với đội ngũ chuyên môn và tay nghề cao, luôn tận tâm trong từng ca điều trị để đem lại cho bạn hiệu quả tối ưu. Với hơn nhiều kinh nghiệm trong ngành thẩm mỹ và điều trị da, trải qua nhiều khóa đào tạo và huấn luyện quốc tế, đội ngũ chuyên viên của Alice Nails &amp; Spa sẽ luôn sẵn sàng lắng nghe và đồng hành cùng bạn chinh phục những chặng đường hướng đến vẻ đẹp toàn diện.<br/></p>
                    </div>
                </div> -->

                <div class="col-md-4 col-sm-6 intro-item">
                    <h3>Cơ sở vật chất đẳng cấp 5 sao</h3>
                    <p>Alice Nails &amp; Spa tự hào là một trong nhưng trung tâm điều trị thẩm mỹ uy tín nhất hiện nay với công nghệ cao cấp từ các nước có ngành thẩm mỹ tiên tiến nhất trên Thế giới.<br/>Với phong cách hiện đại và không gian trị liệu sang trọng được chăm chút đến từng chi tiết, Alice Nails &amp; Spa hứa hẹn sẽ đem lại cho bạn những giây phút trải nghiệm tuyệt vời.</p>
                </div>

                <div class="col-md-4 col-sm-6 intro-item">
                    <h3>Tư vấn tận tình</h3>
                    <p>Đến với Alice Nails &amp; Spa, bạn sẽ được tiếp đón bởi đội ngũ tư vấn viên năng động và thân thiện, luôn sẵn sàng lắng nghe và giải đáp những thắc mắc, cũng như đem lại cho bạn những lời tư vấn tốt và phù hợp với nhu cầu của bạn nhất.</p>
                </div>

                <div class="col-md-4 col-sm-6 intro-item">
                    <h3>Đội ngũ chuyên viên chuyên nghiệp</h3>
                    <p>Alice Nails &amp; spa với đội ngũ chuyên môn và tay nghề cao, luôn tận tâm trong từng ca điều trị để đem lại cho bạn hiệu quả tối ưu. Với hơn nhiều kinh nghiệm trong ngành thẩm mỹ và điều trị da, trải qua nhiều khóa đào tạo và huấn luyện quốc tế, đội ngũ chuyên viên của Alice Nails &amp; Spa sẽ luôn sẵn sàng lắng nghe và đồng hành cùng bạn chinh phục những chặng đường hướng đến vẻ đẹp toàn diện</p>
                </div>
            </div>
        </div>
    </div>

    <div class="introduct visible-sm visible-xs">
        <div class="container">
            <div class="strike">
                <h2>CƠ SỞ VẬT CHẤT</h2>
                <div class="text-center">Alice Nails &amp; Spa sử dụng các thiết bị tân tiến nhằm đem lại cảm giác trải nghiệm tốt nhất cho khách hàng</div>
            </div>
            <div class="row">
                <div class="col-xs-12 intro-item">
                    <img class="img-responsive" src="/images/facilities/6.jpg" alt="">
                    <h3>Cơ sở vật chất đẳng cấp 5 sao</h3>
                    <p>Alice Nails &amp; Spa tự hào là một trong nhưng trung tâm điều trị thẩm mỹ uy tín nhất hiện nay với công nghệ cao cấp từ các nước có ngành thẩm mỹ tiên tiến nhất trên Thế giới.<br/>Với phong cách hiện đại và không gian trị liệu sang trọng được chăm chút đến từng chi tiết, Alice Nails &amp; Spa hứa hẹn sẽ đem lại cho bạn những giây phút trải nghiệm tuyệt vời.</p>
                </div>
                <!-- <div class="col-xs-12 intro-item">
                    <img class="img-responsive"
                        src="/images/facilities/12.jpg"
                        alt="">
                        <h3>Tư vấn tận tình</h3>
                        <p>Đến với Alice Nails &amp; Spa, bạn sẽ được tiếp đón bởi đội ngũ tư vấn viên năng động và thân thiện, luôn sẵn sàng lắng nghe và giải đáp những thắc mắc, cũng như đem lại cho bạn những lời tư vấn tốt và phù hợp với nhu cầu của bạn nhất.</p>
                </div>
                <div class="col-xs-12 intro-item">
                    <img class="img-responsive"
                    src="/images/facilities/10.jpg"
                    alt="">
                        <h3>Đội ngũ chuyên viên chuyên nghiệp</h3>
                        <p>Alice Nails &amp; spa với đội ngũ chuyên môn và tay nghề cao, luôn tận tâm trong từng ca điều trị để đem lại cho bạn hiệu quả tối ưu. Với hơn nhiều kinh nghiệm trong ngành thẩm mỹ và điều trị da, trải qua nhiều khóa đào tạo và huấn luyện quốc tế, đội ngũ chuyên viên của Alice Nails &amp; Spa sẽ luôn sẵn sàng lắng nghe và đồng hành cùng bạn chinh phục những chặng đường hướng đến vẻ đẹp toàn diện.<br/></p>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- end co so vat chat -->



<div id="" style="" class="concac">
    <div class="container">
        <div class="row">
            <div class="logo-skytrax-txt col-xs-12">
                <h4 style="margin-top: 5px;">Alice Nails &amp; Spa</h4>
                <p style="margin-bottom: 5px;">Our sincere thanks to all valued customers and partners for your support!</p>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
@include('partials.footer')
<!-- end footer -->
@include('partials.endhead')