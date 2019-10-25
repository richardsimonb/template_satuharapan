<?php
require "header.php";
?>
<div id="content">
    <!-- Content Top -->
    <div id="ct-top" class="homepage">
		<div id="ctop-left">
		<?php
		if(count($topik_pilihan)>0){?>
			<div id="headline">
				<div class="blueTitle">TOPIK PILIHAN</div>
				<div id="headlinecontainer" class="left">
					<?php
					foreach($topik_pilihan as $list){
						$image = explode(",",$list['image']);
						resizeFile($image[0],469,312,"469x312_".$image[0]);
					?>
						<div class="listheadline">
							<?php
							$class="titleonly";
							if($image[0]!=""){?>
								<div class="imghead"><a title="<?=$list['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><img src="<?=PATH_image_cache."469x312_".$image[0]?>" width="469" height="312" alt="<?=$list['realtitle']?>"></a></div>
							<?php
							$class="titlelatest";
							}
							?>
							<div class="<?=$class?>">
								 <h1><a title="<?=$list['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><?=$list['title']?></a></h1>
								<?=$list['preview']?>
								<a title="<?=$list['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><span class="more"></span></a>
							</div>
						</div>
					<?php
					}
					?>
				</div>
				<div class="headlinepaging right">
					<?php
					foreach($topik_pilihan as $list){
					$image = explode(",",$list['image']);
					resizeFile($image[0],148,96,"148x96_".$image[0]);
					?>
					<div class="imgthumbhead"><img alt="<?=$list['realtitle']?>" title="<?=$list['realtitle']?>" src="<?=PATH_image_cache."148x96_".$image[0]?>" width="148" height="96" alt="<?=$list['realtitle']?>_paging"></div>
					<?php
					}
					?>
				</div>
				<div class="clear"></div>
			</div>
		<?php
		}
		?>
			<div id="kabarterbaru">
				<div class="blueTitle"><?=$titletopic?></div>
				<div class="listlatest">
				<?php
					foreach($contentnews as $listlatest){
						$image = explode(",",$listlatest['image']);
						resizeFile($image[0],309,206,"309x206_".$image[0]);
				?>
						<div class="kpem-con">
							<?php
							$class="titleonly";
							if($image[0]!=""){?>
								<span class="img-thumb"><a title="<?=$listlatest['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$listlatest['value_alias']?>"><img src="<?=PATH_image_cache."309x206_".$image[0]?>" width="309" height="206" alt="<?=$listlatest['realtitle']?>"/></a></span>
							<?php
							$class="titlelatest";
							}
							?>
							<div class="<?=$class?>">
								 <h1><a title="<?=$listlatest['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$listlatest['value_alias']?>"><?=$listlatest['title']?></a></h1>
								<?=$listlatest['preview']?>
								<a title="<?=$listlatest['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$listlatest['value_alias']?>"><span class="more"></span></a>
							</div>
							<div class="clear"></div>
					   </div>
					   <div class="line"></div>
				   <?php
				   }
				  ?>
				<?=$string_pages?>
				</div>
			</div>
		</div>
		<?php
		require "right.php";
		?>
        <div class="clear line"></div>
    </div>
	<div id="ct-cent">
		<?php
		require "latestnews.php";
		require "opini.php";
		require "popular.php";
		?>
		
		<div class="blueTitle">
               GALERI FOTO INDONESIA
		</div> 
            
