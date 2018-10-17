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
      'Kajiado Central',
      'Kajiado East',
      'Kajiado North',
      'Kajiado South',
      'Kajiado West',
    ),  
    'Kakamega' => array(
      'Butere',
      'Ikolomani',
      'Khwisero',
      'Likuyani',
      'Lugari',
      'Lurambi',
      'Malava',
      'Matungu',
      'Mumias East',
      'Mumias West',
      'Navakholo',
      'Shinyalu',
    ),  
    'Kericho' => array(
      'Ainamoi',
      'Belgut',
      'Bureti',
      'Kipkelion East',
      'Kipkelion West',
      'Sigowet/Soin',
    ),  
    'Kiambu' => array(
      'Gatundu North',
      'Gatundu South',
      'Githunguri',
      'Juja',
      'Kabete',
      'Kiambaa',
      'Kiambu',
      'Kikuyu',
      'Lari',
      'Limuru',
      'Ruiru',
      'Thika Town',
    ),  
    'Kilifi' => array(
      'Ganze',
      'Kaloleni',
      'Kilifi North',
      'Kilifi South',
      'Malindi',
      'Magarini',
      'Rabai',
    ),  
    'Kirinyaga' => array(
      'Gichugu',
      'Kirinyaga Central',
      'Mwea',
      'Ndia',
    ),  
    'Kisii' => array(
      'Bobasi',
      'Bomachoge Borabu',
      'Bomachoge Chache',
      'Bonchari',
      'Kitutu Chache North',
      'Kitutu Chache South',
      'Nyaribari Chache',
      'Nyaribari Masaba',
      'South Mugirango',
    ),  
    'Kisumu' => array(
      'Kisumu Central',
      'Kisumu East',
      'Kisumu West',
      'Muhoroni',
      'Nyakach',
      'Nyando',
      'Seme',
    ),  
    'Kitui' => array(
      'Kitui Central',
      'Kitui East',
      'Kitui Rural',
      'Kitui South',
      'Kitui West',
      'Mwingi Central',
      'Mwingi North',
      'Mwingi West',
    ),  
    'Kwale' => array(
      'Kinango',
      'Lunga Lunga',
      'Matuga',
      'Msambweni',
    ),  
    'Laikipia' => array(
      'Laikipia East',
      'Laikipia North',
      'Laikipia West',
    ),  
    'Lamu' => array(
      'Lamu East',
      'Lamu West',
    ),  
    'Machakos' => array(
      'Kangundo',
      'Kathiani',
      'Machakos Town',
      'Masinga',
      'Matungulu',
      'Mavoko',
      'Mwala',
      'Yatta',
    ),  
    'Makueni' => array(
      'Kaiti',
      'Kibwezi East',
      'Kibwezi West',
      'Kilome',
      'Makueni',
      'Mbooni',
    ),  
    'Mandera' => array(
      'Banissa',
      'Lafey',
      'Mandera East',
      'Mandera North',
      'Mandera South',
      'Mandera West',
    ),  
    'Marsabit' => array(
      'Laisamis',
      'Moyale',
      'North Horr',
      'Saku',
    ),  
    'Meru' => array(
      'Buuri',
      'Igembe Central',
      'Igembe North',
      'Igembe South',
      'Central Imenti',
      'North Imenti',
      'South Imenti',
      'Tigania East ',
      'Tigania West',
    ),  
    'Migori' => array(
      'Awendo',
      'Kuria East',
      'Kuria West',
      'Nyatike',
      'Rongo',
      'Suna East ',
      'Suna West',
      'Uriri ',
    ),  
    'Mombasa' => array(
      'Changamwe',
      'Jomvu',
      'Kisauni',
      'Likoni',
      'Mvita',
      'Nyali',
    ),  
    "Murang'a" => array(
      'Gatanga',
      'Kandara',
      'Kangema',
      'Kigumo',
      'Kiharu',
      'Maragua',
      'Mathioya',
    ),
    'Nairobi' => array(
      'Dagoretti North',
      'Dagoretti South',
      'Embakasi Central',
      'Embakasi East',
      'Embakasi North',
      'Embakasi South',
      'Embakasi West',
      'Kamukunji',
      'Kasarani',
      'Kibra',
      'Langata',
      'Makadara',
      'Mathare',
      'Roysambu',
      'Ruaraka',
      'Starehe',
      'Westlands',
    ),  
    'Nakuru' => array(
      'Bahati',
      'Gilgil',
      'Kuresoi North',
      'Kuresoi South',
      'Molo',
      'Naivasha',
      'Nakuru Town East',
      'Nakuru Town West',
      'Njoro',
      'Rongai ',
      'Subukia',
    ),  
    'Nandi' => array(
      'Aldai',
      'Chesumei',
      'Emgwen',
      'Mosop',
      'Nandi Hills',
      'Tinderet',
    ),  
    'Narok' => array(
      'Emurua Dikirr',
      'Kilgoris',
      'Narok East',
      'Narok North',
      'Narok South',
      'Narok West',
    ),  
    'Nyamira' => array(
      'Borabu',
      'Kitutu Masaba',
      'North Mugirango',
      'West Mugirango',
    ),  
    'Nyandarua' => array(
      'Kinangop',
      'Kipipiri',
      'Ndaragwa',
      'Ol Jorok',
      'Ol Kalou',
    ),  
    'Nyeri' => array(
      'Kieni',
      'Mathira',
      'Mukurweini',
      'Nyeri Town',
      'Othaya',
      'Tetu',
    ),  
    'Samburu' => array(
      'Samburu East',
      'Samburu North',
      'Samburu West',
    ),  
    'Siaya' => array(
      'Alego Usonga',
      'Bondo',
      'Gem ',
      'Rarieda',
      'Ugenya ',
      'Ugunja',
    ),  
    'Taita-Taveta' => array(
      'Mwatate',
      'Taveta ',
      'Voi',
      'Wundanyi',
    ),  
    'Tana River' => array(
      'Bura',
      'Galole ',
      'Garsen',
    ),  
    'Tharaka Nithi' => array(
      "Chuka/Iganmbang'ombe",
      'Maara',
      'Tharaka',
    ),  
    'Trans-Nzoia' => array(
      'Cherangany',
      'Endebess',
      'Kiminini',
      'Kwanza',
      'Saboti',
    ),  
    'Turkana' => array(
      'Loima',
      'Turkana Central',
      'Turkana East',
      'Turkana North',
      'Turkana South',
      'Turkana West',
    ),  
    'Uasin Gishu' => array(
      'Ainabkoi',
      'Kapseret',
      'Kesess',
      'Moiben',
      'Soy',
      'Turbo',
    ),  
    'Vihiga' => array(
      'Emuhaya',
      'Hamisi',
      'Luanda ',
      'Sabatia',
      'Vihiga',
    ),  
    'Wajir' => array(
      'Eldas',
      'Tarbaj',
      'Wajir East',
      'Wajir North',
      'Wajir South',
      'Wajir West',
    ),  
    'West Pokot' => array(
      'Kacheliba',
      'Kapenguria',
      'Pokot South',
      'Sigor',
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
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function kenyaconstituencies_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _kenyaconstituencies_civix_civicrm_upgrade($op, $queue);
}
