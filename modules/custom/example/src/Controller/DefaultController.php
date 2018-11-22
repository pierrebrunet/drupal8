<?php

namespace Drupal\example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Getconfig.
   *
   * @return string
   *   Return Hello string.
   */
  public function getConfig() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: getConfig')
    ];
  }
  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: hello with parameter(s): $name'),
    ];
  }

}
