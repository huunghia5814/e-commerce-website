<?php
    require 'header.php'
?>
<script src="http://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<section class="top-section">
    <div class="offset-borders">
        <div class="full-header-container" id="header-contact">
            <div class="full-header">
                <div class="container">
                    <h1>Li&#234;n hệ</h1>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-4 col-middle  vc_custom_1439633714388">
                    <div class="wpb_wrapper">
                        <header class="section-header alignment-left vu_overline">
                            <h1>Li&#234;n hệ với ch&#250;ng t&#244;i</h1>
                            <p>
                                H&#227;y bấm v&#224;o cửa h&#224;ng Mina gần với bạn nhất để li&#234;n hệ.
                            </p>
                        </header>
                            <header class="section-header alignment-left vu_inline -m-t-60">
                                <h2><a href="javascript:void(0)" data-kd="10.9816219" data-vd="106.6541529" class="selectmap" id="selectmap_0" >Mina B&#236;nh Dương</a></h2>
                                <div class="horizontal-delimiter"></div>
                                <p>
                                    215 Yersin, P.Ph&#250; Cường, TX.Thủ Dầu Một
                                </p>
                                <p>
                                    (0650) 38 43 005
                                </p>
                            </header>
                            <header class="section-header alignment-left vu_inline -m-t-60">
                                <h2><a href="javascript:void(0)" data-kd="10.8087725" data-vd="106.6928947" class="selectmap" id="selectmap_1" >Mina Nơ Trang Long</a></h2>
                                <div class="horizontal-delimiter"></div>
                                <p>
                                    38 Nơ Trang Long, P.14, Q.B&#236;nh Thạnh, TP.HCM
                                </p>
                                <p>
                                    (08) 35 10 05 43
                                </p>
                            </header>
                            
                    </div>
                </div>

                <div class="col-sm-8 col-middle  vc_custom_1439634164050">
                    <div class="wpb_wrapper">
                        <div class="mapContact">
                            <div id="googleMap123" class="map1" style="width: 100%; height: 400px;">
                                <iframe width="100%" height="400px" src="http://maps.google.com/maps?q=10.9816219,106.6541529&amp;z=15&amp;output=embed"></iframe>
                            </div>

                        </div>
                        <article class="m-t-20">
                            <h3 class="fs-15 text-upper m-t-30 m-b-20"></h3>

                            <form class="form-contact-alt vu_frm-ajax vu_clear-fields" action="addcontact.php" method="post">
                                <div class="row">
                                    <div class="col-sm-5 pull-right-sm input-description">
                                        <i class="fa fa-user"></i>T&#234;n
                                    </div>
                                    <div class="col-sm-7 pull-left-sm">
                                        <input type="text" name="name" class="form-control" data-focus="true">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-5 pull-right-sm input-description">
                                        <i class="fa fa-envelope"></i>Email				
                                    </div>
                                    <div class="col-sm-7 pull-left-sm">
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-5 pull-right-sm input-description">
                                        <i class="fa fa-phone"></i>Điện thoại
                                    </div>
                                    <div class="col-sm-7 pull-left-sm">
                                        <input type="text" name="tel" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea name="detail" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="vu_msg m-t-10"></div>

                                <div class="row m-t-15 m-b-15">
                                    <div class="col-xs-4">
                                        <div class="pull-left vu_progress hide" style="height: 64px;"></div>
                                    </div>

                                    <div class="col-xs-8 text-right">
                                        <div class="submit-container no-margin">
                                            <input type="submit" value="Gửi">
                                        </div>
                                    </div>
                                </div>
                            </form>


                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script>

    $(".selectmap").click(function () {
        var kd = $(this).attr("data-kd");
        var vd = $(this).attr("data-vd");
        $.ajax({

            beforeSend: function () {
                $("#googleMap123").empty();
            },
            success: function (data) {
               //$("#googleMap123").html("<iframe id=\"map_frame\" width=\"100%\" height=\"600px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.sk/maps?f=q&amp;output=embed&amp;source=s_q&amp;hl=sk&amp;geocode=&amp;q=https:%2F%2Fwww.google.sk%2Fmaps%2Fms%3Fauthuser%3D0%26vps%3D5%26hl%3Dsk%26ie%3DUTF8%26oe%3DUTF8%26msa%3D0%26output%3Dkml%26msid%3D205427380680792264646.0004fe643d107ef29299a&amp;aq=&amp;sll=48.669026,19.699024&amp;sspn=4.418559,10.821533&amp;ie=UTF8&amp;ll="+ kd + "," + vd + "&amp;spn=0.199154,0.399727&amp;t=m&amp;z=15\"></iframe>");
                
                $("#googleMap123").html("<iframe  width=\"100%\" height=\"400px\" src=\"http://maps.google.com/maps?q=" + kd + "," + vd + "&z=15&output=embed\"></iframe>")
            },
            error: function () { alert("error"); }
        });
    });


</script>

<?php
    require 'footer.php'
?>




