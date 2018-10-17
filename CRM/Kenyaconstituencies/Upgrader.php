<?php

use CRM_Kenyaconstituencies_ExtensionUtil as E;

/**
 * Collection of upgrade steps.
 */
class CRM_Kenyaconstituencies_Upgrader extends CRM_Kenyaconstituencies_Upgrader_Base {

  // By convention, functions that look like "function upgrade_NNNN()" are
  // upgrade tasks. They are executed in order (like Drupal's hook_update_N).

  /**
   * Force a refresh of the counties.
   *
   * @return TRUE on success
   * @throws Exception
   */
  public function upgrade_1013() {
    $this->ctx->log->info('Applying update 1013');
    kenyaconstituencies_loadcounties();
    return TRUE;
  }

}
