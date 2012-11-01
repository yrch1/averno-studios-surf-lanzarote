		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="<?php echo urlPath() ?>/css/bootstrap.css" rel="stylesheet">
		<!-- <link href="<?php echo urlPath() ?>/css/bootstrap-responsive.css" rel="stylesheet"> -->

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="<?php echo urlPath() ?>/assets/ico/favicon.ico">

		<!--<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>-->


		<link rel="stylesheet" href="<?php echo urlPath() ?>/css/custom.css" type="text/css" />
		
		
		<link href='http://fonts.googleapis.com/css?family=Lobster+Two:700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap.js"></script>
		
		<!--
		<script src="<?php echo urlPath() ?>/js/jquery.fancybox-1.3.4.js"></script>
		<link rel="stylesheet" href="<?php echo urlPath() ?>/css/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
		-->
		
	<script type="text/javascript" src="<?php echo urlPath() ?>/fancyBox/jquery.fancybox.js?v=2.0.6"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo urlPath() ?>/fancyBox/jquery.fancybox.css?v=2.0.6" media="screen" />
	


<link rel="stylesheet" href="<?php echo urlPath() ?>/fancyBox/helpers/jquery.fancybox-buttons.css?v=1.0.2" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo urlPath() ?>/fancyBox/helpers/jquery.fancybox-buttons.js?v=1.0.2"></script>
<script type="text/javascript" src="<?php echo urlPath() ?>/fancyBox/helpers/jquery.fancybox-media.js?v=1.0.0"></script>

<link rel="stylesheet" href="<?php echo urlPath() ?>/fancyBox/helpers/jquery.fancybox-thumbs.css?v=2.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo urlPath() ?>/fancyBox/helpers/jquery.fancybox-thumbs.js?v=2.0.6"></script>


<style>
	
	
.fancybox-nav {
    width: 60px;       
}

.fancybox-nav span {
    visibility: visible;
}

.fancybox-next {
    right: -60px;
}

.fancybox-prev {
    left: -60px;
}
</style>



<?php
define("APPLICATION_PATH",  '/homepages/10/d396574542/htdocs');
function translate($phrase, $lang) {
 
    $translation = null;
 	$langLocal = "en";
 	if ($lang != null && strlen($lang)>0){
 		$langLocal = $lang;
 		
 	}
 
    require(APPLICATION_PATH . '/i18n/'.$langLocal.'/messages.php'); 
 
    $translation = $dicc[$phrase];
 
    return utf8_encode($translation);
 
}


?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27986111-1']);
  _gaq.push(['_setDomainName', 'surf-lanzarote.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>