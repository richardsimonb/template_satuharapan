        <div class="katgalerilainnya kanan"> 
          
            <?php
            $fotodaftar = $koneksi->query("SELECT *
            FROM (tt_news_cat_mm LEFT JOIN tt_news_cat ON tt_news_cat_mm.uid_foreign = tt_news_cat.uid)
            LEFT JOIN tt_news 
                ON tt_news_cat_mm.uid_local = tt_news.uid
            WHERE tt_news_cat.title =  'Galeri Foto Indonesia' 
                AND tt_news.hidden = 0 
                AND tt_news.deleted = 0
                ORDER BY tt_news.uid 
                DESC LIMIT 0,5");
            while ($fdt = $fotodaftar->fetch_array()) {
                $fot_image = explode(',', $fdt['image']);
                ?>

                <div class="isidaftarbaru">
                    
                        <div class="fotodaftarbaru">                   
                            <img src= "../../../uploads/cache/<?php echo "309x206_".$fot_image[0]?>">                      
                        </div>
                    
                    <div class="juduldaftarbaru">
                        <div class="linkkata">
                            
                                <?php echo $fdt['title'] ?>
                            
                        </div>
                    </div> 
                </div>
                <div class="clear"></div>
            <?php } ?>
            <div class="terbarulainnya">
                <div class="linkkata">
                    <a href="../satuharapannew/read-detail.php?id=<?php echo $fdt['uid'] ?>">
                        GALERI FOTO lainnya >>
                    </a>
                </div>
            </div>
         


            <div class="clear"></div>
        </div>
