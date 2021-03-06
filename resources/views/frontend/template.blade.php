
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Magnolia - Hotel site template with booking request</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('img/apple-touch-icon-57x57-precomposed.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72-precomposed.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114-precomposed.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('img/apple-touch-icon-144x144-precomposed.png') }}">

	<!-- CSS -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/jquery-ui-1.10.1.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('fontello/css/fontello.css') }}" rel="stylesheet">
	<link href="{{ asset('fontello/css/animation.css') }}" rel="stylesheet">
	<link href="{{ asset('css/weather.css') }}" rel="stylesheet" >

	<!-- Owl Carousel Assets -->
	<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
	<!-- Preloader -->
	<div id="preloader">
		<div id="status"><img src="{{ asset('img/logo.png') }}" alt=""></div>
	</div>
	<!--  end Preloader -->

	<div id="wrapper">
		<div id="main">
			<div class="container">
				<div id="logo"><img src="{{ asset('img/logo.png') }}" alt=""></div>
				<div class="row">
					<div class="col-md-12">
						<h1>Welcome to Magnolia</h1>
						<h2>Cousy and affordable accomodation <strong>in a nice contest</strong>.</h2>
					</div>
				</div>
	<!-- <div id="lang">
		<ul>
			<li><a href="#" id="active">EN</a></li>
			<li><a href="#">ES</a></li>
			<li><a href="#">FR</a></li>
			</ul>
		</div> -->

		<div id="book" >
			<form role="form" method="post" action="assets/booking.php" id="check_avail" autocomplete="off">
				<div class=" row">
					<div class="col-md-3 col-sm-3 first-nogutter dates" id="jrange">
						<input type="text" class=" form-control datepicker" id="check_in" name="check_in" placeholder="Your dates">
						<div class="ll-skin-latoja"></div>
						<span class="input-icon"><i class=" icon-calendar"></i></span>
					</div>

					<div class="col-md-2 col-sm-2 nogutter">
						<div class="styled-select">
							<select class="form-control " name="room_type" id="room_type">
								<option value="" selected>Room type</option>
								<option value="Single Room">Single Room</option>
								<option value="Double Room">Double Room</option>
								<option value="King Double Room">King Double Room</option>
								<option value="Lux. Double Room">Luxury Double Room</option>
							</select>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 nogutter">
						<input type="text" class=" form-control" id="email" name="email" placeholder="Email">
						<span class="input-icon"><i class="icon-mail-3"></i></span>
					</div>
					<div class="col-md-4 col-sm-4 nogutter">
						<div class="qty-buttons" >
							<input type="button" value="+" class="qtyplus" name="quantity">
							<input type="text" name="quantity" id="quantity" value="" class="qty form-control required" placeholder="Guest">
							<input type="button" value="-" class="qtyminus" name="quantity">
						</div>
						<div class="qty-buttons margin" >
							<input type="button" value="+" class="qtyplus" name="child">
							<input type="text" name="child" id="child" value="" class="qty form-control required" placeholder="Child">
							<input type="button" value="-" class="qtyminus" name="child">
						</div>
					</div>

					<button type="submit" class="btn-check" id="submit-check">BOOK NOW</button>
				</div>
			</form>
			<div id="message-booking"></div>
		</div><!-- End book -->

	</div><!-- End container -->

	<nav>
		<ul class="menu">
			<li><a href="#" id="modal-rooms-open">Rooms</a></li>
			<li><a href="#" id="modal-about-open">About</a></li>
			<li><a href="#" id="modal-weather-open">Weather Forecast</a></li>
			<li><a href="#" id="modal-contacts-open">Contacts</a></li>
		</ul>
		<ul id="contact_follow">
			<li><a href="#"><span class="icon-facebook"></span></a></li>
			<li><a href="#"><span class="icon-twitter"></span></a></li>
			<li><a href="#"><span class=" icon-googleplus"></span></a></li>
		</ul>
	</nav>

</div><!-- End main -->

