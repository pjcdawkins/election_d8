<?php

/**
 * @file
 * Contains \Drupal\election\ElectionController.
 */
namespace Drupal\election;

use Drupal\Core\Controller\ControllerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller for core Election routes.
 */
class ElectionController implements ControllerInterface {

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static();
  }

  /**
   * Content for the path '/elections'.
   */
  public function overviewList(Request $request) {
    drupal_set_title(t('Elections'), PASS_THROUGH);
    return 'Hello, world!<br />This will be a list of elections.';
  }

}
