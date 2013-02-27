<?php

/**
 * @file
 * Display Suite 1 column template.
 * Modifed by Wickwood Marketing to present
 * User Profiles using the DS 1 column template.
 */
?>


<div class="art-post art-article profile"<?php print $attributes; ?>>
	<<?php print $ds_content_wrapper; print $layout_attributes; ?> class="ds-1col <?php print $classes;?> clearfix">
	<?php 
  print '<p>ds_content_wrapper</p>';
  print_r($ds_content_wrapper); 
  	print '<pre>';
  print '</pre>';
	dsm($ds_content_wrapper);
	dsm($layout_attributes);
	dsm($classes);
	dsm($ds_content);
	dsm($drupal_render_children);
	?>
	
	<div class="art-postmetadataheader">
		<?php echo art_node_title_output($title, $node_url, $page); ?>
  </div>

		<?php if (isset($title_suffix['contextual_links'])): ?>
		<?php print render($title_suffix['contextual_links']); ?>
		<?php endif; ?>

		<?php print $ds_content; ?>
	</<?php print $ds_content_wrapper ?>>

	<?php if (!empty($drupal_render_children)): ?>
		<?php print $drupal_render_children ?>
	<?php endif; ?>
</div>