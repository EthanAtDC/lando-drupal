<?php

namespace Drupal\test1\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for test1 routes.
 */
class Test1Controller extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
