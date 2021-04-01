<?php
require "header.php";
?>
<div id="content">
    <!--- Content Top --->
    <div id="ct-top" class="homepage">
		<div id="ctop-left">
			<div class="blueTitle"><?=strtoupper($getparentcategory)?></div>
			<div class="infoberita">
					
			<!-- edit by:ben, tgl 20 feb 2016, penambahan kata karikaturis -->
			<?php
				if(strtoupper($getparentcategory) =="KARIKATUR"){ ?>
				<span class="left">Karikaturis: <?=$getdetailnews[0]['author']?></span> 
				<?php } else { ?>
			    <span class="left">Penulis: <?=$getdetailnews[0]['author']?></span> 
				<?php } ?>
				<span class="right"><?=$publisdate?></span>
				<div class="clear"></div>
			</div>
			<div class="titleberita"><h1><?=stripslashes($getdetailnews[0]['title'])?></h1></div>
			<div class="titleberita"><h5><?=stripslashes($getdetailnews[0]['short'])?></h5></div>
			<?php
			if(count($imgexplode)>1){?>
				<div class="containerslider">
					<div id="imagearea">
						<?php
						for($counterimg=0;$counterimg<count($imgexplode);$counterimg++){?>
						<div class="listimg left">
							<div class="img">
								<img alt="<?=stripslashes($getdetailnews[0]['title'])?>" src="<?='/uploads/pics/'.$imgexplode[$counterimg]?>" width="635" height="422"/>
							</div>
							<div class="caption"><?=$imgcaptionexplode[$counterimg]?></div>
						</div>


						<?php
						}
						?>
					</div>
					<div class="clear"></div>
					<div id="positions"></div>
					<div id="prev"><img src="<?='https://www.satuharapan.com'.'/'.PATH_template?>images/panah_kiri.png" alt="prev"/></div>
					<div id="next"><img src="<?='https://www.satuharapan.com'.'/'.PATH_template?>images/panah_kanan.png" alt="next"/></div>
				</div>
				<?php
		
				if($counterimg>1){?>
			<!--	<div class="imgpagingarea right">
					<?php
					for($counterimg=0;$counterimg<count($imgexplode);$counterimg++){?>
					<span class="left pagingimg"><?=$counterimg+1?></span>
					<?php
					}
					?>
				</div>
				<div class="clear"></div>-->
				<?php
				}
			}
			else if(count($imgexplode)==1&&$imgexplode[0]!=""){
			?>
				<div class="img">
					<img src="<?='/uploads/pics/'.$imgexplode[0]?>" width="635" height="422"/>
				</div>
				<div class="caption"><?=$imgcaptionexplode[0]?></div>

			<?php
			}

			?>

			<div class="isiberita"><?=$isi_process?></div>

  <div class="share">
    <div id="twshare" class="left">
      <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?=$short_url;?>"  data-via="1harapan" data-counturl="<?='https://www.satuharapan.com'."/".$route?>">Tweet</a>
    </div>
    <div id="fbshare" class="left"><div class="fb-share-button" data-href="<?=$short_url;?>" data-type="button_count"></div></div>
    <!-- Place this tag where you want the share button to render. -->
    <div id="whatsappshare" class="left">
      <!-- share ke Whatsapp by H tgl 1 Nov 2016 -->
      <a href="whatsapp://send?text=<?='https://www.satuharapan.com'?><?=$_SERVER['REQUEST_URI']?>" data-action="share/whatsapp/share">
      <img src="<?='https://www.satuharapan.com'.'/'.PATH_template?>images/WA-share.jpg" width="80px" height="20px" alt="Bagikan ke WhatsApp" /></a>
    </div>
    <div id="lineshare" class="left">
      <div class="line-it-button" data-lang="en" data-type="share-a" data-ver="3" data-url="<?='https://www.satuharapan.com'?><?=$_SERVER['REQUEST_URI']?>" data-color="default" data-size="small" data-count="true" style="display: none;"></div>
      <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
    </div>
    <div class="clear"></div>
  </div>
<div class="center">
  <div class="fb-page" data-href="https://www.facebook.com/satuharapan/" data-tabs="" data-width="500" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/satuharapan/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/satuharapan/">Satu Harapan</a></blockquote></div>
</div>
	<div class="pagingarticle center">
		<div class="back">
			<a href="<?=$prev?>">
				<span class="backarrow"></span>
				<span>BACK</span>
			</a>
		</div>
		<div class="next">
			<a href="<?=$next?>">
				<span>NEXT</span>
				<span class="arrow"></span>
			</a>
		</div>
	</div>

