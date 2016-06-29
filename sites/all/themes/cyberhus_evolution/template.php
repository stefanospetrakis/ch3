<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Cyberhus Evolution theme.
 */


/**
* Remove add forum topic link from forum pages
* @param Array $variables
*/
function cyberhus_evolution_menu_local_action($variables) {
  $link = $variables['element']['#link'];
  // Remove add new forum topic from /forum page
  if (arg(0) == 'forum' &&  substr($link['href'], 0, 14) == 'node/add/forum') {
    $output = null;
  }
  else {
    $output = '<li>';
    if (isset($link['href'])) {
      $output .= l($link['title'], $link['href'], isset($link['localized_options']) ? $link['localized_options'] : array());
    }
    elseif (!empty($link['localized_options']['html'])) {
      $output .= $link['title'];
    }
    else {
      $output .= check_plain($link['title']);
    }
    $output .= "</li>\n";
  }

  return $output;
}