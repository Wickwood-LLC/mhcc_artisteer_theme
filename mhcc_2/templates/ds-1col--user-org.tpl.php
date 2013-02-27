<?php

/**
 * @file
 * Display Suite 1 column template.
 * Modified by Wickwood Marketing to integrate with the templates
 * created by Artisteer for the MHCC2 template.
 */

// Add Artisteer Template variables.
$vars = get_defined_vars();
$view = get_artx_drupal_view();
$message = $view->get_incorrect_version_message();
if (!empty($message)) {
	print $message;
	die();
}
$is_blog_page = isset($node->body['und'][0]['summary']) && ($node->body['und'][0]['summary'] == 'ART_BLOG_PAGE') ? true : false;
?>
<<?php print $ds_content_wrapper; print $layout_attributes; ?> id="node-<?php print $node->nid; ?>" class="ds-1col <?php print $classes;?> <?php print $attributes; ?> clearfix">

<?php if (!$is_blog_page): ?>
<article class="art-post art-article">
	<div class="art-postmetadataheader">
<?php print render($title_prefix); ?>
<?php echo art_node_title_output($title, $node_url, $page); ?>
<?php print render($title_suffix); ?>
	</div>
<?php if ($submitted): ?>
	<div class="art-postheadericons art-metadata-icons">
<?php echo art_submitted_worker($date, $name); ?>
	</div>
<?php endif; ?>
	<div class="art-postcontent art-postcontent-0 clearfix">
		<div class="art-article">
<?php endif; ?>
<?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    $terms = get_terms_D7($content);
    hide($content[$terms['#field_name']]);
    print $user_picture;
  ?>
  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php print $ds_content; ?>
</<?php print $ds_content_wrapper ?>>
<?php if (!$is_blog_page): ?>
		</div>
	</div>
<?php $access_links = true;
if (isset($content['links']['#access'])) {
$access_links = $content['links']['#access'];
}
if ($access_links && (isset($content['links']) || isset($content['comments']))):
$output = art_links_woker_D7($content);
if (!empty($output)):	?>
	<div class="art-postfootericons art-metadata-icons">
<?php echo $output; ?>
	</div>
<?php endif; endif; ?>
<?php print render($content['comments']); ?>
</article>
<?php endif; ?>
</div>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>

 


