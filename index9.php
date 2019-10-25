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
                      <?php
                    $koneksi = new mysqli('localhost', 'satuhara_usernya', '123qwe', 'satuhara_14feb2');
                    $g= $koneksi->query("SELECT tt_news.image, tt_news.title
                    FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
                    LEFT JOIN tt_news 
                        ON tt_news_cat_mm.uid_local = tt_news.uid
                    WHERE tt_news_cat.title = 'Foto' 
                        AND tt_news.hidden = 0 
                        AND tt_news.deleted = 0
                    ORDER BY tt_news.uid 
                        DESC LIMIT 0,10");
                    if($galeriindo = $g ) {
                
                       $no=0;
                
            
            while ($galindo = $galeriindo->fetch_array()) {  
            $no++;
            //$image_galindo=explode(',',$galindo['image']);
            $image = explode(",",$galindo['image']);
            resizeFile($image[0],150,100,"150x100_".$image[0]);
                      
            ?>         
                      <li class="ui-tabs-nav-item" id="nav-fragment-<?php echo $no ?>">
                      <a href="#fragment-<?php echo $no ?>"><img src="<?=PATH_image_cache."150x100_".$image[0]?>" alt="" />
                          
                      <span><?php echo $galindo['title']?></span></a></li>
                                                     
                <?php } } ?> 
			
	      </ul>
                
                

	    <!-- First Content -->
            <?php
                    $koneksi = new mysqli('localhost', 'satuhara_usernya', '123qwe', 'satuhara_14feb2');
                    $g= $koneksi->query("SELECT *
                    FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
                    LEFT JOIN tt_news 
                        ON tt_news_cat_mm.uid_local = tt_news.uid
                    WHERE tt_news_cat.title = 'Foto' 
                        AND tt_news.hidden = 0 
                        AND tt_news.deleted = 0
                    ORDER BY tt_news.uid 
                        DESC LIMIT 1");
                    if($galeriindo = $g ) {
                
                       $no=0;
                
            
            while ($galindo = $galeriindo->fetch_array()) {  
            $no++;
            //$image_galindo=explode(',',$galindo['image']);
            $image = explode(",",$galindo['image']);
            
                      
            ?>
	    <div id="fragment-1">
	    <div class="judulgaleri"><?php echo $galindo['title']?></div>
                <img src="<?=PATH_image.$image[0]?>" alt="" />
			 <!--<div class="info" >
				<h2>
				<a href="#" >
				<?php echo $galindo['title']?>
				</a>
				</h2>
				<div class="captiongaleri"><?php echo $galindo['bodytext']?></div>
			 </div>
			 -->
		<div class="captiongaleri"><?php echo $galindo['bodytext']?></div>
	    </div>
            <?php } } ?> 

            
            
            
            
	    <!-- Second Content -->
            <?php
                    $koneksi = new mysqli('localhost', 'satuhara_usernya', '123qwe', 'satuhara_14feb2');
                    $g= $koneksi->query("SELECT *
                    FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
                    LEFT JOIN tt_news 
                        ON tt_news_cat_mm.uid_local = tt_news.uid
                    WHERE tt_news_cat.title = 'Foto' 
                        AND tt_news.hidden = 0 
                        AND tt_news.deleted = 0
                    ORDER BY tt_news.uid 
                        DESC LIMIT 1,9");
                    if($galeriindo = $g ) {
                
                       $no=0+1;
                
            
            while ($galindo = $galeriindo->fetch_array()) {  
            $no++;
            //$image_galindo=explode(',',$galindo['image']);
            $image = explode(",",$galindo['image']);
            
                      
            ?>
            
	    <div id="fragment-<?php echo $no ?>" class="ui-tabs-panel ui-tabs-hide" style="">
	    <div class="judulgaleri"><?php echo $galindo['title']?></div>
                <img src="<?=PATH_image.$image[0]?>" alt="" />
                
			 <!--<div class="info" >
				<h2><a href="#" ><?php echo $galindo['title']?></a></h2>
				<p><?php echo $galindo['bodytext']?></p>
			 </div>
			 -->
			 <div class="captiongaleri"><?php echo $galindo['bodytext']?></div>
	    </div>
             <?php } } ?> 
            
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