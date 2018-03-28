<footer class="page-footer">
    <div class="footer-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6 footer-column onscroll-animate">

                            <h4>Giờ l&#224;m việc</h4>
                            <p>
                                Thứ 2 Thứ 6 : 8:00 SA - 08:30 CH<br>
                                Thứ 7 Chủ Nhật: 10:00 SA - 16:30 CH
                            </p>
                            <div class="margin-40"></div>


                        </div>
                        <div class="col-sm-6 footer-column onscroll-animate" data-delay="300">
                            <h4>Li&#234;n Hệ Với Ch&#250;ng T&#244;i</h4>
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <p class="icon-opening"><i class="fa fa-phone"></i></p>
                                    <p class="icon-opening-content">(08) 38 99 77 44</p>
                                </div>
                            </div>
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <p class="icon-opening"><i class="fa fa-location-arrow"></i></p>
                                    <p class="icon-opening-content">
                                        Hồ Ch&#237; Minh
                                    </p>
                                </div>
                            </div>
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <p class="icon-opening"><i class="fa fa-envelope"></i></p>
                                    <p class="icon-opening-content">info@mina.com.vn</p>
                                </div>
                            </div>
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <p class="icon-opening"><i class="fa fa-globe"></i></p>
                                    <p class="icon-opening-content">Mina</p>
                                </div>
                            </div>
                            <div class="margin-40"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-sm-12 footer-column onscroll-animate" data-delay="400">
                            <h4>Mạng x&#227; hội</h4>
                            <div class="social-icon-container">
                                <a href="https://www.facebook.com/SweetHome.com.vn"><i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="social-icon-container">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>

                            <div class="social-icon-container">
                                <a><i class="fa fa-pinterest"></i></a>
                            </div>

                            <div class="margin-40"></div>
                        </div>
                        <!-- <div class="col-sm-6 footer-column onscroll-animate" data-delay="500">
                              <div class="fb-page" data-href="https://www.facebook.com/SweetHome.com.vn" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
                                <div class="fb-xfbml-parse-ignore">
                                    <blockquote cite="https://www.facebook.com/SweetHome.com.vn"><a href="https://www.facebook.com/SweetHome.com.vn">Sweethome</a></blockquote>
                                </div>
                            </div>
                            <div class="margin-40"></div>

                        </div> -->
                    </div>
                </div>
            </div>

            <p class="site-info">2017 Mina </p>
            <a href="#all" class="to-top scroll-to"></a>
        </div>
    </div>
    <!-- .footer-darl -->
    <script>
        var frm = $('#rss-subscribe');
        $(".dangKyEmail").click(function (ev) {
            $.ajax({
                type: "POST",
                url: "newsletterManager/signUp",
                data: frm.serialize(),
                success: function (data) {
                    alert(data.Msg);
                    document.getElementById("rss-subscribe").reset();
                },
                error: function () { alert("error"); }
            });

            ev.preventDefault();
        });
    </script>

</footer>
</div>
<!-- <div id="hidden_link" style="display: none;">
   <a target="_blank" href="blog-tin-tuc-sweethome/qua-8-3-tu-sweethome-bakery-cho-phai-dep-dep-hon-7665.html">
        <img src="File/Manager/Upload/images/banner/sweethome20170308.jpg" width="100%" />
        </a>
</div>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $.fancybox.open('#hidden_link');
        //$("#hidden_link").fancybox().trigger('click');
    });
