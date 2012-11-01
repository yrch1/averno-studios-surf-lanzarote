<?php
function urlPath() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"];
	}
	return $pageURL;
}
$locale = $_GET["lang"];
?>
<!DOCTYPE html>
<html lang="<?php echo $locale ?>">
	<head>
		<title>Stand Up Surf - Surf-lanzarote.com</title>
		<?php include '../includes/head.php'; ?>
		<meta name="keywords" content="<?php echo translate('KEYWORDS_stand_up_surf',$locale) ?>"/>
		<meta name="description" content="<?php echo translate('DESCRIPTION_stand_up_surf',$locale) ?>"/>
	</head>

	<body id="surf" >

		<div class="container zone1">

			<div class="row" id="row1">
				<div class="span12">
					<h1 class="color1">Stand Up Surf - Surf-lanzarote.com</h1>
					<?php include('../includes/localeHandler.php') ?>
					<div class="bottom-border bcolor3"></div>
				</div>
			</div>

			<?php include('../includes/hero.php'); ?>
			
			<!-- We offer -->
			<div class="row" id="row3">
				<div class="span10 offset1" id="weOffer">

					<h2 class="color3"><?php echo translate('we offer',$locale) ?></h2>
					<div class="bottom-border bcolor3"></div>

					<div class="row">
						<div class="span3 marginTop14">
							<?php include("../includes/menu.php"); ?>
						</div>

						<div class="span7 background333333 marginTop14">
							<div class="bordeLateral" id="ajaxContainer1">
								<div class="row">
									<div class="span6 paddingRight20">
										<h3><?php echo translate('SUP_TEXTO_1',$locale) ?></h3>
		                                <?php echo translate('SUP_TEXTO_2',$locale) ?>
		                                <div class="FotoDeApoyo"><img src="/images/stand-up-paddle.jpeg" height="230px" /> </div>
	                               </div>
	                              </div>
							</div>
						</div>
					</div>

				</div>

			</div>

			
			<!-- How This Works / Price -->
			<?php include '../includes/howThisWorks.php'; ?>
			
			<!-- Contacta -->

			<?php include '../includes/contactUs.php'; ?>
			
			<!-- footer -->
			<?php include '../includes/footer.php'; ?>
		</div>

	</body>
</html>
