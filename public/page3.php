<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>فواتيري</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">




</head>

<body>
  <div class="view">
	<div class="card__full">
		<div class="card__full-top">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
					<path d="M16.59 8.59l-4.59 4.58-4.59-4.58-1.41 1.41 6 6 6-6z"/>
					<path d="M0 0h24v24h-24z" fill="none"/>
			</svg>
			<span class="card__full-num"></span>
		</div>
		<div class="card__full-bottom">
			<p class="card__full-handle"></p>
			<p class="card__full-info"></p>
		</div>
	</div>
	<ul class="card__list">
		<li class="card__item card__item--blue">
			<div class="card__info">
				<div class="info-invoice">
					<p class="invoice-n"> </p>

					<p class="invoice-name"><?php  echo $_POST['title'];    ?></p>
				</div>
				<div class="invoice-price"><sup>SR</sup></div>
			</div>
		</li>
		<li class="card__item card__item--orange">
			<div class="card__info">
				<div class="info-invoice">
					<p class="invoice-n"></p>
					<p class="invoice-name"><small>32323232</small><br>Zara</p>
				</div>
				<div class="invoice-price">600<sup>SR</sup></div>
			</div>
		</li>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
<style>
* {
  box-sizing: border-box;
}

ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

body {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  height: 100vh;
  line-height: 1.5;
  font-family: 'Montserrat';
  background: #f2f2f2;
  color: #404040;
  overflow: hidden;
}

.view {
  position: relative;
  height: 640px;
  width: 384px;
  background: #fcfcfc;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  overflow-y: scroll;
}

