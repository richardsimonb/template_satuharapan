<section id="information">
	<?php
		$count = 1;
		foreach($contentinfo as $info){?>
		<div class="info">
			<span class="titleinfo"><h2><?=$info['header']?></h2></span>
			<br />
			<?=$info['preview']?>
		</div>
		<?php
			$count++;
		}
		?>
</section>