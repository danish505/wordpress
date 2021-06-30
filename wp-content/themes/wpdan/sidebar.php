<?php
	if(!is_active_sidebar('main-sidebar')){
		return;
	}

 ?>

<aside class="widget-area" id="secondary">
	<?php  dynamic_sidebar('main-sidebar'); ?>
</aside>