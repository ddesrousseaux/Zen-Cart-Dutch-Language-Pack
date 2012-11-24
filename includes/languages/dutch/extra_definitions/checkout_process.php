<?php
//
// @version $Id: dutch translation voor zen cart 1.6.x
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: checkout_process.php 1969 2005-09-13 06:57:21Z drbyte $ Integrated COWOA v2.2 - 2007 - 2012
//

define('EMAIL_TEXT_SUBJECT', 'Orderbevestiging');
define('EMAIL_TEXT_HEADER', 'Orderbevestiging');
define('EMAIL_TEXT_FROM',' van ');  //added to the EMAIL_TEXT_HEADER, above on text-only emails
define('EMAIL_THANKS_FOR_SHOPPING','Bedankt voor uw bestelling!');
define('EMAIL_DETAILS_FOLLOW','Hier volgen de details van uw bestelling.');
define('EMAIL_TEXT_ORDER_NUMBER', 'Ordernummer:');

//IF COWOA ACCOUNT CHANGE TO ORDER STATUS
if($_SESSION['COWOA']) $COWOA=TRUE;
if($COWOA)
define('EMAIL_TEXT_INVOICE_URL', 'Check orderstatus:');
else
define('EMAIL_TEXT_INVOICE_URL', 'Gedetaileerde facuur:');
if($COWOA)
define('EMAIL_TEXT_INVOICE_URL_CLICK', 'Klik hier om de status van uw bestelling te controleren');
else
define('EMAIL_TEXT_INVOICE_URL_CLICK', 'Klik hier voor een gedetaileerde factuur');
// END IF COWOA ACCOUNT

define('EMAIL_TEXT_DATE_ORDERED', 'Besteldatum:');
define('EMAIL_TEXT_PRODUCTS', 'Artikelen');
define('EMAIL_TEXT_SUBTOTAL', 'Subtotaal:');
define('EMAIL_TEXT_TAX', 'Btw:        ');
define('EMAIL_TEXT_SHIPPING', 'Verzendkosten: ');
define('EMAIL_TEXT_TOTAL', 'Totaal:    ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Afleveradres');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Factuuadres');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Betaalwijze');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', 'via');

// suggest not using # vs No as some spamm protection block emails with these subjects
define('EMAIL_ORDER_NUMBER_SUBJECT', ' Nr: ');
define('HEADING_ADDRESS_INFORMATION','Adresinformatie');
define('HEADING_SHIPPING_METHOD','Verzendmethode');
// eof