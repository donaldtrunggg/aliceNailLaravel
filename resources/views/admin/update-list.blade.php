@extends('partials.head')

<header>
    @include('partials.header')
    @include('partials.navigation')
</header>

<div id="aau-wrapper">
    <div class="single-content">
        <div class="container">
            Category:

            <select id="mySelect" name="category" style="margin-bottom: 10px" onchange="changeURL()">
                <option value="all" <?php if($slug == 'all') echo "selected" ?>>All</option>
                <option value="oxi-jet" <?php if($slug == 'oxi-jet') echo "selected" ?>>Oxi jet</option>
                <option value="dien-di" <?php if($slug == 'dien-di') echo "selected" ?>>Điện di</option>
                <option value="dieu-tri-mun" <?php if($slug == 'dieu-tri-mun') echo "selected" ?>>Điều trị mụn</option>
                <option value="laser-carbon" <?php if($slug == 'laser-carbon') echo "selected" ?>>Laser carbon</option>
                <option value="triet-long" <?php if($slug == 'triet-long') echo "selected" ?>>Triệt lông</option>
                <option value="thay-da-vat-ly" <?php if($slug == 'thay-da-vat-ly') echo "selected" ?>>Thay da vật lý</option>
                <option value="phi-kim-dieu-tri-mun" <?php if($slug == 'phi-kim-dieu-tri-mun') echo "selected" ?>>Phi kim điều trị mụn</option>
                <option value="phi-kim-tai-tao-cang-bong-trang-sang-da" <?php if($slug == 'phi-kim-tai-tao-cang-bong-trang-sang-da') echo "selected" ?>>Phi kim tái tạo căng bóng trắng sáng da</option>
                <option value="phi-kim-dieu-tri-tan-nhang-nam" <?php if($slug == 'phi-kim-dieu-tri-tan-nhang-nam') echo "selected" ?>>Phi kim điều trị tàn nhang, nám</option>
                <option value="phi-kim-dieu-tri-seo-ro" <?php if($slug == 'phi-kim-dieu-tri-seo-ro') echo "selected" ?>>Phi kim điều trị sẹo rỗ</option>
                <option value="PRP-mau-tu-than-dac-tri-seo-ro-tai-tao-da" <?php if($slug == 'PRP-mau-tu-than-dac-tri-seo-ro-tai-tao-da') echo "selected" ?>>PRP máu tự thân đặc trị sẹo rỗ, tái tạo da</option>
                <option value="vi-kim-tao-song-nhat-ban" <?php if($slug == 'vi-kim-tao-song-nhat-ban') echo "selected" ?>>Vi kim tảo sống Nhật Bản</option>
                <option value="cay-te-bao-goc" <?php if($slug == 'cay-te-bao-goc') echo "selected" ?>>Cấy tế bào gốc</option>
                <option value="truyen-trang-lutathion" <?php if($slug == 'truyen-trang-lutathion') echo "selected" ?>>Truyền trắng lutathion</option>
                <option value="truyen-noan-cao-cap-thuy-si" <?php if($slug == 'truyen-noan-cao-cap-thuy-si') echo "selected" ?>>Truyền noãn cao cấp Thụy Sĩ</option>
                <option value="tiem-nhau-thai-nhat" <?php if($slug == 'tiem-nhau-thai-nhat') echo "selected" ?>>Tiêm nhau thai Nhật</option>
                <option value="filler" <?php if($slug == 'filler') echo "selected" ?>>Filler</option>
                <option value="botox" <?php if($slug == 'botox') echo "selected" ?>>Botox</option>
                <option value="tin-tuc" <?php if($slug == 'tin-tuc') echo "selected" ?>>Tin tức</option>
            </select>
            <div class="row">
                <div class="col-md-8 content">
                    <div class="archive">
                        <?php if(!isset($posts)): print "No results"; else: ?>
                        <?php foreach ($posts as $post): ?>
                        <div class="item-archive">
                            <div class="row">
                                <h3><a href={{ $post->url }}> {{ $post->title }}</a></h3>
                                    <span style="float: right; color: blue;">
                                        <a href="/chinh-sua-bai-viet/bai-viet/{{ $post->url }}" target="_blank">Sửa nội dung</a>
                                        <a href="/deletePost/{{ $post->id }}" style="margin-left: 20px">Xoá bài viết</a>
                                    </span>

                                <div class="detail col-md-12 col-sm-12 col-xs-12">
                                    <?php $post->des = substr($post->content,0,500) . "..."; ?>
                                    <p><?php echo html_entity_decode($post->des) ?></p> <a class="readmore" href="/bai-viet/{{ $post->url }}" target="_blank"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Xem thêm</a></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="text-center"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function changeURL() {
        var x = document.getElementById("mySelect").value;
        window.location.href = x;
    }
</script>