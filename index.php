<?php
	require "header.php";
?>

<!-- Iklan Samping Kanan Kiri -->
<div style="position:fixed; left:0; top:0; z-index:-1; max-height:600px; max-width:160px; margin-top:30px; display:none;">
	<img class="img-fluid" src="/fileadmin/user_upload/banners/bannerPKW1.png"/>
</div>

<div style="position:fixed; right:0; top:0; z-index:-1; max-height:600px; max-width:160px; margin-top:30px; display:none;">
	<img class="img-fluid" src="/fileadmin/user_upload/banners/bannerPKW2.png"/>
</div>

<div id="content">
    <!-- Content Top -->
	<div id="ct-top" class="homepage">
		<div id="ctop-left">
			<?php
			if(count($topik_pilihan)>0){
			?>
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
								if($image[0]!=""){
								?>
    								<div class="imghead">
									    <a title="<?=$list['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>">
										    <img src="<?=PATH_image_cache."469x312_".$image[0]?>" width="469" height="312" alt="<?=$list['realtitle']?>">
									    </a>
								    </div>
								<?php
									$class="titlelatest";
								}
							    ?>
							    <div class="<?=$class?>">
								    <h1>
    								 	<a title="<?=$list['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><?=$list['title']?></a>
								    </h1>
								    <?=$list['preview']?>
								    <a title="<?=$list['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>">
									    <span class="more"></span>
								    </a>
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
		    //require "iklan_moses.php";
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
							if($image[0]!=""){
							?>
								<span class="img-thumb">
									<a title="<?=$listlatest['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$listlatest['value_alias']?>">
										<img src="<?=PATH_image_cache."309x206_".$image[0]?>" width="309" height="206" alt="<?=$listlatest['realtitle']?>"/>
									</a>
								</span>
						    <?php
							    $class="titlelatest";
							}
						    ?>
							<div class="<?=$class?>">
								<h1>
								    <a title="<?=$listlatest['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$listlatest['value_alias']?>"><?=$listlatest['title']?></a>
								</h1>
								<?=$listlatest['preview']?>
								<a title="<?=$listlatest['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$listlatest['value_alias']?>">
								    <span class="more"></span>
								</a>
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
            <!-- <img src="<?=baseURL.'/'.PATH_template?>images/PlacedBanner635x150.jpg"/> -->
		</div>
		<?php
		require "right.php";
		?>
        <div class="clear line"></div>
	</div>

	<?php
	require "latestnews.php";
	//require "bannerKC.php";
	require "opini.php";
	//require "iklankarirpacet.php";
	require "popular.php";
	//require "galeri_indo.php";
	//require "galeri_dunia.php";
	?>
	<div id="footermenu">
		<ul>
			<?=$bottommenu?>
		</ul>
	</div>
</div>


<script type="text/javascript" async>
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
