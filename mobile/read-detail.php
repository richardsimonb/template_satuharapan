<?php
require "header.php";
?>
<section id="content">
    <!--- Content Top --->
    <section id="ct-top">
		<section id="ctop-left">
			<div class="blueTitle"><?=strtoupper($getparentcategory)?></div>
			<div class="infoberita">
				<span class="float-lt">Penulis: <?=$getdetailnews[0]['author']?></span>
				<span class="float-rt"><?=$publisdate?></span>
				<div class="clear"></div>
			</div>
			<div class="titleberita"><h1><?=$getdetailnews[0]['title']?></h1></div>
			<div class="titleberita"><h5><?=$getdetailnews[0]['short']?></h5></div>
			<div id="imagearea">
				<?php
				for($m=0;$m<count($imgexplode);$m++){
					resizeFile($imgexplode[$m],600,400,$imgexplode[$m]);
				?>
				<div class="listimg">
					<div class="img">
						<img src="<?=PATH_image_cache.$imgexplode[$m]?>" width="600" height="400"/>
					</div>
					<div class="caption"><?=$imgcaptionexplode[$m]?></div>
				</div>
				<?php
				}
				?>
			</div>
			<div class="isiberita"><?=$isi_process?></div>
			<div class="share">
				<div id="twshare" class="float-lt"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?=$short_url;?>" data-via="1harapan" data-counturl="<?=baseURL."/".$route?>">Tweet</a></div>
				<div id="fbshare" class="float-lt"><div class="fb-share-button" data-href="<?=$short_url;?>" data-type="button_count"></div></div>
				<!-- <div id="gplusshare" class="float-lt">
					<div class="g-plus" data-action="share" data-href="" data-annotation="bubble"></div>
				</div> -->
				<div class="float-lt" id="whatsapp">
				<!-- share ke Whatsapp by H tgl 1 Nov 2016 -->
					<a href="whatsapp://send?text=<?=baseURL?><?=$_SERVER['REQUEST_URI']?>" 
					data-action="share/whatsapp/share">
					<img src="<?=baseURL.'/'.PATH_template?>mobile/images/WA-share.jpg" width="96px" height="24px" alt="Bagikan ke WhatsApp" /></a>
				</div>
				<div class="float-lt" id="line">
					<div class="line-it-button" data-lang="en" data-type="share-a" data-ver="3" data-url="<?=baseURL?><?=$_SERVER['REQUEST_URI']?>" data-color="default" data-size="small" data-count="true" style="display: none;"></div>
					<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
				<!-- <span>
				<script type="text/javascript" src="//media.line.me/js/line-button.js?v=20140411" ></script>
				<script type="text/javascript">
				new media_line_me.LineButton({"pc":false,"lang":"en","type":"a","text":"<?=baseURL?><?=$_SERVER['REQUEST_URI']?>","withUrl":true});
				</script>
				</span> -->
				</div>
				<div class="clear"></div>

			</div>
			<div class="pagination txt-center">
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
			<div class="bann-mid1">
		      <?php echo getBanner($full5,$banner_path);?> <!-- Banner zuri -->
		    </div>
			
<!-- penambahan banner kategori SAINS by H tgl 6 Des 2016 -->
	            <!-- <?php
				if(strtoupper($getparentcategory) =="SAINS"){ ?>
				<div class="share"><a href="http://www.sukawu.com" target="_blank"><img src="<?=baseURL.'/'.PATH_template?>mobile/images/SUKAWU-BANNER-UNTUK-WEBSITE-SATU-HARAPAN.jpg" /></a>
				</div>
				<?php } else { ?>
                                <div class="clear"></div>
                                <?php } ?> -->

			<?php
			if(count($berita_terkait)>0){?>
			<div class="terkait">
				<div class="blueTitleSmall">BERITA TERKAIT</div>
				<div class="listterkait">
					<ul>
				<?php
				foreach($berita_terkait as $terkait)
				{
				?>
					<li><h2><a href="<?=baseURL?>/read-detail/read/<?=$terkait['url']?>"><?=$terkait['title']?></a></h2></li>
				<?php
				}
				?>
					</ul>
				</div>
			</div>
			<?php
			}
			?>
		</section>
        <div class="clear"></div>
    </section>
	<div class="bann-mid1">
		<?php
		echo getBanner($mid_half1_kiri,$banner_path,"left");
		echo getBanner($mid_half1_kanan,$banner_path,"right");
		?>
		<div class="clear"></div>
		</div>
	<div class="bann-mid1">
		<?php echo getBanner($full1,$banner_path); ?>
	</div>
	<section id="ct-cent">
		<?php
		require "popular.php";
		?>           
		<?php
	//	require "life.php";
		?>
		
		<div class="bann-mid1">
			<?php
			echo getBanner($half_3a,$banner_path,"left");
			echo getBanner($half_4a,$banner_path,"right");
			?>
			<div class="clear"></div>
		</div>
		<div class="bann-mid1">
		<?php echo getBanner($full2,$banner_path); ?>
	    </div>
		<?php
		require "opini.php";
		?>
		<div class="bann-mid1">
		<?php
		echo getBanner($mid_half2_kiri,$banner_path,"left");
		echo getBanner($mid_half2_kanan,$banner_path,"right");
		?>
		<div class="clear"></div>
		</div>
		<div class="bann-mid1">
		<?php echo getBanner($full3,$banner_path); ?>
	    </div>
		<?php
		require "flora.php";
		?>
		<div class="bann-mid1">
		<?php
		echo getBanner($mid_half3_kiri,$banner_path,"left");
		echo getBanner($mid_half3_kanan,$banner_path,"right");
		?>
		<div class="clear"></div>
		</div>
		<div class="bann-mid1">
		<?php echo getBanner($full4,$banner_path);?>
		</div>
		<!-- Posisi Awal Banner full5 -->
		<div class="share">
			<div style="display:none;"><a href="<?=baseURL.'/'.PATH_template?>/images/WismaSinarKasih0263_512609.jpg" target="_blank"><img src="<?=baseURL.'/'.PATH_template?>mobile/images/BannerWismaSinarKasih309x220.jpg" /></a></div>
			<a href="https://bit.ly/penaburkidventure">
	   			<img src="/fileadmin/banners/penaburkidventure1010.jpeg"/>
			</a>
		</div>
	</section>
</section>
<?php
require "footer.php";
?>