<!-- Modal Latest ROOMS -->
<div id="modal-offers">
	<a href="#" class="modal-close"><i class=" icon-cancel-circled-outline"></i></a>
	<div class="container">

		<div class="row">

			<div class="col-md-12 ">
				<h3>房型介紹</h3>
				<div class="row">
					<div class="col-md-6">
						<div class="photo_polaroid">
							<div class="carousel">
								<div class="item"><img src="{{ asset('img/room_1.jpg') }}"  alt="" class="img-responsive"></div>
								<div class="item"><img src="{{ asset('img/room_1b.jpg') }}"  alt="" class="img-responsive"></div>
								<div class="item"><img src="{{ asset('img/room_1c.jpg') }}"  alt="" class="img-responsive"></div>
							</div><!-- End carousel -->
						</div>
					</div>
					<div class="col-md-6">
						<h4>Single room <strong>110$</strong><span> Pellentesque amet adipiscing scelerisque</span></h4>
						<p class="text-center">
							Lorem ipsum dolor sit amet, pellentesque amet adipiscing scelerisque, vitae urna aenean, justo malesuada at eu, orci varius risus luctus enim a malesuada. Erat in tempor magna, eget porttitor posuere.
						</p>
						<ul class="rooms_info">
							<li><i class="icon-lodging"></i>Single bed</li>
							<li><i class="icon-wifi"></i>Wifi</li>
							<li><i class="icon-air"></i>Air condition</li>
						</ul>
						<p><a href="#" class="modal-close booking">Book now</a></p>
					</div>
				</div><!-- End row -->
				<hr>

				<div class="row">
					<div class="col-md-6">
						<div class="photo_polaroid">
							<div class="carousel">
								<div class="item"><img src="{{ asset('img/room_2.jpg') }}"  alt="" class="img-responsive"></div>
								<div class="item"><img src="{{ asset('img/room_2b.jpg') }}"  alt="" class="img-responsive"></div>
								<div class="item"><img src="{{ asset('img/room_2c.jpg') }}"  alt="" class="img-responsive"></div>
							</div><!-- End carousel -->
						</div>
					</div>
					<div class="col-md-6">
						<h4>Double room <strong>150$</strong><span> Pellentesque amet adipiscing scelerisque</span></h4>
						<p class="text-center">
							Lorem ipsum dolor sit amet, pellentesque amet adipiscing scelerisque, vitae urna aenean, justo malesuada at eu, orci varius risus luctus enim a malesuada. Erat in tempor magna, eget porttitor posuere.
						</p>
						<ul class="rooms_info">
							<li><i class="icon-lodging"></i>Double bed</li>
							<li><i class="icon-wifi"></i>Wifi</li>
							<li><i class="icon-desktop"></i>Cable TV</li>
							<li><i class="icon-air"></i>Air condition</li>
						</ul>
						<p><a href="#" class="modal-close booking">Book now</a></p>
					</div>
				</div><!-- End row -->
				<hr>
				<div class="row">
					<div class="col-md-6">
						<div class="photo_polaroid">
							<div class="carousel">
								<div class="item"><img src="{{ asset('img/room_3.jpg') }}"  alt="" class="img-responsive"></div>
								<div class="item"><img src="{{ asset('img/room_3b.jpg') }}"  alt="" class="img-responsive"></div>
								<div class="item"><img src="{{ asset('img/room_3c.jpg') }}"  alt="" class="img-responsive"></div>
							</div><!-- End carousel -->
						</div>
					</div>
					<div class="col-md-6">
						<h4>King double room <strong>180$</strong><span> Pellentesque amet adipiscing scelerisque</span></h4>
						<p class="text-center">
							Lorem ipsum dolor sit amet, pellentesque amet adipiscing scelerisque, vitae urna aenean, justo malesuada at eu, orci varius risus luctus enim a malesuada. Erat in tempor magna, eget porttitor posuere.
						</p>
						<ul class="rooms_info">
							<li><i class="icon-lodging"></i>King  double</li>
							<li><i class="icon-wifi"></i>Wifi</li>
							<li><i class="icon-desktop"></i>Cable TV</li>
							<li><i class="icon-cafe"></i>Breakfast included</li>
							<li><i class="icon-air"></i>Air condition</li>
						</ul>
						<p><a href="#" class="modal-close booking">Book now</a></p>
					</div>
				</div><!-- End row -->
				<hr>
				<div class="row">
					<div class="col-md-6">
						<div class="photo_polaroid">
							<div class="carousel">
								<div class="item"><img src="{{ asset('img/room_4.jpg') }}"  alt="" class="img-responsive"></div>
								<div class="item"><img src="{{ asset('img/room_4b.jpg') }}"  alt="" class="img-responsive"></div>
								<div class="item"><img src="{{ asset('img/room_4c.jpg') }}"  alt="" class="img-responsive"></div>
							</div><!-- End carousel -->
						</div>
					</div>
					<div class="col-md-6">
						<h4>Luxury double room <strong>190$</strong><span> Pellentesque amet adipiscing scelerisque</span></h4>
						<p class="text-center">
							Lorem ipsum dolor sit amet, pellentesque amet adipiscing scelerisque, vitae urna aenean, justo malesuada at eu, orci varius risus luctus enim a malesuada. Erat in tempor magna, eget porttitor posuere.
						</p>
						<ul class="rooms_info">
							<li><i class="icon-lodging"></i>King  double</li>
							<li><i class="icon-wifi"></i>Wifi</li>
							<li><i class="icon-desktop"></i>Cable TV</li>
							<li><i class="icon-cafe"></i>Breakfast included</li>
							<li><i class="icon-air"></i>Air condition</li>
						</ul>
						<p><a href="#" class="modal-close booking">Book now</a></p>
					</div>
				</div><!-- End row -->
				<hr>
				<div class="row">
					<div class="col-md-12">

						<h3 style="margin-top:30px">Prices</h3>
						<table class="table" style="margin-bottom:60px;">
							<thead>
								<tr>
									<th>
										Room Type
									</th>
									<th>
										Low (23/03 to 31/05)
									</th>
									<th>
										Middle (23/03 to 31/05)
									</th>
									<th>
										High (23/03 to 31/05)
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										Single room
									</td>
									<td>110$</td>
									<td>120$</td>
									<td>140$</td>
								</tr>
								<tr>
									<td>
										Double room
									</td>
									<td>
										150$
									</td>
									<td>
										150$
									</td>
									<td>
										180$
									</td>
								</tr>
								<tr>
									<td>
										King Double room
									</td>
									<td>
										180$
									</td>
									<td>
										150$
									</td>
									<td>
										180$
									</td>
								</tr>
								<tr>
									<td>
										Luxury room
									</td>
									<td>
										190$
									</td>
									<td>
										150$
									</td>
									<td>
										180$
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>


			</div><!-- End col-md-12 -->

		</div><!-- End row -->
	</div><!-- End conainer -->
