<!DOCTYPE html>
<html lang="lt">
    <head>
        <title><?php echo $page->title; ?></title>
        <meta charset="UTF-8">
        <meta http-equiv = "X-UA-Compatible" content="IE-edge">
        <meta name='title' content='<?php $page->seo_title ?>'>
        <meta name='description' content='<?php $page->seo_description ?>'>
        <meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=yes'>
        <meta name='author' content='Netmaster.lt'>
        <link rel="stylesheet"  href="<?php echo $config->urls->templates?>css/bootstrap.min.css">
        <link rel="stylesheet"  href="<?php echo $config->urls->templates?>css/styles.css">
        
        <?php 
        if($page->id==1016){
        ?>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript">
           function initialize() {
                var styles = [
                    {
                "featureType": "All",
                "elementType": "All",
                "stylers": [
                  { "lightness": 26 },
                  { "gamma": 0.66 },
                  { "saturation": -84 }
                ]
              },{
                "featureType": "All",
                "elementType": "labels.text.stroke",
                "stylers": [
                  { "visibility": "off" }
                ]
              },{
                "featureType": "poi.business",
                "elementType": "labels.text",
                "stylers": [
                  { "visibility": "off" }
                ]
              },{
                "featureType": "poi.business",
                "elementType": "labels.icon",
                "stylers": [
                  { "visibility": "off" }
                ]
              },{
                "featureType": "poi.place_of_worship",
                "elementType": "labels.text",
                "stylers": [
                  { "visibility": "off" }
                ]
              },{
                "featureType": "poi.place_of_worship",
                "elementType": "labels.icon",
                "stylers": [
                  { "visibility": "off" }
                ]
              },{
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                  { "visibility": "simplified" }
                ]
              },{
                "featureType": "water",
                "elementType": "All",
                "stylers": [
                  { "visibility": "on" },
                  { "hue": "#50a5d1" },
                  { "gamma": 0.27 },
                  { "lightness": 46 },
                  { "saturation": 100 }
                ]
              },{
                "featureType": "administrative.neighborhood",
                "elementType": "labels.text.fill",
                "stylers": [
                  { "color": "#333333" }
                ]
              },{
                "featureType": "road.local",
                "elementType": "labels.text",
                "stylers": [
                  { "weight": 0.5 }
                ]
              },{
                "featureType": "transit.station",
                "elementType": "labels.icon",
                "stylers": [
                  { "gamma": 1 },
                  { "lightness": 30 },
                  { "saturation": 14 }
                ]
              },{
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                  { "weight": 8 },
                  { "hue": "#ff5500" },
                  { "color": "#ffffff" }
                ]
              },{
                "featureType": "transit",
                "elementType": "All",
                "stylers": [
                  { "color": "#f50000" },
                  { "saturation": -57 }
                ]
              },{
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                  { "color": "#c68d89" }
                ]
              },{
                "elementType": "labels.text",
                "stylers": [
                  { "color": "#0c0000" },
                  { "saturation": 23 },
                  { "lightness": -2 }
                ]
              },{
                "featureType": "road.highway",
                "elementType": "labels.text",
                "stylers": [
                  { "color": "#ffffff" },
                  { "saturation": 100 },
                  { "lightness": 99 },
                  { "gamma": 0.44 }
                ]
              },{
              },{
                "featureType": "water",
                "elementType": "labels",
                "stylers": [
                  { "visibility": "simplified" }
                ]
              }
                ];
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    draggable: false,
                    scrollwheel: false,
                    mapTypeControl: true,
                    panControl: true,
                    panControlOptions: {
                        zIndex:1000,
                        position: google.maps.ControlPosition.RIGHT_CENTER
                    },
                    zoomControl: true,
                    zoomControlOptions: {
                        zIndex:1000,
                        style: google.maps.ZoomControlStyle.LARGE,
                        position: google.maps.ControlPosition.RIGHT_CENTER
                    },
                    scaleControl: true,  // fixed to BOTTOM_RIGHT
                    streetViewControl: true,
                    streetViewControlOptions: {
                        zIndex:1000,
                        position: google.maps.ControlPosition.RIGHT_CENTER
                    },
                    disableDoubleClickZoom: true,
                    mapTypeControlOptions: {
                        zIndex:1000,
                        mapTypeIds: [ 'Styled']
                    },
                    center: new google.maps.LatLng(<?php echo $pages->get(1016)->marker->lat.' , '.$pages->get(1016)->marker->lng; ?>),
                    zoom: <?php echo $pages->get(1016)->marker->zoom; ?>,
                   mapTypeId: 'Styled'
                }
                var map = new google.maps.Map(mapCanvas,mapOptions);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(<?php echo $pages->get(1016)->marker->lat.' , '.$pages->get(1016)->marker->lng; ?>),
                    map: map,
                    icon: '<?php echo $config->urls->templates?>images/pin.png',
                    animation: google.maps.Animation.DROP,
                    title: 'Sarvuotosdurys'
                });
                var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
                map.mapTypes.set('Styled', styledMapType);
            }
              google.maps.event.addDomListener(window, 'load', initialize);
              google.maps.event.addDomListener(window, 'resize', initialize);
        </script>
        <?php } ?>
    </head>
    
    <body> 
        <header class='container'>
            <div id="mobHeader">
                <div class="row">
                    <div class='col-sm-4 col-xs-6'>
                       <a href="<?php echo $pages->get(1)->url?>"> <img class='logo' src="<?php echo $config->urls->templates?>images/logovector.png"></a>
                    </div>
                    <div class="rm">
                        <div class='col-sm-4'>
                            <div class="top-c">
                                <table align="center">
                                    <tr>
                                        <td class='telefonas'><img src="<?php echo $config->urls->templates?>images/phone_0.png"></td>
                                        <td><?php $i=1;foreach ($pages->get(1016)->telefonai as $telefonai){if($i==1){echo "<p>".$telefonai->telefonas.", </p>";$i++;}else{echo "<p>".$telefonai->telefonas."</p>";}} ?></td>
                                    <tr>
                                    <tr>
                                        <td><img src="<?php echo $config->urls->templates?>images/mail_0.png"></td>
                                        <td><?php echo $pages->get(1016)->pastas; ?></td>
                                    <tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-4 col-xs-6 pull-right'>
                        <nav class=" nav navbar-default" >
                            <button class="navbar-toggle" data-toggle = "collapse">
                                <img src="<?php echo $config->urls->templates?>images/togglebar.png">                    
                            </button>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="<?php if($page->id==1){echo "Here ";}?> menu-link durys"><a class='ugis' href="<?php echo $pages->get(1)->url?>">Šarvuotos durys</a></li>
                                    <li class='<?php if($page->id==1015){echo "Here ";}?> menu-link kainos'><a class='ugis'href="<?php echo $pages->get(1015)->url?>">Kainos</a></li>
                                    <li class="<?php if($page->id==1016){echo "Here ";}?> menu-link kontaktai"><a class='ugis' href="<?php echo $pages->get(1016)->url?>">Kontaktai</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id='mobmenu' class="disnon">
                    <div class="row">
                        <ul class="nav navbar-nav mobNav">
                            <li class="<?php if($page->id==1){echo "Here ";}?>  col-xs-12 menu-link durys"><a href="<?php echo $pages->get(1)->url?>">Šarvuotos durys</a></li>
                            <li class="<?php if($page->id==1015){echo "Here ";}?> col-xs-12 menu-link kainos"><a href="<?php echo $pages->get(1015)->url?>">Kainos</a></li>
                            <li class="<?php if($page->id==1016){echo "Here ";}?> col-xs-12 menu-link kontaktai"><a href="<?php echo $pages->get(1016)->url?>">Kontaktai</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">    
                <div class='mob-c' >
                    <div class="top-c">
                      <table align="center">
                          <tr>
                              <td class='telefonas'><img src="<?php echo $config->urls->templates?>images/phone_0.png"></td>
                              <td><?php $i=1;foreach ($pages->get(1016)->telefonai as $telefonai){if($i==1){echo "<p>".$telefonai->telefonas.", </p>";$i++;}else{echo "<p>".$telefonai->telefonas."</p>";}} ?></td>
                          <tr>
                          <tr>
                              <td><img src="<?php echo $config->urls->templates?>images/mail_0.png"></td>
                              <td><?php echo $pages->get(1016)->pastas; ?></td>
                          <tr>
                      </table>
                    </div>
                </div>
            </div>
            <div id='myCarousel' class='carousel slide'>
              <ol class='carousel-indicators'>
                <?php 
                  $i=0; 
                  foreach($pages->get(1)->karusele as $image){
                    if($i==0){echo "<li data-target = '#myCarousel' data-slide-to = '{$i}' class= 'active' ></li>";$i++;}
                    else{echo "<li data-target = '#myCarousel' data-slide-to = '{$i}'></li>";$i++;}
                  }
                ?>
              </ol>
              <div class ='carousel-inner'>
                <?php 
                  $i=0; 
                  foreach($pages->get(1)->karusele as $image){
                    if($i==0){
                      echo "<div class='item active'>
                            <img src='{$image->url}' alt='{$image->description}' class='img-responsive'>
                            </div>";$i++;
                    }
                    else{
                      echo "<div class='item'>
                            <img src='{$image->url}' alt='{$image->description}' class='img-responsive'>
                            </div>";$i++;
                    }
                  }
              if(1>$i){ 
              echo  "
                      </div>

                      <a class='carousel-control left' href='#myCarousel' data-slide = 'prev'>
                          <img src='<?php echo $config->urls->templates?>images/arrowLeft.png'>
                      </a>
                      <a class='carousel-control right' href='#myCarousel' data-slide = 'next'>
                          <img src='<?php echo $config->urls->templates?>images/arrowLeft.png'>
                      </a>
                    ";}
              ?>
            </div>
        </header>