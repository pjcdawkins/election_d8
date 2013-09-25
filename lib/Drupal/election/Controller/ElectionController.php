<?php

/**
 * @file
 * Contains \Drupal\election\Controller\ElectionController.
 */

namespace Drupal\election\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Election routes.
 */
class ElectionController extends ControllerBase {

  /**
   * Content for the path '/elections'.
   */
  public function overviewList() {
    drupal_set_title(t('Elections'), PASS_THROUGH);
    return 'Hello, world!<br />This will be a list of elections.';
  }

}
