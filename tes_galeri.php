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
								<div class="imghead"><a title="<?=$list['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><img src="<?='/uploads/cache/'."469x312_".$image[0]?>" width="469" height="312" alt="<?=$list['realtitle']?>"></a></div>
							<?php
							$class="titlelatest";
							}
							?>
							<div class="<?=$class?>">
								 <h1><a title="<?=$list['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><?=$list['title']?></a></h1>
								<?=$list['preview']?>
								<a title="<?=$list['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><span class="more"></span></a>
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
					<div class="imgthumbhead"><img alt="<?=$list['realtitle']?>" title="<?=$list['realtitle']?>" src="<?='/uploads/cache/'."148x96_".$image[0]?>" width="148" height="96" alt="<?=$list['realtitle']?>_paging"></div>
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
								<span class="img-thumb"><a title="<?=$listlatest['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$listlatest['value_alias']?>"><img src="<?='/uploads/cache/'."309x206_".$image[0]?>" width="309" height="206" alt="<?=$listlatest['realtitle']?>"/></a></span>
							<?php
							$class="titlelatest";
							}
							?>
							<div class="<?=$class?>">
								 <h1><a title="<?=$listlatest['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$listlatest['value_alias']?>"><?=$listlatest['title']?></a></h1>
								<?=$listlatest['preview']?>
								<a title="<?=$listlatest['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$listlatest['value_alias']?>"><span class="more"></span></a>
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
		
        <div class="clear line"></div>
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