<!-- penambahan banner image Sukawu by H tgl 6 Des 2016 -->
			<!-- <?php
				if(strtoupper($getparentcategory) =="SAINS"){ ?>
				<div class="share"><a href="http://www.sukawu.com" target="_blank"><img src="<?='https://www.satuharapan.com'.'/'.PATH_template?>images/SUKAWU-BANNER-UNTUK-WEBSITE-SATU-HARAPAN.jpg" alt="Cari Kursus, Tempat Pelatihan Berkualitas & Promo Secara Online, Cepat dan Mudah di Sini!" /></a>
				</div>
				<?php } else { ?> -->
			<!--iklan googlead -->
			
                        <div class="share">
<!--				<img src="<?='https://www.satuharapan.com'.'/'.PATH_template?>images/PlacedBanner635x150.jpg"/> -->
			</div>
				<?php } ?>
											
			<?php
			
			if(count($berita_terkait)>0){?>
			<div class="terkait">
				<div class="judulterkait">BERITA TERKAIT 
                                         <!-- <?=strtoupper($getparentcategory)?> -->
                                </div>
				<?php
				$counter = 0;
				$class = "left";
				foreach($berita_terkait as $terkait)
				{
					if($counter<count($berita_terkait)-1){
						$class = "left";
					}
					else
					{
						if(count($berita_terkait)==4){
							$class = "right";
						}
					}
				?>
					<div class="listterkait <?=$class?>">
						<span class="img-thumb"><a title="<?=$terkait['title']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$terkait['url']?>"><img src="<?='/uploads/pics/'.$terkait['image']?>"/></a></span>
						<div class="titleterkait">
							 <h4><a title="<?=$terkait['title']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$terkait['url']?>"><?=$terkait['title']?></a></h4>
						</div>
					</div>
				<?php
					$counter++;
				}
				?>
				<div class="clear"></div>
			</div>
			<?php
			}
			?>			
			
			<div class="terkait">
				<div class="judulterkait">TERPOPULER</div>
				<?php
				$counter = 0;
				$class = "left";
				foreach($populer as $list)
				{
					$image = explode(",",$list['image']);
					resizeFile($image[0],202,135,"202x135_".$image[0]);
					if($counter<count($populer)-1){
						$class = "left";
					}
					else
					{
						if(count($populer)==4){
							$class = "right";
						}
					}
				?>
					<div class="listterkait <?=$class?>">
						<span class="img-thumb"><a title="<?=$list['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><img src="<?='/uploads/cache/'."202x135_".$image[0]?>" width="202" height="135" alt="<?=$list['realtitle']?>"/></a></span>
						<div class="titleterkait">
							 <h4><a title="<?=$list['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><?=$list['title']?></a></h4>
						</div>
					</div>
				<?php
					$counter++;
				}
				?>
				<div class="clear"></div>
			</div>
		</div>
		<?php
		require "right.php";
		
		
		?>
		
		<!--iklan adplus-->
		<!--
		<div class="adp_readdetail right">
			<script type="text/javascript">
			var placementId = "5575249";
			var sizeId = "170"; 
			</script><script type="text/javascript" language="javascript" src="http://adr.adplus.co.id/script/adt.js"></script>
			<noscript>
			<a href="http://adsrv.adplus.co.id/adlink/3.0/1336/5575249/0/170/ADTECH;loc=300" target="_blank">
			<img src="http://adsrv.adplus.co.id/adserv/3.0/1336/5575249/0/170/ADTECH;loc=300" border="0" width="300" height="250">
			</a>
			</noscript>
		</div>
		
		
		<div class="adp_readdetail right">
		
	
		</div>
		-->
		
		
		
		
		
		
        <div class="clear line"></div>
    </div>
    
    
	<!-- Sisipan banner -->
	
	<div class="bann-mid1">
		<?php echo getBanner($full1, $banner_path, "bannerMid"); ?>
	</div>
	<div class="bann-mid1">
		<?php echo getBanner($full2, $banner_path, "bannerMid"); ?>
	</div>
	
    
    
	<div id="ct-cent">
		<?php
		require "opini.php";
		?>
		
		<div class="spasi10"> </div>
		
		<div class="bann-mid1">
			<?php echo getBanner($full4,$banner_path, "bannerMid"); ?>
		</div>

		<div class="bann-mid1">
			<?php echo getBanner($full5,$banner_path, "bannerMid"); ?>
		</div>
						
		<div id="footermenu">
			<ul>
			<?=$bottommenu?>
			</ul>
		</div>
		
		
	</div>

	
</div>
	<?php
	if($counterimg>1){?>
	<script type="text/javascript">
	$(document).ready(function() {
		tinggi = 0;
		$("#imagearea .caption").each(function(){
			tinggi2 = $(this).height();
			if(tinggi2>tinggi){
				tinggi = tinggi2;
			}
		});
		tinggi = 422 + parseInt(tinggi) + 10;
		$.fn.carouFredSel.defaults.items.height = tinggi;
		$.fn.carouFredSel.defaults.height = tinggi;
		$("#imagearea").carouFredSel({
			items:{
				visible :1,
				width:635,
			},
			direction:'left',
			scroll : {
				items : 1,
				duration : 1000,
			},
			width:635,
			auto: {
				timeoutDuration :10000,
				onTimeoutStart:function( data ) {getpos()}
			},
			prev: {
				button:'#prev',
                onAfter: function( data ) {getpos()}
			},
			next:{
				button:"#next",
				onAfter: function( data ) {getpos()}
			}
		});
	});
		function getpos(){
			$("#imagearea").trigger("currentPosition", function( pos ) {
				var bnykimage = $(".listimg").length;
				$("#positions").html((pos + 1 )+ " / " + bnykimage);
			});
		}
		</script>
	<?php
	}
	require "footer.php";
	?>
    
