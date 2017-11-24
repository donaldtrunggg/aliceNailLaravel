<!-- views/partials/navigation.ejs -->
<!-- Navigation -->
<?php if(isset($_SESSION['isADMINACLICE']) && $_SESSION['isADMINACLICE']) : ?>
@include('partials.admin-navigation')
<?php endif; ?>
<div class="menu-cont hidden-xs" id="mainmenu">
	<div class="container">
		<div class="header-menu">
			<ul id="menu-header-menu" class="menu">
				<li id="menu-item-839" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-839">
					<a href="/"><img src="/images/home.png" alt="home"></a>
				</li>
				<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-840">
					<a href="#"><img style="opacity: 0" src="/images/wtf.png"/>Skincare cơ bản</a>
					<ul class="sub-menu">
						<li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="" href="/oxi-jet">Oxi jet</a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="" href="/dien-di">Điện di</a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="" href="/dieu-tri-mun">Điều trị mụn</a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="" href="/laser-carbon">Laser carbon</a></li>
					</ul>
				</li>
				<li id="menu-item-18847" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18847">
					<a href="/triet-long"><img style="opacity: 0" src="/images/wtf.png"/>Triệt lông</a></li>
				<li id="menu-item-842" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-842">
					<a href="/thay-da-vat-ly"><img style="opacity: 0" src="/images/wtf.png"/>Thay da vật lý</a>
				</li>
				<li id="menu-item-2063" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2063">
					<a href="#"><img style="opacity: 0" src="/images/wtf.png"/>Skincare điều trị</a>
					<ul class="sub-menu">
						<li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="" href="/phi-kim-dieu-tri-mun">Phi kim điều trị mụn</a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="" href="/phi-kim-tai-tao-cang-bong-trang-sang-da">Phi kim tái tạo căng bóng trắng sáng da</a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="" href="/phi-kim-dieu-tri-tan-nhang-nam">Phi kim điều trị tàn nhang, nám</a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="" href="/phi-kim-dieu-tri-seo-ro">Phi kim điều trị sẹo rỗ</a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="" href="/PRP-mau-tu-than-dac-tri-seo-ro-tai-tao-da">PRP máu tự thân đặc trị sẹo rỗ, tái tạo da</a></li>
					</ul>
				</li>
				<li id="menu-item-17703" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17703"><a href="/vi-kim-tao-song-nhat-ban"><img style="opacity: 0" src="/images/wtf.png"/>VI KIM TẢO SỐNG NHẬT BẢN</a></li>
				<li id="menu-item-40165" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-40165">
					<a href="/cay-te-bao-goc"><img style="opacity: 0" src="/images/wtf.png"/>CẤY TẾ BÀO GỐC</a>
				</li>
				<li id="menu-item-17702" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17702">
					<a href="#"><img style="opacity: 0" src="/images/wtf.png"/>TRUYỀN TRẮNG</a>
					<ul class="sub-menu">
						<li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="" href="/truyen-trang-lutathion">Truyền trắng Lutathion</a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="" href="/truyen-noan-cao-cap-thuy-si">Truyền noãn cao cấp Thuỵ Sĩ</a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="" href="/tiem-nhau-thai-nhat">Tiêm nhau thai Nhật</a></li>
					</ul>
				</li>
				<li id="menu-item-846" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-846">
					<a href="#"><img style="opacity: 0" src="/images/wtf.png"/>FILLER - BOTOX</a>
					<ul class="sub-menu">
						<li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="" href="/filler">Filler</a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="" href="/botox">BOTOX</a></li>
					</ul>
				</li>
				<li id="menu-item-21240" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21240"><a href="/tin-tuc"><img style="opacity: 0" src="/images/wtf.png"/>Tin Tức</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- moblie nav -->
<div class="visible-xs mobile-menu">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">DANH MỤC DỊCH VỤ <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul id="menu-header-menu-1" class="menu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-839"><a href="index"><img src="/images/home.png" alt="home"></a> Trang chủ</li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-840"><a href="/skin-care-dieu-tri">Skin care điều trị</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18847"><a href="/hoi-sinh-da-nhat-ban">Hồi sinh da Nhật Bản</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-842"><a href="/cay-huyet-thanh-te-bao">Cấy Huyết thanh tế bào</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2063"><a href="/truyen-duong-colagen">Truyền dưỡng colagen</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17703"><a href="/spa">Spa</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-40165"><a href="/triet-long">Triệt lông</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17702"><a href="/thay-da-vat-ly">Thay da</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-846"><a href="/tre-hoa-lan-da-nho-tiem-botox">Trẻ hóa làn da</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21240"><a href="/tin-tuc">Tin tức</a></li>
                <!-- <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-8160"><a href="/lien-he">Liên hệ</a></li> -->
            </ul>
        </div>
    </nav>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">$(window).load(function(){$("#mobile-menu").sticky({topSpacing:0});});</script>
<!-- views/partials/navigation.ejs -->