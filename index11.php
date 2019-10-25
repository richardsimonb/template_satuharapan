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
            
            
            <div class="gallery">
            <div class="bingkai">

                <div  class="image-slide" id="slide1">  

                    <div class="flexslider">
                        <ul class="slides">

                            <li><img src="fileadmin/templates/new/gal/1.jpg"/></li>
                            <li><img src="fileadmin/templates/new/gal/2.jpg"/></li>
                            <li><img src="fileadmin/templates/new/gal/3.jpg"/></li>

                        </ul>  

                    </div>
                </div>

                <div  class="image-slide" id="slide2">  
                    <div class="flexslider">

                        <ul class="slides">
                            <li><img src="fileadmin/templates/new/gal/4.jpg" /></li>
                            <li><img src="fileadmin/templates/new/gal/5.jpg" /></li>
                            <li><img src="fileadmin/templates/new/gal/6.jpg" /></li>
                        </ul>              
                    </div>
                </div>
               
            </div>
            <ul class="image-list">
                <li><a href="#slide1" title="Slide 1" id="link-slide1"><img src="fileadmin/templates/new/gal/150x100_news_16465_1400664103.jpg" alt="slide1"></a></li>
                <li><a href="#slide2" title="Slide 2" id="link-slide2"><img src="fileadmin/templates/new/gal/150x100_news_16466_1400663928.jpg" alt="slide2"></a></li>
                <li><a href="#slide3" title="Slide 3" id="link-slide3"><img src="images/thumb/150x100_news_16468_1400665629.jpg" alt="slide3"></a></li>
                <li><a href="#slide4" title="Slide 4" id="link-slide4"><img src="images/thumb/150x100_news_16469_1400666095.jpg" alt="slide4"></a></li>	       
            </ul>

        </div><!-- .gallery -->
            
    <div class="headbaru">
               GALERI FOTO DUNIA
		</div> 
            
            
            <div class="gallery">
            <div class="bingkai">

                <div  class="image-slide" id="slide10">  

                    <div class="flexslider">
                        <ul class="slides">

                            <li><img src="fileadmin/templates/new/gal/1.jpg"/></li>
                            <li><img src="fileadmin/templates/new/gal/2.jpg"/></li>
                            <li><img src="fileadmin/templates/new/gal/3.jpg"/></li>

                        </ul>  

                    </div>
                </div>

                <div  class="image-slide" id="slide20">  
                    <div class="flexslider">

                        <ul class="slides">
                            <li><img src="fileadmin/templates/new/gal/4.jpg" /></li>
                            <li><img src="fileadmin/templates/new/gal/5.jpg" /></li>
                            <li><img src="fileadmin/templates/new/gal/6.jpg" /></li>
                        </ul>              
                    </div>
                </div>
               
            </div>
            <ul class="image-list">
                <li><a href="#slide10" title="Slide 1" id="link-slide10"><img src="fileadmin/templates/new/gal/150x100_news_16465_1400664103.jpg" alt="slide1"></a></li>
                <li><a href="#slide20" title="Slide 2" id="link-slide20"><img src="fileadmin/templates/new/gal/150x100_news_16466_1400663928.jpg" alt="slide2"></a></li>
                <li><a href="#slide3" title="Slide 3" id="link-slide30"><img src="images/thumb/150x100_news_16468_1400665629.jpg" alt="slide3"></a></li>
                <li><a href="#slide4" title="Slide 4" id="link-slide40"><img src="images/thumb/150x100_news_16469_1400666095.jpg" alt="slide4"></a></li>	       
            </ul>

        </div><!-- .gallery -->        
            
            
            
            
            
            
    <div class="clear"></div>
    
		
				
		<div id="footermenu">
			<ul>
			<?=$bottommenu?>
			</ul>
		</div>
	</div>
</div>
<!-- Load the flexslider -->
        <script type="text/javascript" charset="utf-8">
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "fade" // slide or fade

                });
            });
        </script>

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