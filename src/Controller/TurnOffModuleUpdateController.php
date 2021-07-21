<?php

namespace Drupal\turn_off_module_update\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;

class TurnOffModuleUpdateController extends ControllerBase {

  public function getContent() {
    return [
      '#type' => 'markup',
      '#markup' => 'Отключение обновления модулей',
    ];
  }

  public function access(AccountInterface $account) {
    // return AccessResult::allowedIf($account->hasPermission('do example things') && $this->someOtherCustomCondition());
    return AccessResult::allowedIf(TRUE);
  }

}
