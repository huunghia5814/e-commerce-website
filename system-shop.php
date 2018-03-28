<?php
    require 'header.php'
?>
<section class="top-section">
    <div class="offset-borders">
        <div class="full-header-container" id="header-contact">
            <div class="full-header">
                <div class="container">
                    <h1>Hệ Thống Cửa H&#224;ng</h1>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-section">

    <div class="container">
        <div class="content-box" style="margin:60px 0px 0px 0px;padding:0px;border:0px">
             
    <div class="row row-fluid">
        <div class="clearfix ">
            <div class="container no-padding">
                <div class="col-sm-12">
                    <div class="wpb_wrapper">
                        <header class="section-header alignment-center vu_overline">
                            <h2><span>C&#225;c cửa h&#224;ng trong hệ thống Mina</span></h2>
                            <p>C&#225;c cửa h&#224;ng trải rộng nhằm phục vụ nhanh nhất cho kh&#225;ch h&#224;ng</p>
                        </header>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-fluid">
        <div class="clearfix  vc_custom_1439563349881">
            <div class="container no-padding">
                    <div class="col-sm-6 itemCuaHang">
                        <div class="wpb_wrapper">

                            <div class="wpb_text_column wpb_content_element">
                                <img src="assets/images/logo.png?w=300&amp;h=300&amp;mode=crop&amp;scale=both"/>
                                <div class="wpb_wrapper">
                                    <p class="has-icon"><i class="fa fa-map-marker"></i><a href="#"> Mina B&#236;nh Dương</a></p>
                                    <p class="has-icon">
                                        <i class="fa fa-location-arrow"></i> 215 Yersin, P.Ph&#250; Cường, TX.Thủ Dầu Một
                                    </p>
                                    <p class="has-icon"><i class="fa fa-phone"></i> (0650) 38 43 005</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 itemCuaHang">
                        <div class="wpb_wrapper">

                            <div class="wpb_text_column wpb_content_element">
                                <img src="assets/images/logo.png?w=300&amp;h=300&amp;mode=crop&amp;scale=both"/>
                                <div class="wpb_wrapper">
                                    <p class="has-icon"><i class="fa fa-map-marker"></i><a href="#"> Mina Nơ Trang Long</a></p>
                                    <p class="has-icon">
                                        <i class="fa fa-location-arrow"></i> 38 Nơ Trang Long, P.14, Q.B&#236;nh Thạnh, TP.HCM
                                    </p>
                                    <p class="has-icon"><i class="fa fa-phone"></i> (08) 35 10 05 43</p>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
  </div>
          </div>
</section>



<script>
     // Define your locations: HTML content for the info window, latitude, longitude
    var locations = [
                ['<h5>Sweethome Bình Dương</h5></br><p>215 Yersin, P.Phú Cường, TX.Thủ Dầu Một</p>', 10.9816219, 106.6541529],['<h5>Sweethome Nơ Trang Long</h5></br><p>38 Nơ Trang Long, P.14, Q.Bình Thạnh, TP.HCM</p>', 10.8087725, 106.6928947],['<h5>Sweethome Hòa Bình</h5></br><p>177 Hòa Bình, P.Hiệp Tân, Q.Tân Phú, TP.HCM</p>', 10.7703394, 106.6293724],['<h5>Sweethome Bạch Đằng</h5></br><p>324-326 Bạch Đằng, P.14, Q.Bình Thạnh, TP.HCM</p>', 10.803303, 106.7013465],['<h5>Sweethome Xô Viết Nghệ Tĩnh</h5></br><p>197-199 Xô Viết Nghệ Tĩnh, P.17, Q. Bình Thạnh, TP.HCM</p>', 10.799593, 106.7087923],['<h5>Sweethome Cao Thắng</h5></br><p>58D Cao Thắng, P.5, Q.3, TP.HCM</p>', 10.7698464, 106.6804599],['<h5>Sweethome Cao Thắng</h5></br><p>74 Cao Thắng, P.4, Q.3, TP.HCM</p>', 10.7720023, 106.679593],['<h5>Sweethome Hoàng Diệu</h5></br><p>237 Hoàng Diệu, P.8, Q.4, TP.HCM</p>', 10.7619557, 106.702199],['<h5>Sweethome Quang Trung</h5></br><p>294 Quang Trung, P.10, Q. Gò Vấp, TP.HCM</p>', 10.8305125, 106.6692316]
     ];
    

     // Setup the different icons and shadows
     var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';

     var icons = [
       iconURLPrefix + 'red-dot.png',
       iconURLPrefix + 'green-dot.png',
       iconURLPrefix + 'blue-dot.png',
       iconURLPrefix + 'orange-dot.png',
       iconURLPrefix + 'purple-dot.png',
       iconURLPrefix + 'pink-dot.png',
       iconURLPrefix + 'yellow-dot.png'
     ]
     var iconsLength = icons.length;

     var map = new google.maps.Map(document.getElementById('map'), {
         zoom: 10,
         center: new google.maps.LatLng(-37.92, 151.25),
         mapTypeId: google.maps.MapTypeId.ROADMAP,
         mapTypeControl: false,
         streetViewControl: false,
         panControl: false,
         zoomControlOptions: {
             position: google.maps.ControlPosition.LEFT_BOTTOM
         }
     });

     var infowindow = new google.maps.InfoWindow({
         maxWidth: 160
     });

     var markers = new Array();

     var iconCounter = 0;

     // Add the markers and infowindows to the map
     for (var i = 0; i < locations.length; i++) {
         var marker = new google.maps.Marker({
             position: new google.maps.LatLng(locations[i][1], locations[i][2]),
             map: map,
             animation: google.maps.Animation.BOUNCE
             //icon: icons[iconCounter]
         });

         markers.push(marker);

         google.maps.event.addListener(marker, 'click', (function (marker, i) {
             return function () {
                 infowindow.setContent(locations[i][0]);
                 infowindow.open(map, marker);
             }
         })(marker, i));

         iconCounter++;
         // We only have a limited number of possible icon colors, so we may have to restart the counter
         if (iconCounter >= iconsLength) {
             iconCounter = 0;
         }
     }

     function autoCenter() {
         //  Create a new viewpoint bound
         var bounds = new google.maps.LatLngBounds();
         //  Go through each...
         for (var i = 0; i < markers.length; i++) {
             bounds.extend(markers[i].position);
         }
         //  Fit these bounds to the map
         map.fitBounds(bounds);
     }
     autoCenter();
  </script> 

<?php
    require 'footer.php';
?>