</script> -->
<!--<script type="text/javascript">-->
<!--    $(document).ready(function (e) {-->
<!--        $('.theme-customizer-icon').click(function (e) {-->
<!--            $('#theme-customizer').toggleClass('slide-out');-->
<!--        });-->
<!---->
<!--        var logo1 = $('#logo-1');-->
<!--        var logo2 = $('#logo-2');-->
<!--        var body_el = $('body');-->
<!--        var all_el = $('#all');-->
<!--        var bread_img = $('#bread-image');-->
<!--        var devices_img = $('#devices-img');-->
<!--        var slider_testimonial = $('#testimonials-slider');-->
<!--        var slider_post_images = $('#post-images-slider-1');-->
<!--        var post_slider = $('#post-slider-1');-->
<!--        $('.theme-syle').click(function (e) {-->
<!--            e.preventDefault();-->
<!--            if ($('#dark-stylesheet').length > 0) {-->
<!--                $('#dark-stylesheet')[0].disabled = true;-->
<!--                $('#dark-stylesheet').remove();-->
<!--            }-->
<!--            body_el.removeClass();-->
<!--            all_el.removeClass();-->
<!--            $('#devices-section.section-black-cover').removeClass('section-black-cover').addClass('section-color-cover');-->
<!--            $('.section-black-cover').removeClass('section-black-cover').addClass('section-white-cover');-->
<!--            bread_img.attr('src', 'images/bread.html');-->
<!--            devices_img.attr('src', 'images/devices.html');-->
<!--            logo1.attr('src', 'images/logo.html');-->
<!--            logo2.attr('src', 'images/logo_secondary.html');-->
<!---->
<!--            switch ($(this).attr('id')) {-->
<!--                case 'theme-pattern':-->
<!--                    body_el.addClass('bg-pattern');-->
<!--                    break;-->
<!--                case 'theme-boxed':-->
<!--                    body_el.addClass('bg-pattern2');-->
<!--                    all_el.addClass('boxed');-->
<!--                    break;-->
<!--                case 'theme-dark':-->
<!--                    $('head').append('<link id="dark-stylesheet" rel="stylesheet" type="text/css" href="styles/dark-skin.html">');-->
<!--                    $('.section-white-cover').removeClass('section-white-cover').addClass('section-black-cover');-->
<!--                    bread_img.attr('src', 'images/bread_dark_skin.html');-->
<!--                    devices_img.attr('src', 'images/devices_dark_skin.html');-->
<!--                    $('#devices-section').removeClass('section-color-cover').addClass('section-black-cover');-->
<!--                    logo1.attr('src', 'images/logo_dark_skin.html');-->
<!--                    logo2.attr('src', 'images/logo_secondary_dark_skin.html');-->
<!--                    break;-->
<!--                case 'theme-dark-pattern':-->
<!--                    $('head').append('<link id="dark-stylesheet" rel="stylesheet" type="text/css" href="styles/dark-skin.html">');-->
<!--                    $('.section-white-cover').removeClass('section-white-cover').addClass('section-black-cover');-->
<!--                    bread_img.attr('src', 'images/bread_dark_skin.html');-->
<!--                    devices_img.attr('src', 'images/devices_dark_skin.html');-->
<!--                    $('#devices-section').removeClass('section-color-cover').addClass('section-black-cover');-->
<!--                    logo1.attr('src', 'images/logo_dark_skin.html');-->
<!--                    logo2.attr('src', 'images/logo_secondary_dark_skin.html');-->
<!--                    body_el.addClass('bg-pattern3');-->
<!--                    break;-->
<!--            }-->
<!---->
<!--            var owl = slider_testimonial.data('owlCarousel');-->
<!--            owl.destroy();-->
<!--            slider_testimonial.owlCarousel({-->
<!--                singleItem: true-->
<!--            });-->
<!--            var owl = slider_post_images.data('owlCarousel');-->
<!--            owl.destroy();-->
<!--            var owl = post_slider.data('owlCarousel');-->
<!--            owl.destroy();-->
<!--            post_slider.owlCarousel({-->
<!--                singleItem: true,-->
<!--                navigation: true,-->
<!--                navigationText: false,-->
<!--                pagination: false-->
<!--            });-->
<!--            slider_post_images.owlCarousel({-->
<!--                singleItem: true-->
<!--            });-->
<!---->
<!--            $(window).trigger('resize');-->
<!--        });-->
<!--    });-->
<!--</script>-->

<!--<script type="text/javascript">-->
<!--    jQuery(document).ready(function ($) {-->
<!---->
<!--        $(".selectNgonNgu").val(98756245);-->
<!--    });-->
<!---->
<!--    $(".selectNgonNgu").change(function () {-->
<!--        var ngonNgu = $(this).val();-->
<!--        selectLang(ngonNgu);-->
<!--    });-->
<!--    function selectLang(lang) {-->
<!--        $.ajax({-->
<!--            url: "/ngonNgu/selectLang?Code=" + lang + "&Url=" + window.location.pathname,-->
<!--            dataType: "json",-->
<!--            type: 'POST',-->
<!--            success: function (data) {-->
<!--                var url = data.urlChinh;-->
<!--                window.location = "" + url + "";-->
<!--            },-->
<!--        });-->
<!--        return false;-->
<!--    }-->
<!--</script>-->

<!-- <script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '728880380576960',
            xfbml: true,
            version: 'v2.5'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) { return; }
        js = d.createElement(s); js.id = id;
        js.src = "../connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script> -->
<!--<script>-->
<!--    function AddToCart(Code) {-->
<!--        var So_Luong = 1;;-->
<!---->
<!--        $.post("/Cart/AddToCart", { "codePost": Code, "soLuong": So_Luong },-->
<!--            function (data) {-->
<!--                $.ajax({-->
<!--                    url: "/Cart/View_Cart_Express",-->
<!--                    dataType: "json",-->
<!--                    type: 'POST',-->
<!--                    beforeSend: function () {-->
<!--                        $(".num").empty();-->
<!--                        $(".num2").empty();-->
<!--                    },-->
<!--                    success: function (data) {-->
<!--                        $(".num").append(data.Count_SL);-->
<!--                        $(".num2").append(data.Count_SL);-->
<!--                    },-->
<!--                    error: function () { alert("error"); }-->
<!--                });-->
<!--            });-->
<!--        return false;-->
<!--    }-->
<!---->
<!--</script>-->
</body>
</html>