.card__list {
  padding: 0.75rem;
}
.card__item {
  margin: 0 0 0.75rem;
  padding: 2.25rem 1.5rem;
  border-top: 4px solid #404040;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  background: white;
  cursor: pointer;
  -webkit-transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
  transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
}
.card__item--blue {
  border-top-color: #5171C3;
}
.card__item--blue p.invoice-n {
  background: #5171C3;
  text-shadow:  1px 1px rgba(51, 78, 148, 0.7) , 2px 2px rgba(54, 81, 152, 0.715) , 3px 3px rgba(56, 84, 156, 0.73) , 4px 4px rgba(58, 87, 160, 0.745) , 5px 5px rgba(61, 89, 163, 0.76) , 6px 6px rgba(62, 91, 166, 0.775) , 7px 7px rgba(64, 94, 169, 0.79) , 8px 8px rgba(66, 96, 172, 0.805) , 9px 9px rgba(68, 97, 174, 0.82) , 10px 10px rgba(69, 99, 176, 0.835) , 11px 11px rgba(71, 101, 179, 0.85) , 12px 12px rgba(72, 102, 181, 0.865) , 13px 13px rgba(73, 104, 183, 0.88) , 14px 14px rgba(74, 105, 184, 0.895) , 15px 15px rgba(75, 106, 186, 0.91) , 16px 16px rgba(76, 108, 188, 0.925) , 17px 17px rgba(77, 109, 189, 0.94) , 18px 18px rgba(78, 110, 191, 0.955) , 19px 19px rgba(79, 111, 192, 0.97) , 20px 20px rgba(80, 112, 194, 0.985);
}
.card__item--blue:hover .invoice-name,
.card__item--blue:hover .invoice-price {
  color: #5171C3;
}
.card__item--orange {
  border-top-color: #DE660F;
}
.card__item--orange p.invoice-n {
  background: #DE660F;
  text-shadow:  1px 1px rgba(150, 69, 10, 0.7) , 2px 2px rgba(156, 72, 10, 0.715) , 3px 3px rgba(162, 75, 11, 0.73) , 4px 4px rgba(168, 77, 11, 0.745) , 5px 5px rgba(173, 79, 12, 0.76) , 6px 6px rgba(178, 82, 12, 0.775) , 7px 7px rgba(182, 84, 12, 0.79) , 8px 8px rgba(186, 86, 13, 0.805) , 9px 9px rgba(190, 87, 13, 0.82) , 10px 10px rgba(193, 89, 13, 0.835) , 11px 11px rgba(197, 90, 13, 0.85) , 12px 12px rgba(200, 92, 13, 0.865) , 13px 13px rgba(203, 93, 14, 0.88) , 14px 14px rgba(206, 95, 14, 0.895) , 15px 15px rgba(209, 96, 14, 0.91) , 16px 16px rgba(211, 97, 14, 0.925) , 17px 17px rgba(213, 98, 14, 0.94) , 18px 18px rgba(216, 99, 15, 0.955) , 19px 19px rgba(218, 100, 15, 0.97) , 20px 20px rgba(220, 101, 15, 0.985);
}
.card__item--orange:hover .invoice-name,
.card__item--orange:hover .invoice-price {
  color: #DE660F;
}
.card__item--green {
  border-top-color: #2EA83B;
}
.card__item--green p.invoice-n {
  background: #2EA83B;
  text-shadow:  1px 1px rgba(30, 108, 38, 0.7) , 2px 2px rgba(31, 113, 40, 0.715) , 3px 3px rgba(33, 118, 42, 0.73) , 4px 4px rgba(34, 123, 43, 0.745) , 5px 5px rgba(35, 127, 45, 0.76) , 6px 6px rgba(36, 131, 46, 0.775) , 7px 7px rgba(37, 135, 47, 0.79) , 8px 8px rgba(38, 138, 49, 0.805) , 9px 9px rgba(39, 141, 50, 0.82) , 10px 10px rgba(40, 144, 51, 0.835) , 11px 11px rgba(40, 147, 52, 0.85) , 12px 12px rgba(41, 150, 53, 0.865) , 13px 13px rgba(42, 152, 53, 0.88) , 14px 14px rgba(42, 155, 54, 0.895) , 15px 15px rgba(43, 157, 55, 0.91) , 16px 16px rgba(44, 159, 56, 0.925) , 17px 17px rgba(44, 161, 57, 0.94) , 18px 18px rgba(45, 163, 57, 0.955) , 19px 19px rgba(45, 165, 58, 0.97) , 20px 20px rgba(46, 166, 58, 0.985);
}
.card__item--green:hover .invoice-name,
.card__item--green:hover .invoice-price {
  color: #2EA83B;
}
.card__item--yellow {
  border-top-color: #BDB235;
}
.card__item--yellow p.invoice-n {
  background: #BDB235;
  text-shadow:  1px 1px rgba(129, 122, 36, 0.7) , 2px 2px rgba(134, 127, 38, 0.715) , 3px 3px rgba(139, 132, 39, 0.73) , 4px 4px rgba(144, 136, 40, 0.745) , 5px 5px rgba(148, 140, 41, 0.76) , 6px 6px rgba(152, 143, 43, 0.775) , 7px 7px rgba(156, 147, 44, 0.79) , 8px 8px rgba(159, 150, 45, 0.805) , 9px 9px rgba(162, 153, 45, 0.82) , 10px 10px rgba(165, 156, 46, 0.835) , 11px 11px rgba(168, 158, 47, 0.85) , 12px 12px rgba(171, 161, 48, 0.865) , 13px 13px rgba(173, 163, 49, 0.88) , 14px 14px rgba(176, 165, 49, 0.895) , 15px 15px rgba(178, 168, 50, 0.91) , 16px 16px rgba(180, 169, 50, 0.925) , 17px 17px rgba(182, 171, 51, 0.94) , 18px 18px rgba(184, 173, 52, 0.955) , 19px 19px rgba(186, 175, 52, 0.97) , 20px 20px rgba(187, 176, 53, 0.985);
}
.card__item--yellow:hover .invoice-name,
.card__item--yellow:hover .invoice-price {
  color: #BDB235;
}
.card__item--tan {
  border-top-color: #AA9E5C;
}
.card__item--tan p.invoice-n {
  background: #AA9E5C;
  text-shadow:  1px 1px rgba(122, 113, 64, 0.7) , 2px 2px rgba(126, 117, 66, 0.715) , 3px 3px rgba(130, 121, 69, 0.73) , 4px 4px rgba(134, 124, 71, 0.745) , 5px 5px rgba(137, 127, 73, 0.76) , 6px 6px rgba(140, 130, 75, 0.775) , 7px 7px rgba(143, 133, 76, 0.79) , 8px 8px rgba(146, 136, 78, 0.805) , 9px 9px rgba(149, 138, 79, 0.82) , 10px 10px rgba(151, 140, 81, 0.835) , 11px 11px rgba(153, 142, 82, 0.85) , 12px 12px rgba(155, 144, 83, 0.865) , 13px 13px rgba(157, 146, 85, 0.88) , 14px 14px rgba(159, 148, 86, 0.895) , 15px 15px rgba(161, 150, 87, 0.91) , 16px 16px rgba(163, 151, 88, 0.925) , 17px 17px rgba(164, 153, 89, 0.94) , 18px 18px rgba(166, 154, 90, 0.955) , 19px 19px rgba(167, 155, 90, 0.97) , 20px 20px rgba(169, 157, 91, 0.985);
}
.card__item--tan:hover .invoice-name,
.card__item--tan:hover .invoice-price {
  color: #AA9E5C;
}
.card__item--purple {
  border-top-color: #3E5EB3;
}
.card__item--purple p.invoice-n {
  background: #3E5EB3;
  text-shadow:  1px 1px rgba(42, 64, 122, 0.7) , 2px 2px rgba(44, 67, 127, 0.715) , 3px 3px rgba(45, 69, 132, 0.73) , 4px 4px rgba(47, 71, 136, 0.745) , 5px 5px rgba(48, 74, 140, 0.76) , 6px 6px rgba(50, 75, 144, 0.775) , 7px 7px rgba(51, 77, 147, 0.79) , 8px 8px rgba(52, 79, 151, 0.805) , 9px 9px rgba(53, 81, 154, 0.82) , 10px 10px rgba(54, 82, 156, 0.835) , 11px 11px rgba(55, 84, 159, 0.85) , 12px 12px rgba(56, 85, 162, 0.865) , 13px 13px rgba(57, 86, 164, 0.88) , 14px 14px rgba(58, 87, 166, 0.895) , 15px 15px rgba(58, 88, 168, 0.91) , 16px 16px rgba(59, 89, 170, 0.925) , 17px 17px rgba(60, 90, 172, 0.94) , 18px 18px rgba(60, 91, 174, 0.955) , 19px 19px rgba(61, 92, 176, 0.97) , 20px 20px rgba(61, 93, 177, 0.985);
}
.card__item--purple:hover .invoice-name,
.card__item--purple:hover .invoice-price {
  color: #3E5EB3;
}
.card__item:hover {
  background: #444;
}
.card__item:hover .invoice-n {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.card__info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.card__info .info-invoice {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.card__info .invoice-n {
  width: 60px;
  height: 60px;
  line-height: 36px;
  padding: 0.75rem;
  margin: 0 0.75rem 0 0;
  text-align: center;
  background: silver;
  border-radius: 50%;
  font-size: 36px;
  color: white;
  overflow: hidden;
  -webkit-transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
  transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
}
.card__info .invoice-name {
  line-height: 1.1;
  font-size: 20px;
  margin: 0;
}
.card__info .invoice-name small {
  font-size: 14px;
}
.card__info .invoice-price {
  margin: 0;
  font-size: 24px;
}
.card__full {
  will-change: transform;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: column wrap;
      flex-flow: column wrap;
  position: fixed;
  top: 50%;
  left: 50%;
  width: 384px;
  height: 640px;
  z-index: 2;
  visibility: hidden;
  -webkit-transform-origin: top center;
          transform-origin: top center;
  -webkit-transform: scaleY(0) translate(-50%, -50%);
          transform: scaleY(0) translate(-50%, -50%);
  -webkit-transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
  transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
}
.card__full.active {
  visibility: visible;
  -webkit-transform: scaleY(1) translate(-50%, -50%);
          transform: scaleY(1) translate(-50%, -50%);
}
.card__full.active .card__full-num,
.card__full.active .card__full-handle,
.card__full.active .card__full-info {
  opacity: 1;
}
.card__full-top, .card__full-bottom {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}
.card__full-bottom {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -ms-flex-flow: column wrap;
      flex-flow: column wrap;
  padding: 0 3rem;
  background: white;
}
.card__full-top {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  background: #5171C3;
  overflow: hidden;
}
.card__full-top svg {
  position: absolute;
  top: 1.5rem;
  left: 1.5rem;
  fill: rgba(0, 0, 0, 0.4);
  width: 32px;
  cursor: pointer;
  -webkit-transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
  transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
}
.card__full-top svg:hover {
  fill: rgba(0, 0, 0, 0.7);
}
.card__full-num, .card__full-handle, .card__full-info {
  opacity: 0;
  -webkit-transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
  transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
  -webkit-transition-duration: 2s;
          transition-duration: 2s;
  -webkit-transition-delay: .35s;
          transition-delay: .35s;
}
.card__full-num {
  color: white;
  font-size: 140px;
}
.card__full-handle {
  font-size: 16px;
  margin: 0;
}
.card__full-info {
  margin: 0;
  font-size: 20px;
  color: #404040;
}

.logo {
  position: fixed;
  bottom: 3vh;
  right: 3vw;
  z-index: 2;
}
.logo img {
  width: 45px;
  -webkit-transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
  transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
  -webkit-transform: rotate(0);
          transform: rotate(0);
  filter: invert(100%);
  -webkit-filter: invert(100%);
}
.logo img:hover {
  -webkit-transform: rotate(180deg) scale(1.1);
          transform: rotate(180deg) scale(1.1);
}

</style>
<script>
var Cards = (function() {

	var view 	= $('.view');
	var vw 		= view.innerWidth();
	var vh	 	= view.innerHeight();
	var vo 		= view.offset();
	var card 	= $('.card__item');
	var cardfull = $('.card__full');
	var cardfulltop = cardfull.find('.card__full-top');
	var arrow = cardfulltop.find('svg');
	var cardnum = cardfulltop.find('.card__full-num');
	var cardhandle = cardfull.find('.card__full-handle');
	var cardinfo = cardfull.find('.card__full-info');
	var w 		= $(window);

	var data = [
		{
			num: 9,
			handle: '@tonyromo',
			info: 'This is some info about the player and sports.'
		},
		{
			num: 18,
			handle: '@tombrady',
			info: 'This is some info about the player and sports.'
		},
		{
			num: 12,
			handle: '@aaronrogers',
			info: 'This is some info about the player and sports.'
		},
		{
			num: 7,
			handle: '@benroethlisberger',
			info: 'This is some info about the player and sports.'
		},
		{
			num: 9,
			handle: '@drewbrees',
			info: 'This is some info about the player and sports.'
		},
		{
			num: 18,
			handle: '@peytonmanning',
			info: 'This is some info about the player and sports.'
		}
	];

	var moveCard = function() {
		var self = $(this);
		var selfIndex = self.index();
		var selfO = self.offset();
		var ty = w.innerHeight()/2 - selfO.top -4;

		var color = self.css('border-top-color');
		cardfulltop.css('background-color', color);
		cardhandle.css('color', color);

		updateData(selfIndex);

		self.css({
			'transform': 'translateY(' + ty + 'px)'
		});

		self.on('transitionend', function() {
			cardfull.addClass('active');
			self.off('transitionend');
		});

		return false;
	};

	var closeCard = function() {
		cardfull.removeClass('active');
		cardnum.hide();
		cardinfo.hide();
		cardhandle.hide();
		cardfull.on('transitionend', function() {
			card.removeAttr('style');
			cardnum.show();
			cardinfo.show();
			cardhandle.show();
			cardfull.off('transitionend');
		});
	};

	var updateData = function(index) {
		cardnum.text(data[index].num);
		cardhandle.text(data[index].handle);
		cardinfo.text(data[index].info);
	};

	var bindActions = function() {
		card.on('click', moveCard);
		arrow.on('click', closeCard);
	};

	var init = function() {
		bindActions();
	};

	return {
		init: init
	};

}());

Cards.init();

</script>
</html>