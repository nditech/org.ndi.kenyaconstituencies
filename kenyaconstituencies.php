<?php

/**
 * Return a list of all the counties
 */

function kenyaconstituencies_listcounties() {
  $countryIso = 'NG';
  $counties = array(
    'Baringo' => array(
      'Baringo Central',
      'Baringo North',
      'Baringo South',
      'Eldama Ravine',
      'Mogotio',
      'Tiaty',
    ),
    'Bomet' => array(
      'Bomet Central',
      'Bomet East',
      'Chepalungu',
      'Konoin',
      'Sotik',
    ),  
    'Bungoma' => array(
      'Bumula',
      'Kabuchai',
      'Kanduyi',
      'Kimilili',
      'Mt. Elgon',
      'Sirisia',
      'Tongaren',
      'Webuye East',
      'Webuye West',
    ),  
    'Busia' => array(
      'Budalangi',
      'Butula',
      'Funyula',
      'Matayos',
      'Nambale',
      'Teso North',
      'Teso South',
    ),
    'Elgeyo Marakwet' => array(
      'Keiyo North',
      'Keiyo South',
      'Mawakwet East',
      'Marakwet West',
    ),  
    'Embu' => array(
      'Manyatta',
      'Mbeere North',
      'Mbeere South',
      'Runyenjes',
    ),  
    'Garissa' => array(
      'Balambala',
      'Dadaab',
      'Fafi',
      'Ijara',
      'Lagdera',
      'Garissa Township',
    ),  
    'Homa Bay' => array(
      'Homa Bay Town',
      'Kabondo Kasipul',
      'Karachuonyo',
      'Kasipul',
      'Mbita',
      'Ndhiwa',
      'Rangwe',
      'Suba',
    ),  
    'Isiolo' => array(
      'Isiolo North',
      'Isiolo South',
    ),  
    'Kajiado' => array(
    ),  
    'Kakamega' => array(
    ),  
    'Kericho' => array(
    ),  
    'Kiambu' => array(
    ),  
    'Kilifi' => array(
    ),  
    'Kirinyaga' => array(
    ),  
    'Kisii' => array(
    ),  
    'Kisumu' => array(
    ),  
    'Kitui' => array(
    ),  
    'Kwale' => array(
    ),  
    'Laikipia' => array(
    ),  
    'Lamu' => array(
    ),  
    'Machakos' => array(
    ),  
    'Makueni' => array(
    ),  
    'Mandera' => array(
    ),  
    'Marsabit' => array(
    ),  
    'Meru' => array(
    ),  
    'Migori' => array(
    ),  
    'Mombasa' => array(
    ),  
    "Murang'a" => array(
    ),
    'Nairobi' => array(
    ),  
    'Nakuru' => array(
    ),  
    'Nandi' => array(
    ),  
    'Narok' => array(
    ),  
    'Nyamira' => array(
    ),  
    'Nyandarua' => array(
    ),  
    'Nyeri' => array(
    ),  
    'Samburu' => array(
    ),  
    'Siaya' => array(
    ),  
    'Taita-Taveta' => array(
    ),  
    'Tana River' => array(
    ),  
    'Tharaka Nithi' => array(
    ),  
    'Trans-Nzoia' => array(
    ),  
    'Turkana' => array(
    ),  
    'Uasin Gishu' => array(
    ),  
    'Vihiga' => array(
    ),  
    'Wajir' => array(
    ),  
    'West Pokot' => array( 
    ),  
  );

  return array($countryIso => $counties);
}

/**
 * Check and load counties
 */

function kenyaconstituencies_loadcounties() {

  $allCounties = kenyaconstituencies_listcounties();

  foreach ($allCounties as $countryIso => $counties) {
    static $dao = NULL;
    if (!$dao) {
      $dao = new CRM_Core_DAO();
    }

    // Get array of states.
    try {
      $result = civicrm_api3('Country', 'getsingle', array(
        'iso_code' => $countryIso,
        'api.Address.getoptions' => array(
          'field' => 'state_province_id',
          'country_id' => '$value.id',
          'sequential' => 0,
        ),
      ));
    }
    catch (CiviCRM_API3_Exception $e) {
      $error = $e->getMessage();
      CRM_Core_Error::debug_log_message(ts('API Error: %1', array(
        'domain' => 'org.ndi.kenyaconstituencies',
        1 => $error,
      )));
      return FALSE;
    }

    if (empty($result['api.Address.getoptions']['values'])) {
      return FALSE;
    }
    $states = $result['api.Address.getoptions']['values'];

    // go state-by-state to check existing counties

    foreach ($counties as $stateName => $state) {
      $id = array_search($stateName, $states);
      if ($id === FALSE) {
        continue;
      }

      $check = "SELECT name FROM civicrm_county WHERE state_province_id = $id";
      $results = CRM_Core_DAO::executeQuery($check);
      $existing = array();
      while ($results->fetch()) {
        $existing[] = $results->name;
      }

      // identify counties needing to be loaded
      $add = array_diff($state, $existing);

      $insert = array();
      foreach ($add as $county) {
        $countye = $dao->escape($county);
        $insert[] = "('$countye', $id)";
      }

      // put it into queries of 50 counties each
      for($i = 0; $i < count($insert); $i = $i+50) {
        $inserts = array_slice($insert, $i, 50);
        $query = "INSERT INTO civicrm_county (name, state_province_id) VALUES ";
        $query .= implode(', ', $inserts);
        CRM_Core_DAO::executeQuery($query);
      }
    }
  }

  return TRUE;
}

/**
 * Implementation of hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function kenyaconstituencies_civicrm_install() {
  kenyaconstituencies_loadcounties();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function kenyaconstituencies_civicrm_enable() {
  kenyaconstituencies_loadcounties();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function kenyaconstituencies_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  kenyaconstituencies_loadcounties();
}
