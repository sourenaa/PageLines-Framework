<?php 
/*
	
	FOOTER
	
	This file controls the ending HTML </body></html> and common graphical elements in your site footer.
	You can control what shows up where using WordPress and PageLines PHP conditionals
	
	This theme copyright (C) 2008-2010 PageLines
	
*/

pagelines_integration_bottom(); ?>
</div> <!-- END #dynamic-content -->

<div id="morefoot_area"><?php pagelines_template_area('pagelines_morefoot', 'morefoot'); // Hook ?></div>
<div class="clear"></div>
				
</div> <!-- END #page-main from header -->
</div> <!-- END #page-canvas from header -->
</div> <!-- END #page from header -->

<footer id="footer">
	<div class="outline fix"><?php 
		pagelines_template_area('pagelines_footer', 'footer'); // Hook 
		pagelines_register_hook('pagelines_after_footer'); // Hook
		pagelines_cred(); 
	?></div>
</footer>
</div>
<?php 
	print_pagelines_option('footerscripts'); // Load footer scripts option 	
	wp_footer(); // Hook (WordPress) 
?>
</body>
</html>