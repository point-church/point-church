<?php get_header(); ?>

<section id="home-intro" class="photo" data-photo="<?php bloginfo('stylesheet_directory');?>/images/home-intro-bg.jpg">
	<div class="wrapper">
		<h2>
			<dl>
				<dt>The Point Church</dt>
				<dd>Pointing people to Jesus</dd>
			</dl>
		</h2>
	</div>
</section>

<section id="home-welcome">
	<div class="wrapper">
		<h3 class="section-head">Welcome</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at metus sagittis, fermentum velit vel, pellentesque turpis. Donec feugiat, sem vitae ultricies pulvinar, tellus neque imperdiet purus, id fermentum tortor metus vitae dolor. Suspendisse vel nibh at sapien sagittis sodales.</p>
		<div class="buttons">
			<a href="#" class="button">Beliefs</a>
			<a href="#" class="button">Staff</a>
		</a>
	</div>
</section>

<section id="home-worship" class="photo">
	<div class="wrapper">
		<h3 class="section-head">Worship</h3>
		<h4 class="section-head-desc">Energetic. Alive. Fresh.</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at metus sagittis, fermentum velit vel, pellentesque turpis. Donec feugiat, sem vitae ultricies pulvinar, tellus neque imperdiet purus, id fermentum tortor metus vitae dolor. Suspendisse vel nibh at sapien sagittis sodales.</p>
		<div class="buttons">
			<a href="#" class="button">Times & Locations</a>
			<a href="#" class="button">What to Expect</a>
		</div>
	</div>
</section>

<section id="home-kids">
	<div class="wrapper">
		<h3 class="section-head">Kids</h3>
		<h4 class="section-head-desc">Safe. Fun. Creative.</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at metus sagittis, fermentum velit vel, pellentesque turpis. Donec feugiat, sem vitae ultricies pulvinar, tellus neque imperdiet purus, id fermentum tortor metus vitae dolor. Suspendisse vel nibh at sapien sagittis sodales.</p>
		<div class="buttons">
			<a href="#" class="button">Kid Point</a>
			<a href="#" class="button">Students</a>
		</div>
		<span class="paint-splatter">
			<span id="orange"></span>
			<span id="green"></span>
			<span id="pink"></span>
			<span id="purple"></span>
			<span id="pink2"></span>
		</span>
	</div>
</section>

<section id="home-sermons" class="photo">
	<div class="wrapper">
		<h3 class="section-head">Listen to a Sermon</h3>
		<h4 class="section-head-desc">Biblical. Dynamic. Engaging.</h4>
		<div class="buttons">
			<a href="#" class="button">Latest Message</a>
			<a href="#" class="button">Series Archive</a>
		</div>
	</div>
</section>

<section id="home-locations">
	<div class="wrapper">
		<h3 class="section-head">Explore a Campus</h3>
		<h4 class="section-head-desc">One Church in Multiple Locations</h4>
		<ul class="locations">
			<li class="apex">
				<dl>
					<dt>Apex</dt>
					<dd>9am &amp; 11am</dd>
				</dl>
			</li>
			<li class="cary">
				<dl>
					<dt>Cary</dt>
					<dd>9am &amp; 11am</dd>
				</dl>
			</li>
			<li class="espanol">
				<dl>
					<dt>Español</dt>
					<dd>4pm</dd>
				</dl>
			</li>
			<li class="raleigh">
				<dl>
					<dt>Raleigh</dt>
					<dd>10am</dd>
				</dl>
			</li>	
		</ul>

		<div class="buttons">
			<a href="#" class="button">Find Campus Closest to Me</a>
		</div>
	</div>
</section>

<section id="map-canvas"></section>

<section id="home-leadership" class="photo">
	<div class="wrapper">
		<h3 class="section-head">Leadership</h3>
		<div class="buttons">
			<a href="#" class="button">Meet Our Team</a>
		</div>
	</div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
var map;

var MY_MAPTYPE_ID = 'custom_style';

function initialize() {

  var featureOpts = [
    {
      stylers: [
        { hue: '#000000' },
        { saturation: -100 },
        { lightness: -10 },
        { visibility: 'simplified' },
        { gamma: 0.5 },
        { weight: 0.5 },
        { invert_lightness: true }

      ]
    },
    {
      elementType: 'labels',
      stylers: [
        { visibilty: "off" }
      ]
    },
    {
      featureType: 'water',
      stylers: [
        { color: '#333333' }
      ]
    },
    {
    	featureType: "road",
    	elementType: "labels",
    	stylers: [
      		{ visibility: "off" }
    	]
    },
    {
    	featureType: "poi",
    	elementType: "labels",
    	stylers: [
    		{ visibility: "off" }
    	]
    }	
  ];

  var mapOptions = {
    zoom: 12,
    center: new google.maps.LatLng(35.7400373, -78.7202436),
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
    },
    mapTypeId: MY_MAPTYPE_ID,
    scrollwheel: false
  };

  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  var styledMapOptions = {
    name: 'Custom Style'
  };

  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

  var image = 'wp-content/themes/point-church/images/piont-church-marker.png';

  var apex = new google.maps.Marker({
      position: new google.maps.LatLng( 35.712722, -78.840252 ),
      map: map,
      title: 'Apex Campus',
      icon: image
  });

  var apexContent = '<div id="map-info">'+
      '<h4 class="campus-name">Apex Campus<h4>'+
      '<p class="address">1402 E Williams St, Apex, NC 27539</p>'+
      '</div>';

  var apexInfo = new google.maps.InfoWindow({
      content: apexContent
  });

  var raleigh = new google.maps.Marker({
      position: new google.maps.LatLng( 35.77959, -78.67595 ),
      map: map,
      title: 'Raleigh Campus',
      icon: image
  });

  var raleighContent = '<div id="map-info">'+
      '<h4 class="campus-name">Raleigh Campus<h4>'+
      '<p class="address">2109 Avent Ferry Rd, Raleigh, NC 27606</p>'+
      '</div>';

  var raleighInfo = new google.maps.InfoWindow({
      content: raleighContent
  });

  var cary = new google.maps.Marker({
      position: new google.maps.LatLng( 35.76536, -78.75111 ),
      map: map,
      title: 'Cary Campus',
      icon: image
  });

  var caryContent = '<div id="map-info">'+
      '<h4 class="campus-name">Cary Campus<h4>'+
      '<p class="address">1503 Walnut St, Cary, NC 27511</p>'+
      '</div>';

  var caryInfo = new google.maps.InfoWindow({
      content: caryContent
  });

  google.maps.event.addListener(apex, 'click', function() {
    apexInfo.open(map,apex);
  });

  google.maps.event.addListener(raleigh, 'click', function() {
    raleighInfo.open(map,raleigh);
  });

  google.maps.event.addListener(cary, 'click', function() {
    caryInfo.open(map,cary);
  });


}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>


<?php get_footer(); ?>