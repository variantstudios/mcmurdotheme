<?php
/**
 * @file
 * Display Suite Custom 2 Col template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $one: Rendered content for the "col-one" region.
 * - $one_classes: String of classes that can be used to style the "col-one" region.
 *
 * - $two: Rendered content for the "col-two" region.
 * - $two_classes: String of classes that can be used to style the "col-two" region.
 */
?>

<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?>">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  
  <?php if (!empty($one)): ?>
    <<?php print $one_wrapper; ?> class="section-one<?php print $one_classes; ?>">
      <?php print $one; ?>
    </<?php print $one_wrapper; ?>>
<?php endif; ?>

    <<?php print $two_wrapper; ?> class="section-two<?php print $two_classes; ?>">
      <?php print $two; ?>
    </<?php print $two_wrapper; ?>>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
