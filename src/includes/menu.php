<?php
	$currentPage = $_SERVER["REQUEST_URI"];
?>						
							<ul id="navigationMenu" class="unstyled menu">
								<li>
									<?php echo translate('staying', $locale)?>
									<ul class="unstyled">
										<li>
											<a href="/<?= $locale ?>/" class="ajaxTrigger">
											<div class="enlace <?php echo ($currentPage == '/en/' || $currentPage == '/es/' || $currentPage == '/de/')? 'selected' : '';?>">
												<div class="innerEnlace"><?php echo translate('a great house', $locale)?></div>
											</div></a>
										</li>
									</ul>
								</li>
								<li class="marginTop35">
									<?php echo translate('teaching', $locale)?>
									<ul class="unstyled">
										<li>
											<a href="/<?= $locale ?>/<?php echo translate('MENU_1_SLUG', $locale)?>/surfing/" class="ajaxTrigger">
											<div class="enlace <?php echo (stripos($currentPage,"surfing"))? 'selected' : '';?>">
												<div class="innerEnlace"><?php echo translate('surfing', $locale)?></div>
											</div></a>
										</li>
										<li>
											<a href="/<?= $locale ?>/<?php echo translate('MENU_1_SLUG', $locale)?>/bodyboard/" class="ajaxTrigger">
											<div class="enlace <?php echo (stripos($currentPage,"bodyboard"))? 'selected' : '';?>">
												<div class="innerEnlace"><?php echo translate('bodyboard', $locale)?></div>
											</div></a>
										</li>
										<li>
											<a href="/<?= $locale ?>/<?php echo translate('MENU_1_SLUG', $locale)?>/longboard/" class="ajaxTrigger">
											<div class="enlace <?php echo (stripos($currentPage,"longboard"))? 'selected' : '';?>">
												<div class="innerEnlace"><?php echo translate('longboard', $locale)?></div>
											</div></a>
										</li>
										<li>
											<a href="/<?= $locale ?>/<?php echo translate('MENU_1_SLUG', $locale)?>/stand_up_surf/" class="ajaxTrigger">
											<div class="enlace <?php echo (stripos($currentPage,"stand_up_surf"))? 'selected' : '';?>">
												<div class="innerEnlace"><?php echo translate('stand up surf', $locale)?></div>
											</div></a>
										</li>
									</ul>
								</li>
								<li class="marginTop35">
									<?php echo translate('adventure', $locale)?>
									<ul class="unstyled">
										<li>
											<a href="#" class="ajaxTrigger">
											<div class="enlace <?php echo (stripos($currentPage,"trekking"))? 'selected' : '';?>">
												<div class="innerEnlace"><?php echo translate('trekking', $locale)?></div>
											</div></a>
										</li>
										<li>
											<a href="#" class="ajaxTrigger">
											<div class="enlace <?php echo (stripos($currentPage,"mountain_bike"))? 'selected' : '';?>">
												<div class="innerEnlace"><?php echo translate('mountain bike', $locale)?></div>
											</div></a>
										</li>
									</ul>
								</li>
								<li class="marginTop35">
									<?php echo translate('and relax', $locale)?>
									<ul class="unstyled">
										<li>
											<a href="/<?= $locale ?>/<?php echo translate('MENU_2_SLUG', $locale)?>/<?php echo translate('MENU_2_A_SLUG', $locale)?>/" class="ajaxTrigger">
											<div class="enlace <?php echo (stripos($currentPage,"winery_visits"))? 'selected' : '';?>">											
												<div class="innerEnlace"><?php echo translate('winery visits', $locale)?></div>
											</div></a>
										</li>
										<li>
											<a href="#" class="ajaxTrigger">
											<div class="enlace <?php echo (stripos($currentPage,"sightseen"))? 'selected' : '';?>">
												<div class="innerEnlace"><?php echo translate('sightseen', $locale)?></div>
											</div></a>
										</li>
									</ul>
								</li>
							</ul>
							
