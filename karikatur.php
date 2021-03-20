<a href="https://www.satuharapan.com/foto/karikatur"><div class="headbaru">
               KARIKATUR
</div></a>

			<?php
            $koneksi = new mysqli('localhost', 'satuhara_usernya', '123qwe', 'satuhara_14feb2');       
            $karikatur = $koneksi->query("SELECT tt_news.image, tt_news.title
            FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
            LEFT JOIN tt_news 
                ON tt_news_cat_mm.uid_local = tt_news.uid
            WHERE tt_news_cat.title = 'Karikatur' 
                AND tt_news.hidden = 0 
                AND tt_news.deleted = 0
                ORDER BY tt_news.uid 
                DESC LIMIT 0,1");
            while ($kar = $karikatur->fetch_array()) {   
            $image_kar=explode(',',$kar['image']);
            
            ?>
            <div class="daftarbaru-kar">

					<div class="isidaftarbaru-kar">
						<a href="https://www.satuharapan.com/foto/karikatur">
							<div class="fotodaftarbaru-kar">						
								<img src="../../../uploads/pics/<?php echo $image_kar[0]?>" width="309" height="206" >						
							</div>
						</a>					
						
						<div class="juduldaftarbaru-kar">
							<div class="linkkata">
								<a href="https://www.satuharapan.com/foto/karikatur">
									<?php echo $kar['title']?>  
								</a>						
							</div>
						</div> 
					</div>					
			</div> 		
			<?php } ?> 

			
<div class="clear"></div>








          








          