<?php
include_once('wp-load.php');
global $wpdb;
$wp_prefix = $wpdb->base_prefix;

$message = '';

if( isset($_POST) && isset($_POST['site_url']) && strlen(trim($_POST['site_url'])) > 0 ){
	$new_url = $_POST['site_url'];
	$old_site_url = $_POST['old_site_url'];



	$rso = str_replace('/', '\/', $old_site_url);
	$rsn = str_replace('/', '\/', $new_url);

//go through all tables and replace image URLs with new names

	$sql = $wpdb->prepare("UPDATE ".$wpdb->prefix . RevSliderFront::TABLE_SLIDER. " SET `params` = replace(`params`, %s, %s)", array($rso, $rsn));
	$wpdb->query($sql);
	$sql = $wpdb->prepare("UPDATE ".$wpdb->prefix . RevSliderFront::TABLE_SLIDES. " SET `params` = replace(`params`, %s, %s)", array($rso, $rsn));
	$wpdb->query($sql);
	$sql = $wpdb->prepare("UPDATE ".$wpdb->prefix . RevSliderFront::TABLE_SLIDES. " SET `layers` = replace(`layers`, %s, %s)", array($rso, $rsn));
	$wpdb->query($sql);
	$sql = $wpdb->prepare("UPDATE ".$wpdb->prefix . RevSliderFront::TABLE_STATIC_SLIDES. " SET `params` = replace(`params`, %s, %s)", array($rso, $rsn));
	$wpdb->query($sql);
	$sql = $wpdb->prepare("UPDATE ".$wpdb->prefix . RevSliderFront::TABLE_STATIC_SLIDES. " SET `layers` = replace(`layers`, %s, %s)", array($rso, $rsn));
	$wpdb->query($sql);


	/* Update revolution slider images */

	
		$message = 'Update successful. Please go to Homepage and check again !!';

}
?>
<div class="form-wrapper">
	<form name="input" action="" method="post">
		<h2>Replace URL site url for Revo Slider</h2>
		<div class="old-domain">
			<label>Old Domain : </label>
			<input type="text" name="old_site_url" placeholder="192.168.1.1" autofocus autocomplete="off" />
		</div>
		<div class="new-domain">
			<label>New Domain : </label>
			<input type="text" name="site_url" placeholder="http://new-url" autofocus autocomplete="off" />
		</div>
		<p class="description">Without '/' at the end of url</p>
		<input type="submit" value="Change URL" />
	</form> 
	<?php if( $message != '' ): ?>
		<div class="message">
			<?php echo $message; ?>
		</div>
	<?php endif; ?>
</div>
<marquee width="20%" direction="right" class="desin-by">Design by QuanDz</marquee>
<style type="text/css">
	.form-wrapper{
		width: 600px;
		text-align: center;
		margin: 0 auto;
		padding: 20px 10px;
		font-size: 17px;
	}
	.form-wrapper h2{
		text-transform: uppercase;
	}
	.form-wrapper input {
		max-width: 350px;
		margin-bottom: 10px;
	}
	.form-wrapper input[type="text"]{
		width: 90%;
		height: 30px;
		line-height: 30px;
		font-size: 16px;
		padding: 2px 5px;
		margin-right: 15px;
		margin-top: 10px;
	}
	.form-wrapper .description{
		display: block;
		padding: 5px 5px;
		font-style: italic;
	}
	.form-wrapper input[type="submit"]{
		background-color: #2E9AFE;
		color: #fff;
		border: none;
		padding: 5px 10px;
		font-size: 16px;
	}
	.form-wrapper input[type="submit"]:hover{
		cursor: pointer;
		background-color: #58ACFA;
	}
	.form-wrapper .message{
		color: #FF00FF;
	}
	.design-by{
		position: fixed;
		bottom: 0;
		right: 0;
	}
	marquee.desin-by {
    float: right;
}
</style>