<div class="bottompart">
	<div class="popular">
		<div class="blueTitleSmall">TERPOPULER</div>
		<div class="listpopuler">
			<ul>
			<?php
		foreach($populer as $list){
		?>
			
				<li><h5><a href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><?=$list['title']?></a></h5></li>
			
		<?php
		}
		?>
			</ul>
		</div>
	</div>
</div>