</div><!-- End modal -->

<!-- Modal Notified -->
<div id="modal-about">
	<a href="#" class="modal-close"><i class=" icon-cancel-circled-outline"></i></a>
	<div class="container">

		<div class="row">

			<div class="col-md-12 text-center">
				<h3>Magnolia & facilities</h3>
				<p class="lead">
					Appetere dignissim vis et. Te per dolore expetenda voluptaria, an eam autem perfecto patrioque.
				</p>
			</div>
		</div><!-- End row -->

		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<p>Dolor aliquip pro in, quo noster eirmod animal ei, eum ne recteque adipiscing concludaturque. Usu officiis verterem persequeris ut, simul elitr ut eos. In amet velit tantas quo, at nostrum similique eam. Option epicurei no sed, pro populo honestatis ea. An ius iisque conceptam, sea iusto labitur an. In dico ullum inimicus eam, prima nulla inermis usu id, tempor ridens invidunt eos ut. Sit ancillae laboramus no, ei duo illum viderer fabulas, eum cu odio tacimates constituam. Ad vero vidit cum. Cu ornatus pertinacia eam. At ius eros consul efficiantur, duis eius putant in sed. Rebum brute nominavi ei eos.</p>
			</div>
		</div><!-- End row -->

		<hr>

		<div class="row" style=" margin-bottom:30px">
			<div class="col-md-4 text-center">
				<p class="photo_polaroid"><img src="{{ asset('img/restaurant.jpg') }}" alt="Pic" class="img-responsive"></p>
				<h4>Restaurant</h4>
				<p>Duo suas appetere te, graeco omittam ut his. Et eos oratio intellegebat, vel et semper legimus. At virtute feugait docendi eos. Mel ne persecuti contentiones, blandit principes prodesset quo an.</p>
			</div>
			<div class="col-md-4 text-center">
				<p class="photo_polaroid"><img src="{{ asset('img/bar.jpg') }}" alt="Pic" class="img-responsive"></p>
				<h4>Cocktail Bar</h4>
				<p>Duo suas appetere te, graeco omittam ut his. Et eos oratio intellegebat, vel et semper legimus. At virtute feugait docendi eos. Mel ne persecuti contentiones, blandit principes prodesset quo an.</p>
			</div>
			<div class="col-md-4 text-center">
				<p class="photo_polaroid"><img src="{{ asset('img/swimming.jpg') }}" alt="Pic" class="img-responsive"></p>
				<h4>Swimming pool</h4>
				<p>Duo suas appetere te, graeco omittam ut his. Et eos oratio intellegebat, vel et semper legimus. At virtute feugait docendi eos. Mel ne persecuti contentiones, blandit principes prodesset quo an.</p>
			</div>
		</div><!-- End row -->

	</div>

