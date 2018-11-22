<?php

namespace Drupal\custom_jouve\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines JouveController class.
 */
class JouveController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hi Jouve'),
    ];
  }
}