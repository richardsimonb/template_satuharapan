<?php
if($namepage=="category.php"){
?>
	<?php
	require "header.php";
	?>

	<div id="content">
		<!--- Content Top --->
		<div id="ct-top" class="homepage">
			<div id="ctop-left">
				<?php
				require $namepage;
				?>
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
			<div id="footermenu">
				<ul>
				<?=$bottommenu?>
				</ul>
			</div>
		</div>
	</div>

	<?php
	require "footer.php";
	?>

<?php
} else {
?>

	<?php
	require "header.php";
	?>

	<div id="content">
		<!--- Content Top --->
		<div id="ct-top" class="homepage">
			<div id="ctop-left">
				<?php
				require $namepage;
				?>
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
			<div id="footermenu">
				<ul>
				<?=$bottommenu?>
				</ul>
			</div>
		</div>
	</div>

	<?php
	require "footer.php";
	?>
<?php
}
?>

