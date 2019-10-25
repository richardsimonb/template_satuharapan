<!--<div class="blueTitle">
               GALERI FOTO INDONESIA
		</div> -->
		
		<div class="blueTitle">
		<span class="left">GALERI FOTO INDONESIA</span> <span class="otherlatest2link right"> <a href="http://www.satuharapan.com/foto/galeri-foto-indonesia"> TANGGAL sebelumnya >></a> </span>
		<div class="clear"></div>
	</div>
            

                
                <div id="headline_indo">
            <div id="headlinecontainer_indo" class="left">
                
                <!--area 1-->
                                        
                <div class="listheadline1">     
                    <div class="containerslider">
                    
                    <?php
                    	$koneksi1 = new mysqli('localhost', 'satuhara_usernya', '123qwe', 'satuhara_14feb2');
                    	$galerindo= $koneksi1->query("SELECT tt_news.image, tt_news.title, tt_news.imagecaption,tt_news.author
                    				FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
                    				LEFT JOIN tt_news 
                        			ON tt_news_cat_mm.uid_local = tt_news.uid
                    				WHERE tt_news_cat.title = 'Galeri Foto Indonesia' 
                        			AND tt_news.hidden = 0 
                        			AND tt_news.deleted = 0
                    				ORDER BY tt_news.uid 
                        			DESC LIMIT 0,1");                
                	$galindo = $galerindo->fetch_array();
                	$image_galindo = explode(",",$galindo['image']);
                        $caption_galindo = explode("\n",$galindo['imagecaption']);
                    ?>
                    <!--<div class="infoberita">
				<span class="left">Penulis: <?=$galindo['author']?></span>
				
			</div>
			<div class="clear"> </div> -->
                                    
                        <div class="judulgaleri">
                        	<?php echo $galindo['title']?>
                        </div>
            		<div id="imagearea1"> <!--daerah foto+caption-->
            
            	    <?php          		                                                                    
                    for($counterimg=0;$counterimg<count($image_galindo);$counterimg++){
                    ?>
                                                           
                    	<div class="listimg left">
                        <div class="imghead1">
                            <img src="<?=PATH_image.$image_galindo[$counterimg]?>" />
                        </div>
                        <div class="caption">
                            <?php echo $caption_galindo[$counterimg] ?>                         
                        </div>
                    	</div>
                    <?php
	            }
		    ?>
                    
            </div>
            <div class="clear"></div>
            <div id="positions1"></div>
            <div id="prev1"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kiri.png" alt="prev"/></div>
	    <div id="next1"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kanan.png" alt="next"/></div>
            
        </div>
        
        
        <script type="text/javascript">
	$(document).ready(function() {
		tinggi = 0;
		$("#imagearea1 .caption").each(function(){
			tinggi2 = $(this).height();
			if(tinggi2>tinggi){
				tinggi = tinggi2;
			}
		});
		tinggi = 422 + parseInt(tinggi) + 10;
		$.fn.carouFredSel.defaults.items.height = tinggi;
		$.fn.carouFredSel.defaults.height = tinggi;
		$("#imagearea1").carouFredSel({
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
				button:'#prev1',
                onAfter: function( data ) {getpos()}
			},
			next:{
				button:"#next1",
				onAfter: function( data ) {getpos()}
			}
		});
	});
		function getpos(){
			$("#imagearea1").trigger("currentPosition", function( pos ) {
				var bnykimage = $(".listimg").length;
				$("#positions1").html((pos + 1 )+ " / " + bnykimage);
			});
		}
		</script>
                                      
                </div>
                
                
                <!--area 2-->
                <div class="listheadline1">     
                    <div class="containerslider">
                    
                    <?php
                    	
                    	$galerindo2= $koneksi1->query("SELECT tt_news.image, tt_news.title, tt_news.imagecaption
                    				FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
                    				LEFT JOIN tt_news 
                        			ON tt_news_cat_mm.uid_local = tt_news.uid
                    				WHERE tt_news_cat.title = 'Galeri Foto Indonesia' 
                        			AND tt_news.hidden = 0 
                        			AND tt_news.deleted = 0
                    				ORDER BY tt_news.uid 
                        			DESC LIMIT 1,1");                
                	$galindo2 = $galerindo2->fetch_array();
                	$image_galindo2 = explode(",",$galindo2['image']);
                        $caption_galindo2 = explode("\n",$galindo2['imagecaption']);
                    ?>
                    
                        <div class="judulgaleri">
                        	<?php echo $galindo2['title']?>
                        </div>
            		<div id="imagearea2"> <!--daerah foto+caption-->
            
            	    <?php          		                                                                    
                    for($counterimg=0;$counterimg<count($image_galindo2);$counterimg++){
                    ?>
                                                           
                    	<div class="listimg left">
                        <div class="imghead1">
                            <img src="<?=PATH_image.$image_galindo2[$counterimg]?>" />
                        </div>
                        <div class="caption">
                            <?php echo $caption_galindo2[$counterimg] ?>                         
                        </div>
                    	</div>
                    <?php
	            }
		    ?>

                    
                    
            </div>
            <div class="clear"></div>
            <div id="positions2"></div>
            <div id="prev2"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kiri.png" alt="prev"/></div>
	    <div id="next2"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kanan.png" alt="next"/></div>
            
        </div>
        
        
        <script type="text/javascript">
	$(document).ready(function() {
		tinggi = 0;
		$("#imagearea2 .caption").each(function(){
			tinggi2 = $(this).height();
			if(tinggi2>tinggi){
				tinggi = tinggi2;
			}
		});
		tinggi = 422 + parseInt(tinggi) + 10;
		$.fn.carouFredSel.defaults.items.height = tinggi;
		$.fn.carouFredSel.defaults.height = tinggi;
		$("#imagearea2").carouFredSel({
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
				button:'#prev2',
                onAfter: function( data ) {getpos()}
			},
			next:{
				button:"#next2",
				onAfter: function( data ) {getpos()}
			}
		});
	});
		function getpos(){
			$("#imagearea2").trigger("currentPosition", function( pos ) {
				var bnykimage = $(".listimg").length;
				$("#positions2").html((pos + 1 )+ " / " + bnykimage);
			});
		}
		</script>
                                      
                </div>
                
                
                
                
                
                <!--area 3-->
                <div class="listheadline1">     
                    <div class="containerslider">
                    
                    <?php
                    	
                    	$galerindo3= $koneksi1->query("SELECT tt_news.image, tt_news.title, tt_news.imagecaption
                    				FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
                    				LEFT JOIN tt_news 
                        			ON tt_news_cat_mm.uid_local = tt_news.uid
                    				WHERE tt_news_cat.title = 'Galeri Foto Indonesia' 
                        			AND tt_news.hidden = 0 
                        			AND tt_news.deleted = 0
                    				ORDER BY tt_news.uid 
                        			DESC LIMIT 2,1");                
                	$galindo3 = $galerindo3->fetch_array();
                	$image_galindo3 = explode(",",$galindo3['image']);
                        $caption_galindo3 = explode("\n",$galindo3['imagecaption']);
                    ?>
                    
                        <div class="judulgaleri">
                        	<?php echo $galindo3['title']?>
                        </div>
            		<div id="imagearea3"> <!--daerah foto+caption-->
            
            	    <?php          		                                                                    
                    for($counterimg=0;$counterimg<count($image_galindo3);$counterimg++){
                    ?>
                                                           
                    	<div class="listimg left">
                        <div class="imghead1">
                            <img src="<?=PATH_image.$image_galindo3[$counterimg]?>" />
                        </div>
                        <div class="caption">
                            <?php echo $caption_galindo3[$counterimg] ?>                         
                        </div>
                    	</div>
                    <?php
	            }
		    ?>


            </div>
            <div class="clear"></div>
            <div id="positions3"></div>
            <div id="prev3"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kiri.png" alt="prev"/></div>
	    <div id="next3"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kanan.png" alt="next"/></div>
           
        </div>
        
        
        <script type="text/javascript">
	$(document).ready(function() {
		tinggi = 0;
		$("#imagearea3 .caption").each(function(){
			tinggi2 = $(this).height();
			if(tinggi2>tinggi){
				tinggi = tinggi2;
			}
		});
		tinggi = 422 + parseInt(tinggi) + 10;
		$.fn.carouFredSel.defaults.items.height = tinggi;
		$.fn.carouFredSel.defaults.height = tinggi;
		$("#imagearea3").carouFredSel({
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
				button:'#prev3',
                onAfter: function( data ) {getpos()}
			},
			next:{
				button:"#next3",
				onAfter: function( data ) {getpos()}
			}
		});
	});
		function getpos(){
			$("#imagearea3").trigger("currentPosition", function( pos ) {
				var bnykimage = $(".listimg").length;
				$("#positions3").html((pos + 1 )+ " / " + bnykimage);
			});
		}
		</script>
                                      
                </div>
                
                
                
                
                
                <!--area 4-->
                <div class="listheadline1">     
                    <div class="containerslider">
                    
                    
                    <?php
                    	
                    	$galerindo4= $koneksi1->query("SELECT tt_news.image, tt_news.title, tt_news.imagecaption
                    				FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
                    				LEFT JOIN tt_news 
                        			ON tt_news_cat_mm.uid_local = tt_news.uid
                    				WHERE tt_news_cat.title = 'Galeri Foto Indonesia' 
                        			AND tt_news.hidden = 0 
                        			AND tt_news.deleted = 0
                    				ORDER BY tt_news.uid 
                        			DESC LIMIT 3,1");                
                	$galindo4 = $galerindo4->fetch_array();
                	$image_galindo4 = explode(",",$galindo4['image']);
                        $caption_galindo4 = explode("\n",$galindo4['imagecaption']);
                    ?>
                    
                        <div class="judulgaleri">
                        	<?php echo $galindo4['title']?>
                        </div>
            		<div id="imagearea4"> <!--daerah foto+caption-->
            
            	    <?php          		                                                                    
                    for($counterimg=0;$counterimg<count($image_galindo4);$counterimg++){
                    ?>
                                                           
                    	<div class="listimg left">
                        <div class="imghead1">
                            <img src="<?=PATH_image.$image_galindo4[$counterimg]?>" />
                        </div>
                        <div class="caption">
                            <?php echo $caption_galindo4[$counterimg] ?>                         
                        </div>
                    	</div>
                    <?php
	            }
		    ?>



            </div>
            <div class="clear"></div>
            <div id="positions4"></div>
            <div id="prev4"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kiri.png" alt="prev"/></div>
	    <div id="next4"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kanan.png" alt="next"/></div>
            
        </div>
        
        
        <script type="text/javascript">
	$(document).ready(function() {
		tinggi = 0;
		$("#imagearea4 .caption").each(function(){
			tinggi2 = $(this).height();
			if(tinggi2>tinggi){
				tinggi = tinggi2;
			}
		});
		tinggi = 422 + parseInt(tinggi) + 10;
		$.fn.carouFredSel.defaults.items.height = tinggi;
		$.fn.carouFredSel.defaults.height = tinggi;
		$("#imagearea4").carouFredSel({
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
				button:'#prev4',
                onAfter: function( data ) {getpos()}
			},
			next:{
				button:"#next4",
				onAfter: function( data ) {getpos()}
			}
		});
	});
		function getpos(){
			$("#imagearea4").trigger("currentPosition", function( pos ) {
				var bnykimage = $(".listimg").length;
				$("#positions4").html((pos + 1 )+ " / " + bnykimage);
			});
		}
		</script>
                                      
                </div>
                
                
                <!--area 5-->
                <div class="listheadline1">     
                    <div class="containerslider">
                    
                    <?php
                    	
                    	$galerindo5= $koneksi1->query("SELECT tt_news.image, tt_news.title, tt_news.imagecaption
                    				FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
                    				LEFT JOIN tt_news 
                        			ON tt_news_cat_mm.uid_local = tt_news.uid
                    				WHERE tt_news_cat.title = 'Galeri Foto Indonesia' 
                        			AND tt_news.hidden = 0 
                        			AND tt_news.deleted = 0
                    				ORDER BY tt_news.uid 
                        			DESC LIMIT 4,1");                
                	$galindo5 = $galerindo5->fetch_array();
                	$image_galindo5 = explode(",",$galindo5['image']);
                        $caption_galindo5 = explode("\n",$galindo5['imagecaption']);
                    ?>
                    
                        <div class="judulgaleri">
                        	<?php echo $galindo5['title']?>
                        </div>
            		<div id="imagearea5"> <!--daerah foto+caption-->
            
            	    <?php          		                                                                    
                    for($counterimg=0;$counterimg<count($image_galindo5);$counterimg++){
                    ?>
                                                           
                    	<div class="listimg left">
                        <div class="imghead1">
                            <img src="<?=PATH_image.$image_galindo5[$counterimg]?>" />
                        </div>
                        <div class="caption">
                            <?php echo $caption_galindo5[$counterimg] ?>                         
                        </div>
                    	</div>
                    <?php
	            }
		    ?>


            </div>
            <div class="clear"></div>
            <!--<div id="positions5"></div>-->
            <div id="prev5"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kiri.png" alt="prev"/></div>
	    <div id="next5"><img src="<?=baseURL.'/'.PATH_template?>images/panah_kanan.png" alt="next"/></div>
           
        </div>
        
        
        <script type="text/javascript">
	$(document).ready(function() {
		tinggi = 0;
		$("#imagearea5 .caption").each(function(){
			tinggi2 = $(this).height();
			if(tinggi2>tinggi){
				tinggi = tinggi2;
			}
		});
		tinggi = 422 + parseInt(tinggi) + 10;
		$.fn.carouFredSel.defaults.items.height = tinggi;
		$.fn.carouFredSel.defaults.height = tinggi;
		$("#imagearea5").carouFredSel({
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
				button:'#prev5',
                onAfter: function( data ) {getpos()}
			},
			next:{
				button:"#next5",
				onAfter: function( data ) {getpos()}
			}
		});
	});
		function getpos(){
			$("#imagearea5").trigger("currentPosition", function( pos ) {
				var bnykimage = $(".listimg").length;
				$("#positions5").html((pos + 1 )+ " / " + bnykimage);
			});
		}
		</script>
                                      
                </div>

               
                
            </div>
            <div class="headlinepaging1 left">
            
                <?php
                    $koneksi = new mysqli('localhost', 'satuhara_usernya', '123qwe', 'satuhara_14feb2');
                    $galerindo= $koneksi->query("SELECT *
                    FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
                    LEFT JOIN tt_news 
                        ON tt_news_cat_mm.uid_local = tt_news.uid
                    WHERE tt_news_cat.title = 'Galeri Foto Indonesia' 
                        AND tt_news.hidden = 0 
                        AND tt_news.deleted = 0
                    ORDER BY tt_news.uid 
                        DESC LIMIT 0,5");
            while ($galindo = $galerindo->fetch_array()) { 
            $image = explode(",",$galindo['image']);   
            resizeFile($image[0],150,100,"150x100_".$image[0]); 
                             
            ?>
        <div class="fotosebelumnya">
            <div class="imgthumbhead1">
<!--                <img src="images/1.jpg" /> -->
                
                 <img src="<?=PATH_image_cache."150x100_".$image[0]?>" />
                <div class="tglsbl"><?php echo $galindo['title'] ?></div>                     
            </div>
        </div>
         <?php } ?>
                
                
                            
                </div>
                
                
            <!--javascript untuk slider atas bawah-->
        <script type="text/javascript">
            if ($("#headlinecontainer_indo").length == 1) {
                $("#headlinecontainer_indo").carouFredSel({
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
                        container: ".headlinepaging1",
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
                