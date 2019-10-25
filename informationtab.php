<link rel="stylesheet" href="<?=PATH_template?>css/jquery-ui-1.10.3.custom.min.css" />
<script type="text/javascript" src="<?=PATH_template?>js/jquery-ui-1.10.3.custom.min.js"></script>
<div id="information">
	<div id="tabsinfo">
		<ul>
		<?php
			$count =1;
			
			foreach($contentinfo as $info){?>
				<li><a href="#info-<?=$count?>"><?=$info['header']?></a></li>
			<?php
				$count++;
			}
			
			?>
		</ul>
		<hr>
		<?php
			$count =1;
			
			foreach($contentinfo as $info){?>
			<div id="info-<?=$count?>">
				<span class="titleinfo"><?=$info['header']?></span>
				<br />
				<?=$info['preview']?>
			</div>
			<?php
				$count++;
			}
			
			?>
	</div>
</div>
<script type="text/javascript">
$(function() {
	$("#tabsinfo").tabs();
});
</script>