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
		<title>Surf-lanzarote.com</title>
		<?php include 'includes/head.php'; ?>
		<meta name="keywords" content="<?php echo translate('KEYWORDS_a_great_house',$locale) ?>"/>
		<meta name="description" content="<?php echo translate('DESCRIPTION_a_great_house',$locale) ?>"/>
	</head>

	<body id="surf" >

		<div itemscope itemtype="http://schema.org/LodgingBusiness" class="container zone1">

			<div class="row" id="row1">
				<div class="span12">
					<h1 class="color1"><a href="/">Surf-Lanzarote.com</a></h1>
					<?php include('includes/localeHandler.php') ?>
					<div class="bottom-border bcolor3"></div>
				</div>
			</div>

			<?php include('includes/hero.php'); ?>

			<!-- We offer -->
			<div class="row" id="row3">
				<div class="span10 offset1" id="weOffer">
					<h2 class="color3"><?php echo translate('we offer',$locale) ?></h2>
					<div class="bottom-border bcolor3 marginTop15"></div>

					<div class="row">
						<div class="span3 marginTop14">
							<?php include("includes/menu.php"); ?>
						</div>

						<div class="span7 background333333 marginTop14">
							<div class="bordeLateral" id="ajaxContainer1">

								<div class="row">
									<div class="span6">
                                    	<h3><?php echo translate('Rent a great house on a great island',$locale) ?></h3>
										<p>
											<?php echo translate('We have <b>3 double rooms</b>, one of them has also a sofa-bed for two, so there is room for up <b>8 persons</b>.',$locale) ?>
										</p>
										<p class="marginTop10"><b><?php echo translate('The 3 rooms share',$locale) ?></b>:</p>
										<ul>
											<li>
												<?php echo translate('a great kitchen',$locale) ?>												
											</li>
											<li>
												<?php echo translate('livingroom with tv',$locale) ?>												
											</li>
											<li>
												<?php echo translate('patio with pool and barbecue (niiice)',$locale) ?>												
											</li>
											
										</ul>
									</div>
								</div>

								<div class="emptyRow"></div>

								<p>
									<?php echo translate('Check out the photos and the video:',$locale) ?>									
								</p>
								
								<div id="fotos">
									
									<a data-fancybox-group="gallery1" href="http://surf-lanzarote.com/images/bigPictures/big1.jpg" class="imageTrigger miniaturas-esquina imageTrigger1">&nbsp;</a>
									<a data-fancybox-group="gallery1" href="http://surf-lanzarote.com/images/bigPictures/big2.jpg" class="imageTrigger imageTrigger2">&nbsp;</a>
									<a data-fancybox-group="gallery1" href="http://vimeo.com/41193126" class="imageTrigger imageTrigger3 fancybox.iframe">&nbsp;</a>
									<a data-fancybox-group="gallery1" href="http://surf-lanzarote.com/images/bigPictures/big4.jpg" class="imageTrigger imageTrigger4">&nbsp;</a>
									<a data-fancybox-group="gallery1" href="http://surf-lanzarote.com/images/bigPictures/big5.jpg" class="imageTrigger imageTrigger5 miniaturas-esquina">&nbsp;</a>
									<a data-fancybox-group="gallery1" href="http://surf-lanzarote.com/images/bigPictures/big6.jpg" class="imageTrigger imageTrigger6">&nbsp;</a>
									<a data-fancybox-group="gallery1" href="http://surf-lanzarote.com/images/bigPictures/big7.jpg" class="imageTrigger imageTrigger7">&nbsp;</a>
									<a data-fancybox-group="gallery1" href="http://surf-lanzarote.com/images/bigPictures/big8.jpg" class="imageTrigger imageTrigger8">&nbsp;</a>
									<a data-fancybox-group="gallery1" href="http://surf-lanzarote.com/images/bigPictures/big9.jpg" class="imageTrigger imageTrigger9 miniaturas-esquina">&nbsp;</a>
									<a data-fancybox-group="gallery1" href="http://surf-lanzarote.com/images/bigPictures/big10.jpg" class="imageTrigger imageTrigger10">&nbsp;</a>
									<a data-fancybox-group="gallery1" href="http://surf-lanzarote.com/images/bigPictures/big11.jpg" class="imageTrigger imageTrigger11">&nbsp;</a>
									<a data-fancybox-group="gallery1" href="http://surf-lanzarote.com/images/bigPictures/big12.jpg" class="imageTrigger imageTrigger12">&nbsp;</a>
									
								</div>
								<div class="emptyRow20"></div>
							</div>
						</div>
					</div>

				</div>

			</div>

			<!-- How This Works / Price -->
			<?php include 'includes/howThisWorks.php'; ?>

			<!-- Contacta -->

			<?php include 'includes/contactUs.php'; ?>

			<!-- footer -->
			<?php include 'includes/footer.php'; ?>
		</div>

	</body>
</html>
