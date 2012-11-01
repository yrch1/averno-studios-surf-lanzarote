<div class="row marginTop110" id="row6">
				
				<div class="span10 offset1" id="contactUs">
					<h2 class="color2"><?php echo translate('Contact us',$locale) ?></h2>
					<div class="bottom-border bcolor2"></div>
					<div class="row">
						<div class="span5">
							<div class="row pictograma">
								<div class="span1">
									<img src="<?php echo urlPath() ?>/images/picto1.png" alt="Surf guy" />
								</div>
								<div class="span4">
									<p class="pictoText">
										<?php echo translate('We will get back to you as soon as we can, chances are we\'ll be on the beach :)',$locale) ?>
									</p>
								</div>
							</div>
							<div class="row pictograma">
								<div class="span1">
									<img src="<?php echo urlPath() ?>/images/picto2.png" alt="Facebook follow" />
								</div>
								<div class="span4">
									<p class="pictoText">
										<?php echo translate('We are on <a href="http://www.facebook.com/surf.house.lanzarote" target="_blank">Facebook</a> too if you want to ask or tell us something.',$locale) ?>
									</p>
								</div>
							</div>
							<div class="row pictograma">
								<div class="span1">
									<img src="<?php echo urlPath() ?>/images/picto3.png" alt="Map" />
								</div>
								<div class="span4">
									<p class="pictoText">
										<?php echo translate('Trying to pinpoint us?',$locale) ?> <a href="http://goo.gl/maps/kE6p" target="_blank" class="molon"><?php echo translate('We are here',$locale) ?></a>.
									</p>
								</div>
							</div>
						</div>
						<div class="span5" id="contactaEmailZone">
							<div id="contactaEmailZoneInner">
								<p>
									<?php echo translate('no fancy stuff:<br/>to book, ask or say hi, just send us an email to',$locale) ?>
								</p>
								<div id="emailDiv">
									<img alt="hola" id="emailTrigger" src="<?php echo urlPath() ?>/images/email.png"/>
								</div>
								
								<p>
									<?php echo translate('...please remember to include the <b>dates</b> and <b>what you want</b> to book',$locale) ?>
								</p>
								
							</div>
						</div>
					</div>
					<p class="color4 textCenter marginTop80">
						&hearts;<br/>
						<?php echo translate('the surf lanzarote team',$locale) ?>
					</p>
				</div>
			</div>
			
<script type="text/javascript">
function email(a_id, user, domain,texto){

    var et = String.fromCharCode(64);
    var a = jQuery(a_id);
    var email = user+'<span class="arroba">'+et+'</span>'+domain;
    jQuery('#emailTrigger',a).remove();
    a.append('<div id="emailDivChild">'+email+'</div>');
}

	jQuery(document).ready(function() {
		email("#emailDiv", "hola", "surf-lanzarote.com",'Contact us..');

	});
	
	
</script>