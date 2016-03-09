<?php
/**
 * @file
 * Contains \Drupal\example\Controller\ExampleController.
 */

namespace Drupal\meetup\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class MeetupController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function demoPage() {
    $element = array(
      '#markup' => 'Hello, Meetup',
    );
    return $element;
  }

}
