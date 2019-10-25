<?php
require "header.php";
?>
<link media="all" href="typo3conf/ext/powermail/res/css/powermail_frontend_fancy.css" type="text/css" rel="stylesheet">
<div id="content">
    <!--- Content Top --->
    <div id="ct-top" class="homepage">
		<div id="ctop-left">
		<?php
		if($flag=="sukses")
		{
		?>
		<h1>SUKSES</h1>
		<?=$mailtemplate?>
		<br />
		<h2> Terima Kasih </h2>
		<?php
		}
		else{?>
			<div class="tx-powermail-pi1">
				<form id="<?=$formid?>" name="<?=$formid?>" class="tx_powermail_pi1_form" enctype="multipart/form-data" method="POST" action="<?=baseURL."/".$route?>">
				<div class="fieldsets">
					 <fieldset id="tx-powermail-pi1_fieldset_4" class="tx-powermail-pi1_fieldset tx-powermail-pi1_fieldset_4">
						<legend><?=$fields[0]['fieldset']?></legend>
						<?php
						$tabindex = 1;
						foreach($fields as $field){
							$required = "";
						?>
						<div id="powermaildiv_uid<?=$field['uid']?>" class="tx_powermail_pi1_fieldwrap_html tx_powermail_pi1_fieldwrap_html_<?=$field['inputtype']?> tx_powermail_pi1_fieldwrap_html_<?=$field['uid']?>">
							<?php if($field['inputtype']!="submit"){?>
							<label for="uid<?=$field['uid']?>"><?=$field['inputtitle']?>
							<?php if($field['mandatory']==1){?>
								<span class="powermail_mandatory">*</span>
							<?php
								$required = 'required="required"';
								}
								?>
							</label>
							<?php
							}
							if($field['inputtype']=="text"){
							?>
								<input type="text" id="uid<?=$field['uid']?>" tabindex="<?=$tabindex?>" class="powermail_formcontact powermail_text powermail_uid<?=$field['uid']?>" maxlength="<?=$field['maxlength']?>" size="<?=$field['size']?>" name="tx_powermail_pi1[uid<?=$field['uid']?>]" <?=$required?> />
							<?php
							}
							if($field['inputtype']=="email"){
							?>
								<input type="email" id="uid<?=$field['uid']?>" tabindex="<?=$tabindex?>" class="powermail_formcontact powermail_text powermail_uid<?=$field['uid']?>" maxlength="<?=$field['maxlength']?>" size="<?=$field['size']?>" name="tx_powermail_pi1[uid<?=$field['uid']?>]" <?=$required?> />
							<?php
							}
							else if($field['inputtype']=="captcha"){
							
							# was there a reCAPTCHA response?
							echo recaptcha_get_html($publickey, $error);
							if($error){
								echo "<div class='errorcaptcha'>Error : <br /> Incorrect captcha</div>";
							}
							?>

							<?php
							}
							else if($field['inputtype']=="textarea"){
							?>
							<textarea <?=$required?> cols="<?=$field['cols']?>" tabindex="<?=$tabindex?>" rows="<?=$field['rows']?>" id="uid<?=$field['uid']?>" class="powermail_formcontact powermail_textarea powermail_uid<?=$field['uid']?>" name="tx_powermail_pi1[uid<?=$field['uid']?>]"></textarea>
							<?php
							}
							else if($field['inputtype']=="submit"){
							?>
							<input type="submit" tabindex="<?=$tabindex?>" class="powermail_formcontact powermail_submit powermail_submit_uid11" value="<?=$field['inputtitle']?>">
							<?php
							}
							?>
						</div>
						<?php
						}
						?>
					</fieldset>
				</div>
			</div>
		<?php
		}
		?>
		</div>
		<?php
		require "right.php";
		?>
        <div class="clear line"></div>
    </div>
	<div id="ct-cent">
		<?php
		require "opini.php";
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
