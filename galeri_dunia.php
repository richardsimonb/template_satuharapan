
		<div class="blueTitle">
		<span class="left">GALERI FOTO DUNIA</span> <span class="otherlatest2link right"> <a href="https://www.satuharapan.com/foto/galeri-foto-dunia"> TANGGAL sebelumnya >></a> </span>
		<div class="clear"></div>
	</div>



                <div id="headline_dunia">
            <div id="headlinecontainer_dunia" class="left">

                <!--area 1-->
                <div class="listheadline1">
                    <div class="containerslider">

                    <?php
                    	$koneksi2 = new mysqli('localhost', 'satuhara_usernya', '123qwe', 'satuhara_14feb2');
                    	$galeridun= $koneksi2->query("SELECT tt_news.image, tt_news.title, tt_news.imagecaption
                    				FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
                    				LEFT JOIN tt_news
                        			ON tt_news_cat_mm.uid_local = tt_news.uid
                    				WHERE tt_news_cat.title = 'Galeri Foto Dunia'
                        			AND tt_news.hidden = 0
                        			AND tt_news.deleted = 0
                    				ORDER BY tt_news.uid
                        			DESC LIMIT 0,1");
                	$galidun = $galeridun->fetch_array();
                	$image_galidun = explode(",",$galidun['image']);
                        $caption_galidun = explode("\n",$galidun['imagecaption']);
                    ?>

                        <div class="judulgaleri">
                        	<?php echo $galidun['title']?>
                        </div>
            		<div id="imagearea6"> <!--daerah foto+caption-->

            	    <?php
                    for($counterimg=0;$counterimg<count($image_galidun);$counterimg++){
                    ?>

                    	<div class="listimg left">
                        <div class="imghead1">
                            <img src="<?='/uploads/pics/'.$image_galidun[$counterimg]?>" />
                        </div>
                        <div class="caption">
                            <?php echo $caption_galidun[$counterimg] ?>
                        </div>
                    	</div>
                    <?php
	            }
		    ?>

            </div>
            <div class="clear"></div>
            <div id="positions6"></div>
            <div id="prev6"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kiri.png" alt="prev"/></div>
	    <div id="next6"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kanan.png" alt="next"/></div>

        </div>


        <script type="text/javascript">
	$(document).ready(function() {
		tinggi = 0;
		$("#imagearea6 .caption").each(function(){
			tinggi2 = $(this).height();
			if(tinggi2>tinggi){
				tinggi = tinggi2;
			}
		});
		tinggi = 422 + parseInt(tinggi) + 10;
		$.fn.carouFredSel.defaults.items.height = tinggi;
		$.fn.carouFredSel.defaults.height = tinggi;
		$("#imagearea6").carouFredSel({
			items:{
				visible :1,
				width:635, <!--margin kiri image-->
			},
			direction:'left',
			scroll : {
				items : 1,
				duration : 1000,
				pauseOnHover: true,
			},
			width:635,<!--margin kiri image-->
			auto: {
				timeoutDuration :10000,
				onTimeoutStart:function( data ) {getpos()}
			},
			prev: {
				button:'#prev6',
                onAfter: function( data ) {getpos()}
			},
			next:{
				button:"#next6",
				onAfter: function( data ) {getpos()}
			}
		});
	});
		function getpos(){
			$("#imagearea6").trigger("currentPosition", function( pos ) {
				var bnykimage = $(".listimg").length;
				$("#positions6").html((pos + 1 )+ " / " + bnykimage);
			});
		}
		</script>

                </div>


                <!--area 2-->
                <div class="listheadline1">
                    <div class="containerslider">

                    <?php

                    	$galeridun2= $koneksi2->query("SELECT tt_news.image, tt_news.title, tt_news.imagecaption
                    				FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
                    				LEFT JOIN tt_news
                        			ON tt_news_cat_mm.uid_local = tt_news.uid
                    				WHERE tt_news_cat.title = 'Galeri Foto Dunia'
                        			AND tt_news.hidden = 0
                        			AND tt_news.deleted = 0
                    				ORDER BY tt_news.uid
                        			DESC LIMIT 1,1");
                	$galidun2 = $galeridun2->fetch_array();
                	$image_galidun2 = explode(",",$galidun2['image']);
                        $caption_galidun2 = explode("\n",$galidun2['imagecaption']);
                    ?>

                        <div class="judulgaleri">
                        	<?php echo $galidun2['title']?>
                        </div>
            		<div id="imagearea7"> <!--daerah foto+caption-->

            	    <?php
                    for($counterimg=0;$counterimg<count($image_galidun2);$counterimg++){
                    ?>

                    	<div class="listimg left">
                        <div class="imghead1">
                            <img src="<?='/uploads/pics/'.$image_galidun2[$counterimg]?>" />
                        </div>
                        <div class="caption">
                            <?php echo $caption_galidun2[$counterimg] ?>
                        </div>
                    	</div>
                    <?php
	            }
		    ?>



            </div>
            <div class="clear"></div>
            <div id="positions7"></div>
            <div id="prev7"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kiri.png" alt="prev"/></div>
	    <div id="next7"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kanan.png" alt="next"/></div>

        </div>


        <script type="text/javascript">
	$(document).ready(function() {
		tinggi = 0;
		$("#imagearea7 .caption").each(function(){
			tinggi2 = $(this).height();
			if(tinggi2>tinggi){
				tinggi = tinggi2;
			}
		});
		tinggi = 422 + parseInt(tinggi) + 10;
		$.fn.carouFredSel.defaults.items.height = tinggi;
		$.fn.carouFredSel.defaults.height = tinggi;
		$("#imagearea7").carouFredSel({
			items:{
				visible :1,
				width:635, <!--margin kiri image-->
			},
			direction:'left',
			scroll : {
				items : 1,
				duration : 1000,
				pauseOnHover : true,
			},
			width:635,<!--margin kiri image-->
			auto: {
				timeoutDuration :10000,
				onTimeoutStart:function( data ) {getpos()}
			},
			prev: {
				button:'#prev7',
                onAfter: function( data ) {getpos()}
			},
			next:{
				button:"#next7",
				onAfter: function( data ) {getpos()}
			}
		});
	});
		function getpos(){
			$("#imagearea7").trigger("currentPosition", function( pos ) {
				var bnykimage = $(".listimg").length;
				$("#positions7").html((pos + 1 )+ " / " + bnykimage);
			});
		}
		</script>

                </div>





                <!--area 3-->
                <div class="listheadline1">
                    <div class="containerslider">

                    <?php

                    	$galeridun3= $koneksi2->query("SELECT tt_news.image, tt_news.title, tt_news.imagecaption
                    				FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
                    				LEFT JOIN tt_news
                        			ON tt_news_cat_mm.uid_local = tt_news.uid
                    				WHERE tt_news_cat.title = 'Galeri Foto Dunia'
                        			AND tt_news.hidden = 0
                        			AND tt_news.deleted = 0
                    				ORDER BY tt_news.uid
                        			DESC LIMIT 2,1");
                	$galidun3 = $galeridun3->fetch_array();
                	$image_galidun3 = explode(",",$galidun3['image']);
                        $caption_galidun3 = explode("\n",$galidun3['imagecaption']);
                    ?>

                        <div class="judulgaleri">
                        	<?php echo $galidun3['title']?>
                        </div>
            		<div id="imagearea8"> <!--daerah foto+caption-->

            	    <?php
                    for($counterimg=0;$counterimg<count($image_galidun3);$counterimg++){
                    ?>

                    	<div class="listimg left">
                        <div class="imghead1">
                            <img src="<?='/uploads/pics/'.$image_galidun3[$counterimg]?>" />
                        </div>
                        <div class="caption">
                            <?php echo $caption_galidun3[$counterimg] ?>
                        </div>
                    	</div>
                    <?php
	            }
		    ?>


            </div>
            <div class="clear"></div>
            <div id="positions8"></div>
            <div id="prev8"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kiri.png" alt="prev"/></div>
	    <div id="next8"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kanan.png" alt="next"/></div>

        </div>


        <script type="text/javascript">
	$(document).ready(function() {
		tinggi = 0;
		$("#imagearea8 .caption").each(function(){
			tinggi2 = $(this).height();
			if(tinggi2>tinggi){
				tinggi = tinggi2;
			}
		});
		tinggi = 422 + parseInt(tinggi) + 10;
		$.fn.carouFredSel.defaults.items.height = tinggi;
		$.fn.carouFredSel.defaults.height = tinggi;
		$("#imagearea8").carouFredSel({
			items:{
				visible :1,
				width:635, <!--margin kiri image-->
			},
			direction:'left',
			scroll : {
				items : 1,
				duration : 1000,
				pauseOnHover: true,
			},
			width:635,<!--margin kiri image-->
			auto: {
				timeoutDuration :10000,
				onTimeoutStart:function( data ) {getpos()}
			},
			prev: {
				button:'#prev8',
                onAfter: function( data ) {getpos()}
			},
			next:{
				button:"#next8",
				onAfter: function( data ) {getpos()}
			}
		});
	});
		function getpos(){
			$("#imagearea8").trigger("currentPosition", function( pos ) {
				var bnykimage = $(".listimg").length;
				$("#positions8").html((pos + 1 )+ " / " + bnykimage);
			});
		}
		</script>

                </div>





                <!--area 4-->
                <div class="listheadline1">
                    <div class="containerslider">


                    <?php

                    	$galeridun4= $koneksi2->query("SELECT tt_news.image, tt_news.title, tt_news.imagecaption
                    				FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
                    				LEFT JOIN tt_news
                        			ON tt_news_cat_mm.uid_local = tt_news.uid
                    				WHERE tt_news_cat.title = 'Galeri Foto Dunia'
                        			AND tt_news.hidden = 0
                        			AND tt_news.deleted = 0
                    				ORDER BY tt_news.uid
                        			DESC LIMIT 3,1");
                	$galidun4 = $galeridun4->fetch_array();
                	$image_galidun4 = explode(",",$galidun4['image']);
                        $caption_galidun4 = explode("\n",$galidun4['imagecaption']);
                    ?>

                        <div class="judulgaleri">
                        	<?php echo $galidun4['title']?>
                        </div>
            		<div id="imagearea9"> <!--daerah foto+caption-->

            	    <?php
                    for($counterimg=0;$counterimg<count($image_galidun4);$counterimg++){
                    ?>

                    	<div class="listimg left">
                        <div class="imghead1">
                            <img src="<?='/uploads/pics/'.$image_galidun4[$counterimg]?>" />
                        </div>
                        <div class="caption">
                            <?php echo $caption_galidun4[$counterimg] ?>
                        </div>
                    	</div>
                    <?php
	            }
		    ?>



            </div>
            <div class="clear"></div>
            <div id="positions9"></div>
            <div id="prev9"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kiri.png" alt="prev"/></div>
	    <div id="next9"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kanan.png" alt="next"/></div>

        </div>


        <script type="text/javascript">
	$(document).ready(function() {
		tinggi = 0;
		$("#imagearea9 .caption").each(function(){
			tinggi2 = $(this).height();
			if(tinggi2>tinggi){
				tinggi = tinggi2;
			}
		});
		tinggi = 422 + parseInt(tinggi) + 10;
		$.fn.carouFredSel.defaults.items.height = tinggi;
		$.fn.carouFredSel.defaults.height = tinggi;
		$("#imagearea9").carouFredSel({
			items:{
				visible :1,
				width:635, <!--margin kiri image-->
			},
			direction:'left',
			scroll : {
				items : 1,
				duration : 1000,
				pauseOnHover : true,
			},
			width:635,<!--margin kiri image-->
			auto: {
				timeoutDuration :10000,
				onTimeoutStart:function( data ) {getpos()}
			},
			prev: {
				button:'#prev9',
                onAfter: function( data ) {getpos()}
			},
			next:{
				button:"#next9",
				onAfter: function( data ) {getpos()}
			}
		});
	});
		function getpos(){
			$("#imagearea9").trigger("currentPosition", function( pos ) {
				var bnykimage = $(".listimg").length;
				$("#positions9").html((pos + 1 )+ " / " + bnykimage);
			});
		}
		</script>

                </div>


                <!--area 5-->
                <div class="listheadline1">
                    <div class="containerslider">

                    <?php

                    	$galeridun5= $koneksi2->query("SELECT tt_news.image, tt_news.title, tt_news.imagecaption
                    				FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
                    				LEFT JOIN tt_news
                        			ON tt_news_cat_mm.uid_local = tt_news.uid
                    				WHERE tt_news_cat.title = 'Galeri Foto Dunia'
                        			AND tt_news.hidden = 0
                        			AND tt_news.deleted = 0
                    				ORDER BY tt_news.uid
                        			DESC LIMIT 4,1");
                	$galidun5 = $galeridun5->fetch_array();
                	$image_galidun5 = explode(",",$galidun5['image']);
                        $caption_galidun5 = explode("\n",$galidun5['imagecaption']);
                    ?>

                        <div class="judulgaleri">
                        	<?php echo $galidun5['title']?>
                        </div>
            		<div id="imagearea10"> <!--daerah foto+caption-->

            	    <?php
                    for($counterimg=0;$counterimg<count($image_galidun5);$counterimg++){
                    ?>

                    	<div class="listimg left">
                        <div class="imghead1">
                            <img src="<?='/uploads/pics/'.$image_galidun5[$counterimg]?>" />
                        </div>
                        <div class="caption">
                            <?php echo $caption_galidun5[$counterimg] ?>
                        </div>
                    	</div>
                    <?php
	            }
		    ?>


            </div>
            <div class="clear"></div>
            <!--<div id="positions5"></div>-->
            <div id="prev10"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kiri.png" alt="prev"/></div>
	    <div id="next10"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kanan.png" alt="next"/></div>

        </div>


        <script type="text/javascript">
	$(document).ready(function() {
		tinggi = 0;
		$("#imagearea10 .caption").each(function(){
			tinggi2 = $(this).height();
			if(tinggi2>tinggi){
				tinggi = tinggi2;
			}
		});
		tinggi = 422 + parseInt(tinggi) + 10;
		$.fn.carouFredSel.defaults.items.height = tinggi;
		$.fn.carouFredSel.defaults.height = tinggi;
		$("#imagearea10").carouFredSel({
			items:{
				visible :1,
				width:635, <!--margin kiri image-->
			},
			direction:'left',
			scroll : {
				items : 1,
				duration : 1000,
				pauseOnHover: true,
			},
			width:635,<!--margin kiri image-->
			auto: {
				timeoutDuration :10000,
				onTimeoutStart:function( data ) {getpos()}
			},
			prev: {
				button:'#prev10',
                onAfter: function( data ) {getpos()}
			},
			next:{
				button:"#next10",
				onAfter: function( data ) {getpos()}
			}
		});
	});
		function getpos(){
			$("#imagearea10").trigger("currentPosition", function( pos ) {
				var bnykimage = $(".listimg").length;
				$("#positions10").html((pos + 1 )+ " / " + bnykimage);
			});
		}
		</script>

                </div>



            </div>
            <div class="headlinepaging2 left">

                <?php
                    //$koneksi = new mysqli('localhost', 'satuhara_usernya', '123qwe', 'satuhara_14feb2');
                    $galeridunia_smp= $koneksi2->query("SELECT *
                    FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
                    LEFT JOIN tt_news
                        ON tt_news_cat_mm.uid_local = tt_news.uid
                    WHERE tt_news_cat.title = 'Galeri Foto Dunia'
                        AND tt_news.hidden = 0
                        AND tt_news.deleted = 0
                    ORDER BY tt_news.uid
                        DESC LIMIT 0,5");
            while ($galidun_smp = $galeridunia_smp->fetch_array()) {
            $image = explode(",",$galidun_smp['image']);
            resizeFile($image[0],150,100,"150x100_".$image[0]);

            ?>
        <div class="fotosebelumnya">
            <div class="imgthumbhead2">
<!--                <img src="images/1.jpg" /> -->

                 <img src="<?='/uploads/cache/'."150x100_".$image[0]?>" />
                <div class="tglsbl"><?php echo $galidun_smp['title'] ?></div>
            </div>
        </div>
         <?php } ?>



                </div>

            <!--javascript untuk slider atas bawah-->
        <script type="text/javascript">
            if ($("#headlinecontainer_dunia").length == 1) {
                $("#headlinecontainer_dunia").carouFredSel({
                    items: {
                        visible: 1,

                        height: 600,
                        width: 635,

                    },
                    direction: 'up',
                    scroll: {
                        fx: "crossfade",
                        items: 1,
                        duration: 1000,
                         pauseOnHover: true,
                    },
                    width: 635,
                    height: 600,

                    pagination: {
                        container: ".headlinepaging2",
                        anchorBuilder: false
                    },
                    auto: {
                        timeoutDuration: 10000
                    },
                });
            }
        </script>

            </div>
            <div class="clear"></div>