
<?php if ($locale == 'en'): ?>
					<p class="color7 textCenter">
						we speak <a href="/es/"  class="tooltip_idioma color7" title="de toda la vida">español</a>, <a href="/de/" class="tooltip_idioma color7" title="Demnächst&hellip;">deutsch</a> and <b class="color8">english</b>
					</p>
<?php endif ?>

<?php if ($locale == 'de'): ?>
					<p class="color7 textCenter">
						we speak <a href="/es/"  class="tooltip_idioma color7" title="de toda la vida">español</a>, <b class="color8">deutsch</b> and <a href="/en/" class="tooltip_idioma color7" title="Yeah!">english</a>
					</p>
<?php endif ?>

<?php if ($locale == 'es'): ?>
					<p class="color7 textCenter">
						we speak <b class="color8">español</b>, <a href="/de/" class="tooltip_idioma color7" title="Demnächst&hellip;" >deutsch</a> and <a href="/en/" class="tooltip_idioma color7" title="Yeah!" >english</a>
					</p>
<?php endif ?>
<script> 
jQuery(function ()  
{
	
	jQuery(".tooltip_idioma").tooltip({placement:'bottom', delay: { show: 300, hide: 100 }});
}); 
</script>