<!--            <div class="bingkaifotodetail">	-->
                
                <div id="headline_indo">
            <div id="headlinecontainer_indo" class="left">
                
                <!--area 1-->
                <div class="listheadline1">     
                    <div class="containerslider">
                        <div class="judulgaleri">31 Desember 2015</div>
            <div id="imagearea1"> <!--daerah foto+caption-->
                
                <div class="listimg left">
                    <div class="imghead1">
                        <img src="images/1a.jpg" />
                    </div>
                    <div class="caption">
                        slide 1aslide 1aslide 1avslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1avvvvslide 1avv slide 1aslide 1avvvvslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1avadavatslide slide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aardvark slide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aardvark slide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1a slide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1a slide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aAKHI slide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aAK slide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aslide 1aAKHIRrrr
                         </div>
                </div>


                <div class="listimg left">
                    <div class="imghead1">
                        <img src="images/1b.jpg" />
                    </div>
                    <div class="caption">
                        slide 1b
                    </div>
                </div>


                <div class="listimg left">
                    <div class="imghead1">
                        <img src="images/1c.jpg" />
                    </div>
                    <div class="caption">
                        slide 1c
                    </div>
                </div>


                <div class="listimg left">
                    <div class="imghead1">
                        <img src="images/1d.jpg" />
                    </div>
                    <div class="caption">
                      slide 1d
                    </div>
                </div>


            </div>
            <div class="clear"></div>
            <div id="positions1"></div>
            <div id="prev1"><img src="images/panah_kiri.png" alt="prev"/></div>
            <div id="next1"><img src="images/panah_kanan.png" alt="next"/></div>
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
                        <div class="judulgaleri">30 Desember 2015</div>
            <div id="imagearea2"> <!--daerah foto+caption-->
                
                <div class="listimg left">
                    <div class="imghead1">
                        <img src="images/2a.jpg" />
                    </div>
                    <div class="caption">
                        Ilustrasi. Wakil Presiden Jusuf Kalla (tengah) didampingi Kepala Badan Penanggulangan 
                        Bencana (BNPB) Syamsul Maarif (kedua kanan), Ketua DPD Irman Gusman (kanan), 
                        Menko Pembangunan Manusia dan Kebudayaan Puan Maharani (kedua kiri) dan Menteri dalam 
                        Negeri Tjahjo Kumolo (kiri) menghadiri pembukaan rapat koordinasi Badan Nasional 
                        Penanggulangan Bencana (BNPB) dan Badan Penanggulangan Bencana Daerah (BPBD) 
                        se-Indonesia di Jakarta, Selasa (10/3). Rakornas yang dihadiri ribuan peserta ini 
                        diharapkan dapat meningkatkan kinerja penanggulangan bencana serta membangun keselarasan
                        antara pusat dan daerah. (Foto: Antara)
                         </div>
                </div>


                <div class="listimg left">
                    <div class="imghead1">
                        <img src="images/2b.jpg" />
                    </div>
                    <div class="caption">
                        slide 2b
                    </div>
                </div>


                <div class="listimg left">
                    <div class="imghead1">
                        <img src="images/2c.jpg" />
                    </div>
                    <div class="caption">
                        slide 2c
                    </div>
                </div>


                <div class="listimg left">
                    <div class="imghead1">
                        <img src="images/2d.jpg" />
                    </div>
                    <div class="caption">
                      slide 2d
                    </div>
                </div>


            </div>
            <div class="clear"></div>
            <div id="positions2"></div>
            <div id="prev2"><img src="images/panah_kiri.png" alt="prev"/></div>
            <div id="next2"><img src="images/panah_kanan.png" alt="next"/></div>
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
                        <div class="judulgaleri">29 Desember 2015</div>
            <div id="imagearea3"> <!--daerah foto+caption-->
                
                <div class="listimg left">
                    <div class="imghead1">
                        <img src="images/3a.jpg" />
                    </div>
                    <div class="caption">
                        slide 3a
                         </div>
                </div>


                <div class="listimg left">
                    <div class="imghead1">
                        <img src="images/3b.jpg" />
                    </div>
                    <div class="caption">
                        slide 3b
                    </div>
                </div>


                <div class="listimg left">
                    <div class="imghead1">
                        <img src="images/3c.jpg" />
                    </div>
                    <div class="caption">
                        slide 3c
                    </div>
                </div>


                <div class="listimg left">
                    <div class="imghead1">
                        <img src="images/3d.jpg" />
                    </div>
                    <div class="caption">
                      slide 3d
                    </div>
                </div>


            </div>
            <div class="clear"></div>
            <div id="positions3"></div>
            <div id="prev3"><img src="images/panah_kiri.png" alt="prev"/></div>
            <div id="next3"><img src="images/panah_kanan.png" alt="next"/></div>
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
                        <div class="judulgaleri">28 Desember 2015</div>
            <div id="imagearea4"> <!--daerah foto+caption-->
                
                <div class="listimg left">
                    <div class="imghead1">
                        <img src="images/4a.jpg" />
                    </div>
                    <div class="caption">
                        slide 4a
                         </div>
                </div>


                <div class="listimg left">
                    <div class="imghead1">
                        <img src="images/4b.jpg" />
                    </div>
                    <div class="caption">
                        slide 4b
                    </div>
                </div>


                <div class="listimg left">
                    <div class="imghead1">
                        <img src="images/4c.jpg" />
                    </div>
                    <div class="caption">
                        slide 4c
                    </div>
                </div>


                <div class="listimg left">
                    <div class="imghead1">
                        <img src="images/4d.jpg" />
                    </div>
                    <div class="caption">
                      slide 4d
                    </div>
                </div>


            </div>
            <div class="clear"></div>
            <!--<div id="positions4"></div>-->
            <div id="prev4"><img src="images/panah_kiri.png" alt="prev"/></div>
            <div id="next4"><img src="images/panah_kanan.png" alt="next"/></div>
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
               
                
            </div>
            <div class="headlinepaging1 left">
                <!--<div class="imgthumbhead"><img src="images/1.jpg" width="148" height="96" ></div>-->
                <div class="fotosebelumnya">
                    <div class="imgthumbhead1">
                        <img src="images/1.jpg" />  
                        <div class="tglsbl">31 Desember 2015 </div>                     
                    </div>
                </div>
                
                <div class="fotosebelumnya">
                    <div class="imgthumbhead1">
                        <img src="images/2.jpg" />  
                        <div class="tglsbl">30 Januari 2015 </div>                     
                    </div>
                </div>
                
                <div class="fotosebelumnya">
                    <div class="imgthumbhead1">
                        <img src="images/3.jpg" />  
                        <div class="tglsbl">29 Desember 2015 </div>                     
                    </div>
                </div>
                
                <div class="fotosebelumnya">
                    <div class="imgthumbhead1">
                        <img src="images/4.jpg" />  
                        <div class="tglsbl">28 Desember 2015 </div>                     
                    </div>
                </div>
                    
                    
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
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            
<!--    </div>-->
    <div class="clear"></div>
		
				
		<div id="footermenu">
			<ul>
			<?=$bottommenu?>
			</ul>
		</div>
	</div>
</div>

<script type="text/javascript">
if($("#headlinecontainer").length==1){
	$("#headlinecontainer").carouFredSel({
		items:{
			visible :1,
			height:438,
			width:469,
		},
		direction:'up',
		scroll : {
			fx : "crossfade",
			items : 1,
			duration : 1000,
		},
		width:469,
		height:438,
		pagination : {
			container : ".headlinepaging",
			anchorBuilder : false
		},
		auto: {
			timeoutDuration :10000
		},
	});
}
</script>

<?php
require "footer.php";
?>