<?php

/**
 * @file
 * Display Suite Custom 2 Col configuration.
 */

function ds_custom_three_col() {
  return array(
    'label' => t('Custom 3 Col'),
    'regions' => array(
      'one' => t('one'),
      'two' => t('two'),
      'three' => t('three'),
    ),
    // Uncomment if you want to include a CSS file for this layout (custom_2_col.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (custom_2_col.png)
    // 'image' => TRUE,
  );
}
