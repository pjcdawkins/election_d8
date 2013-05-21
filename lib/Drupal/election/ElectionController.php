<?php

/**
 * @file
 * Contains \Drupal\election\ElectionController.
 */
namespace Drupal\election;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Drupal\Core\ControllerInterface;

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
     return 'Hello, world!<br />This will be a list of elections.';
  }

}
