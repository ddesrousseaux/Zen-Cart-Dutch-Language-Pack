<?php
/**
* @package admin
* @copyright Copyright 2003-2013 Zen Cart Development Team
* @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
* @version $Id: dutch translation voor zen cart 1.6.x
* @version $Id$
*/


// look in your $PATH_LOCALE/locale directory for available locales..
// recommended to list all values for your language in this array. And include at least the 3 versions: 'en_US', 'en_US.utf8', 'en'. These help support multiple server configurations (since IIS and Windows are less reliably configured)
$locales = array('nl_NL', 'nl_NL.utf8', 'nl_NL@euro','Dutch');

// For the most part, LC_TIME is fine here. On rare occasions you might need to change this to LC_ALL.
setlocale(LC_TIME, $locales);

define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('ADMIN_NAV_DATE_TIME_FORMAT', '%A %d %b %Y %X'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_DATEPICKER_ADMIN', zen_date_datepicker(DATE_FORMAT));  //Use only 'dd', 'mm' and 'yy' here in any order

////
// Return date in raw format - DEPRECATED
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
// Onderstaand is Nederlandse notatie voor geboortedata 
function zen_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}
function zen_date_datepicker($format)
{
  $date = preg_replace('/[ds]/', 'dd', $format);
  $date = preg_replace('/[mn]/', 'mm', $date);
  $date = preg_replace('/[yY]/', 'yy', $date);
  return $date;
}

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="nl"');

// charset (tekenset) voor de webpagina's en e-mail
define('CHARSET', 'utf-8');

// text voor de geboortedatum (voorbeeld)
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

define('_JANUARY', 'januari');
define('_FEBRUARY', 'februari');
define('_MARCH', 'maart');
define('_APRIL', 'april');
define('_MAY', 'mei');
define('_JUNE', 'juni');
define('_JULY', 'juli');
define('_AUGUST', 'augustus');
define('_SEPTEMBER', 'september');
define('_OCTOBER', 'oktober');
define('_NOVEMBER', 'november');
define('_DECEMBER', 'december');

// eenheid voor gewicht
define('TEXT_PRODUCT_WEIGHT_UNIT','kg');