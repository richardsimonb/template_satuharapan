<a href="https://www.satuharapan.com/foto/galeri-foto-indonesia"><div class="headbaru">
               GALERI FOTO INDONESIA 
</div></a>

            <?php
            //$koneksi = new mysqli('localhost', 'satuhara_usernya', '123qwe', 'satuhara_14feb2');
            function seo_title($s) {
		    $c = array (' ');
		    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
		    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $
		    $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
		    return $s;
		}

            $fot_baru = $koneksi->query("SELECT tt_news.image, tt_news.title
            FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
            LEFT JOIN tt_news 
                ON tt_news_cat_mm.uid_local = tt_news.uid
            WHERE tt_news_cat.title = 'Galeri Foto Indonesia' 
                AND tt_news.hidden = 0 
                AND tt_news.deleted = 0
                ORDER BY tt_news.uid 
                DESC LIMIT 0,1");
            while ($fot = $fot_baru->fetch_array()) {   
            $image_ind=explode(',',$fot['image']);
            $judul_ind=seo_title($fot['title']); 

            ?>
            
  
<div class="daftarbaru">

    <div class="isidaftarbaru">
        <a href="https://www.satuharapan.com/foto/galeri-foto-indonesia">
            <div class="fotodaftarbaru">            	                	    
            	   <!-- <img src= "../../../uploads/cache/<?php echo "309x206_".$image_ind[0]?>"> -->
            	    <img src= "../../../uploads/pics/<?php echo $image_ind[0]?>">
            	                                        
            </div>
        </a> 
        <div class="juduldaftarbaru">
            <div class="linkkata">
                <a href="https://www.satuharapan.com/foto/galeri-foto-indonesia">
                   <?php echo $fot['title']?>  
                </a>
            </div>
        </div> 
    </div>
    <div class="clear"></div>    
</div>  
 <?php } ?>  
  
 
<a href="https://www.satuharapan.com/foto/galeri-foto-dunia"> <div class="headbaru">
               GALERI FOTO DUNIA 
</div> </a>

<?php
            //$koneksi = new mysqli('localhost', 'satuhara_usernya', '123qwe', 'satuhara_14feb2');
            
            $fot_dun = $koneksi->query("SELECT tt_news.image, tt_news.title
            FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
            LEFT JOIN tt_news 
                ON tt_news_cat_mm.uid_local = tt_news.uid
            WHERE tt_news_cat.title = 'Galeri Foto Dunia' 
                AND tt_news.hidden = 0 
                AND tt_news.deleted = 0
                ORDER BY tt_news.uid 
                DESC LIMIT 0,1");
            while ($fotdunia = $fot_dun->fetch_array()) {   
            $image_dun=explode(',',$fotdunia['image']);
            $judul_dun=seo_title($fotdunia['title']); 
            ?>


<div class="daftarbaru">

    <div class="isidaftarbaru">
        <a href="https://www.satuharapan.com/foto/galeri-foto-dunia">
            <div class="fotodaftarbaru">                   
                <img src= "../../../uploads/pics/<?php echo $image_dun[0]?>">
                <!--<img src= "https://www.satuharapan.com/uploads/cache/309x206_news_16_1421233591.jpg"> -->                      
            </div>
        </a>
        <div class="juduldaftarbaru">
            <div class="linkkata">
                <a href="https://www.satuharapan.com/foto/galeri-foto-dunia">
                    <?php echo $fotdunia['title']?>
                </a>
            </div>
        </div> 
    </div>
    <div class="clear"></div>    
</div> 

 <?php } ?>  