<script type="text/javascript">
		
		(function ($, F) {
    
    // Opening animation - fly from the top
    F.transitions.dropIn = function() {
        var endPos = F._getPosition(true);

        endPos.top = (parseInt(endPos.top, 10) - 200) + 'px';
        endPos.opacity = 0;
        
        F.wrap.css(endPos).show().animate({
            top: '+=200px',
            opacity: 1
        }, {
            duration: F.current.openSpeed,
            complete: F._afterZoomIn
        });
    };

    // Closing animation - fly to the top
    F.transitions.dropOut = function() {
        F.wrap.removeClass('fancybox-opened').animate({
            top: '-=200px',
            opacity: 0
        }, {
            duration: F.current.closeSpeed,
            complete: F._afterZoomOut
        });
    };
    
    // Next gallery item - fly from left side to the center
    F.transitions.slideIn = function() {
        var endPos = F._getPosition(true);

        endPos.left = (parseInt(endPos.left, 10) - 200) + 'px';
        endPos.opacity = 0;
        
        F.wrap.css(endPos).show().animate({
            left: '+=200px',
            opacity: 1
        }, {
            duration: F.current.nextSpeed,
            complete: F._afterZoomIn
        });
    };
    
    // Current gallery item - fly from center to the right
    F.transitions.slideOut = function() {
        F.wrap.removeClass('fancybox-opened').animate({
            left: '+=200px',
            opacity: 0
        }, {
            duration: F.current.prevSpeed,
            complete: function () {
                $(this).trigger('onReset').remove();
            }
        });
    };

}(jQuery, jQuery.fancybox));

			function activarGaleria() {
				/* Apply fancybox to multiple items */

				var fb_opts = {
					openEffect : 'elastic'
					,closeEffect : 'elastic'
					,speedIn  : 0
					,closeSpeed : 200
					,'hideOnContentClick' : true
					,'overlayColor' : '#000'
					,padding : 10
					,nextMethod : 'slideIn'
					,prevMethod : 'slideOut'
					,helpers : {
						media : {}
					}
				};

				jQuery("a.imageTrigger").fancybox(fb_opts);

				//jQuery('#vimeo1Trigger').fancybox(fb_opts);
			}


			jQuery(document).ready(function() {

				activarGaleria();
			});

		</script>
		
<script type="text/javascript">
	jQuery(document).ready(function() {

		jQuery("#navigationMenu .ajaxTrigger").click(function() {
			jQuery('#ajaxContainer1').css('opacity','0.2');
			//jQuery('#ajaxContainer1').parent().prepend('<img id="menuLoadingImg" src="<?php echo urlPath() ?>/images/ajax-loader.gif" alt="loading" />');
			enlace = jQuery(this)[0];

			jQuery("#navigationMenu .selected").removeClass('selected');

			child1 = jQuery("div.enlace", enlace);
			jQuery(child1).addClass("selected");
			href = jQuery(enlace).attr('href');
			jQuery('#ajaxContainer1').load(href + ' #ajaxContainer1 > *', function(response, status, xhr) {
				if (status == "success") {
					_gaq.push(['_trackPageview', href]);
					jQuery('#ajaxContainer1').css('opacity','1');
					jQuery('#menuLoadingImg').remove();
					var reponse = jQuery(xhr.responseText);
					var reponseScript = reponse.filter("script");
      				//jQuery.each(reponseScript, function(idx, val) { eval(val.text); } );
      				
				}
			});
			return false;

		});
		
		jQuery(".scroll").click(function(event){		
			event.preventDefault();
			//jQuery('html,body').animate({scrollTop:jQuery(this.hash).offset().top}, 500);
			var id = this.hash.substring(1);
			var offsetTop = jQuery('[id="'+id+'"]').offset().top;
			if(id == 'weOffer'){
				offsetTop = 700;
			}
			jQuery('html,body').animate({scrollTop:offsetTop}, 500);

		});
	});

</script>

								