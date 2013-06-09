<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id$
 */

// look in your $PATH_LOCALE/locale directory for available locales..
// recommended to list all values for your language in this array. And include at least the 3 versions: 'en_US', 'en_US.utf8', 'en'. These help support multiple server configurations (since IIS and Windows are less reliably configured)
  $locales = array('nl_NL.UTF-8','nl_NL@euro','nl_NL','Dutch');

// For the most part, LC_TIME is fine here. On rare occasions you might need to change this to LC_ALL.
  @setlocale(LC_TIME, $locales);

  define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // wordt gebruikt voor strftime()
  define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // wordt gebruikt voor strftime()
  define('DATE_FORMAT', 'd/m/Y'); // wordt gebruikt voor date()
  define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

  define('ORDER_EMAIL_DATE_FORMAT', 'd-M-Y h:iA'); // wordt gebruikt voor date() -- see http://www.php.net/manual/en/function.date.php
// Datum in onopgemaakt formaat
// $date moet alsvolgt zijn dd/mm/yyyy
// onopgemaakte datum is YYYYMMDD, of DDMMYYYY
  if (!function_exists('zen_date_raw')) {
    function zen_date_raw($date, $reverse = false) {
      if ($reverse) {
        return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
      } else {
        return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
      }
    }
  }

// als USE_DEFAULT_LANGUAGE_CURRENCY aanstaat gebruik dan de onderstaande valuta i.p.v. de ingestelde standaard valuta.
  define('LANGUAGE_CURRENCY', 'EUR');

// algemene gegevens voor <html> tags
  define('HTML_PARAMS','dir="ltr" lang="nl"');

// karakterset voor webpaginas en e-mails
  define('CHARSET', 'utf-8');

// defineer de tekst bij geboortedatum
  define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

  define('ENTRY_DATE_OF_BIRTH_ERROR', 'U moet uw geboortedatum als volgt invullen: ' . DOB_FORMAT_STRING);
  define('ENTRY_DATE_OF_BIRTH_EXAMPLE', ' (bijv. ' . DOB_FORMAT_STRING . ')');


  define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// Verzenden
  define('TEXT_SHIPPING_WEIGHT','kg');
  define('TEXT_SHIPPING_BOXES', 'colli');

//universele symbolen
  define('TEXT_NUMBER_SYMBOL', 'nr ');

  define('TEXT_FILESIZE_BYTES', ' bytes');
  define('TEXT_FILESIZE_MEGS', ' MB');

// diverse
  define('COLON_SPACER', ':&nbsp;&nbsp;');

