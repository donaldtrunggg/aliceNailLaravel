<!-- views/partials/header.ejs -->
<!-- Header -->
<div class="container" style="margin-bottom: 5px;">
	<div class="row">
		<div id="logo" class="col-md-2 col-sm-2 col-xs-12 logo text-center">
			<a href="index">
				<img src="/images/header/new1.png" alt="logo" class="logo-1">
			</a>
		</div>
		<div class="col-md-10 col-sm-10 col-xs-12 site-title">
			<div class="row">
				<div class="col-md-7 col-sm-6 hidden-xs slogal text-center">
					<div class="butterfly"></div>
					<h1 class="slogan-1" style="font-family: iCielBambola; color: rgb(179, 117, 16); font-size: 50px;">Đẹp mãi với thời gian</h1>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12 top-bar text-center">
					<div class="hotline">
						<img src="/images/header/hl.png" alt="holine">
					</div>
					<div class="top-menu">
						<ul id="menu-top-menu" class="menu">
							<li id="menu-item-747" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-747">
								<a href="/gioi-thieu">Giới Thiệu</a>
							</li>
							<li id="menu-item-747" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-747">
								<a href="/lien-he">Liên hệ</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	var butterflies = [];
	setTimeout(function() {
		if (window.innerWidth < 768){
			return;
		}

		for (var i=0; i<6; i++) {
			var b = new Butterfly();
			b.init();
			butterflies.push(b);
		};

		animate();
	}, 500);

	function Butterfly() {
		var _this = this;

		_this.concacMaxX = window.innerWidth * 750 / 1366;
		_this.concacMinX = window.innerWidth * 350 / 1366;
    	_this.concacMaxY = window.innerHeight * 60 / 638;

		_this.init = function() {

		_this.x = Math.floor(Math.random() * (_this.concacMaxX - _this.concacMinX) + _this.concacMinX);
		_this.y = Math.floor(Math.random() * _this.concacMaxY);

		_this.directionX = true;
		_this.directionY = true;

		_this.domElement = document.createElement('div');
		_this.domElement.className = 'butterfly';
		_this.domElement.innerHTML = '<div class="left-wing"><div class="top"></div><div class="bottom"></div></div><div class="right-wing"><div class="top"></div><div class="bottom"></div></div>';
		document.getElementsByTagName('body')[0].appendChild(_this.domElement);

		}

		_this.moveButterfly = function() {
			_this.domElement.style.webkitTransform = 'translate3D('+_this.x+'px, '+_this.y+'px, 0px) rotate3d(1, 0.5, 0, 110deg)';
			var randomnumberX=Math.floor(Math.random()*11);
			var randomnumberY=Math.floor(Math.random()*11);

			if(randomnumberX > 8) {
			  _this.directionX = _this.directionX*-1;
			}

			if(randomnumberY > 8) {
			  _this.directionY = _this.directionY*-1;
			}

			var oldx = _this.x;
			var oldy = _this.y;

			if(_this.directionX == true) {
			  _this.x = _this.x+1;
			} else {
			  _this.x = _this.x-1;
			}

			if(_this.directionY == true) {
			  _this.y = _this.y+1;
			} else {
			  _this.y = _this.y-1;
			}

			if (_this.y <= 0 || _this.y > _this.concacMaxY)
			{
				_this.y = oldy;
			}

			if (_this.x <= _this.concacMinX || _this.x > _this.concacMaxX)
			{
				_this.x = oldx;
			}
		}

		return _this;
	}

	function animate() {
		for(var i=0, l=butterflies.length; i<l; i++) {
			butterflies[i].moveButterfly();
		}

		webkitRequestAnimationFrame(animate);
	}
</script>
</div>
