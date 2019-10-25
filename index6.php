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
		
		<div class="headbaru">
               GALERI FOTO INDONESIA
		</div> 
            
            <div class="bingkaifotodetail">		
            <div id="featured" >
		  <ul class="ui-tabs-nav">
                      
                      
                      <li class="ui-tabs-nav-item" id="nav-fragment-1">
                      <a href="#fragment-1"><img src="fileadmin/templates/new/gal/150x100_news_16465_1400664103.jpg" alt="" />
                      <span>15+ Excellent High Speed Photographs</span>
                      </a></li>
                      
                      
                      <li class="ui-tabs-nav-item" id="nav-fragment-2">
                      <a href="#fragment-2"><img src="fileadmin/templates/new/gal/150x100_news_16466_1400663928.jpg" alt="" />
                      <span>20 Beautiful Long Exposure Photographs</span></a></li>
                      
                      
                      <li class="ui-tabs-nav-item" id="nav-fragment-3">
                      <a href="#fragment-3"><img src="fileadmin/templates/new/gal/150x100_news_16468_1400665629.jpg" alt="" />
                      <span>35 Amazing Logo Designs</span></a></li>
                      
                      <li class="ui-tabs-nav-item" id="nav-fragment-4">
                      <a href="#fragment-4"><img src="fileadmin/templates/new/gal/150x100_news_16469_1400666095.jpg" alt="" />
                          <span>Create a Vintage Photograph in Photoshop</span></a></li>
			
	      </ul>

	    <!-- First Content -->
	    <div id="fragment-1">
                <img src="fileadmin/templates/new/gal/news_16465_1400664103.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >15+ Excellent High Speed Photographs</a></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt condimentum lacus. Pellentesque ut diam</p>
			 </div>
	    </div>

	    <!-- Second Content -->
	    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
                <img src="fileadmin/templates/new/gal/news_16466_1400663928.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >20 Beautiful Long Exposure Photographs</a></h2>
				<p>Vestibulum leo quam, accumsan nec porttitor a, euismod ac tortor. Sed ipsum lorem, sagittis non egestas id, suscipit</p>
			 </div>
	    </div>

	    <!-- Third Content -->
	    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
                <img src="fileadmin/templates/new/gal/news_16468_1400665629.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >35 Amazing Logo Designs</a></h2>
				<p>liquam erat volutpat. Proin id volutpat nisi. </p>
	         </div>
	    </div>

	    <!-- Fourth Content -->
	    <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
                <img src="fileadmin/templates/new/gal/news_16469_1400666095.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >Create a Vintage Photograph in Photoshop</a></h2>
				<p>Quisque sed orci ut lacus viverra interdum ornare sed est. </p>
	         </div>
	    </div>
		</div>
    </div>
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