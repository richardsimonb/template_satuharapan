<?php
require "header.php";
?>
<section id="content">
    <!--- Content Top --->
    <section id="ct-top">
		<section id="ctop-left">
			<?php
			require $namepage;
			?>
		</section>
        <div class="bann-mid1">
			<?php echo getBanner($full2,$banner_path); ?>
		</div>
    </section>
	<?php
	if($namepage=="category.php"){?>
	<section id="ct-cent">
		<?php
		require "latestnews.php";
		?>
		<div class="bann-mid1">
		<?php
		echo getBanner($mid_half2_kiri,$banner_path,"left");
		echo getBanner($mid_half2_kanan,$banner_path,"right");
		?>
		<div class="clear"></div>
		</div>
		<?php
		require "life.php";
		require "opini.php";
		?>
		<div class="bann-mid1">
		<?php
		echo getBanner($mid_half3_kiri,$banner_path,"left");
		echo getBanner($mid_half3_kanan,$banner_path,"right");
		?>
		<div class="clear"></div>
		</div>
		<?php
		require "popular.php";
		require "flora.php";
		?>
		<div class="bann-mid1">
			<?php echo getBanner($full4,$banner_path); ?>
		</div>
	</section>
	<?php
	}
	?>
</section>
<?php
require "footer.php";
?>