</div><!-- End conainer -->
</div><!-- End modal -->

<!-- Modal  Weather -->
<div id="modal-weather">
	<a href="#" class="modal-close"><i class=" icon-cancel-circled-outline"></i></a>
	<div class="container">

		<div class="row">

			<div class="col-md-10 col-md-offset-1">
				<h3>Weather forecast</h3>
				<p class=" lead text-center">
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
				</p>
				<div id="weather" class="clearfix"></div>
			</div>

		</div><!-- End row -->
	</div><!-- End conainer -->
</div><!-- End modal -->

<!-- Modal  Contacts -->
<div id="modal-contacts">
	<a href="#" class="modal-close"><i class=" icon-cancel-circled-outline"></i></a>
	<div class="container">

		<div class="row">

			<div class="col-md-12">
				<h3>聯絡我們</h3>
				<div id="map"></div><!-- end map-->
				<hr>
			</div>
		</div><!-- End row -->

		<div class="row">

			<div class="col-md-4">
				<h4>From the airport <i class=" icon-flight-1 pull-right"></i></h4>
				<ul class="list">
					<li>Vix in error iuvaret, at omnium prompta aliquam vel. Sea an purto vide posidonium, eos modus dicit ne.</li>
					<li>Appetere dignissim vis et. Te per dolore expetenda voluptaria, an eam autem perfecto patrioque.</li>
				</ul>
			</div>

			<div class="col-md-4">
				<h4>From the station <i class=" icon-rail pull-right"></i></h4>
				<ul class="list">
					<li>Vix in error iuvaret, at omnium prompta aliquam vel. Sea an purto vide posidonium, eos modus dicit ne.</li>
					<li>Appetere dignissim vis et. Te per dolore expetenda voluptaria, an eam autem perfecto patrioque.</li>
				</ul>
			</div>

			<div class="col-md-4">
				<h4>By car <i class="icon-road pull-right"></i></h4>
				<ul class="list">
					<li>Vix in error iuvaret, at omnium prompta aliquam vel. Sea an purto vide posidonium, eos modus dicit ne.</li>
					<li>Appetere dignissim vis et. Te per dolore expetenda voluptaria, an eam autem perfecto patrioque.</li>
				</ul>
			</div>
		</div><!-- End row -->

		<div class="row">
			<div class="col-md-12">
				<ul id="contact_info">
					<li><strong>Address</strong> Street Number & Name - Postal Code 2034 BXU</li>
					<li><strong>Telephone</strong> +353 1 234 566 78 / +353 1 234 566 78</li>
					<li><a href="#">info@emailaddress.com</a> - <a href="#">www.magnolia.com</a></li>
				</ul>
			</div>
		</div>

	</div><!-- End conainer -->
</div><!-- End modal -->
</div><!-- End wrapper -->

<div id="slides">
	<ul class="slides-container">
		<li><img src="{{ asset('img/slide_1.jpg') }}" alt=""></li>
		<li><img src="{{ asset('img/slide_2.jpg') }}" alt=""></li>
		<li><img src="{{ asset('img/slide_3.jpg') }}" alt=""></li>
		<li><img src="{{ asset('img/slide_4.jpg') }}" alt=""></li>
	</ul>
</div><!-- End background slider -->

<!-- JQUERY -->
<script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui-1.10.1.min.js') }}"></script>
<script src="{{ asset('js/calendar_func.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.min.js') }}"></script>
<script src="{{ asset('js/jquery.superslides.min.js') }}"></script>
<script  type="text/javascript">
	$('#slides').superslides({
		play: 6000,
		pagination:false,
		animation_speed: 800,
		animation: 'fade'
	});
</script>

<!-- OTHER JS -->
<script src="{{ asset('js/jquery.zweatherfeed.min.js') }}"></script>
<script src="{{ asset('js/retina.min.js') }}"></script>
<script src="{{ asset('js/jquery.placeholder.min.js') }}"></script>
<script  src="{{ asset('js/functions.js') }}"></script>
<script src="{{ asset('assets/validate.js') }}"></script>

<!-- CAROUSEL -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script>
//Carousel
$(document).ready(function(){
	"use strict";
	//Carousel
	$(".carousel").owlCarousel({
		items : 1,
		singleItem:true,
		responsive:true,
		autoHeight : true,
		transitionStyle:"fade"
	});
});
</script>

<!-- GOOGLE MAP -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="{{ asset('js/mapmarker.jquery.js') }}"></script>
</body>
</html>
