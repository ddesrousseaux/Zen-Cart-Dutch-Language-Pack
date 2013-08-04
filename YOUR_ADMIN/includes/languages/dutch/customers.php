<?php
/**
 * @package admin
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: dutch translation voor zen cart 1.6.x
 * @version $Id: customers.php 6352 2007-05-20 21:05:01Z drbyte $
 */

define('HEADING_TITLE', 'Klanten');

define('TABLE_HEADING_ID', 'Klant ID');
define('TABLE_HEADING_FIRSTNAME', 'Voornaam');
define('TABLE_HEADING_LASTNAME', 'Achternaam');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Account toegevoegd');
define('TABLE_HEADING_LOGIN', 'Laatste inlogdatum');
define('TABLE_HEADING_ACTION', 'Actie');
define('TABLE_HEADING_PRICING_GROUP', 'Prijsgroep');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Status klant');
define('TABLE_HEADING_GV_AMOUNT', 'Waardebon saldo');

define('TEXT_DATE_ACCOUNT_CREATED', 'Account toegevoegd:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Datum laatste wijziging:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Laatste keer aangemeld:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Aantal keer aangemeld:');
define('TEXT_INFO_COUNTRY', 'Land:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Aantal recensie(s):');
define('TEXT_DELETE_INTRO', 'Weet je zeker dat je deze klant wilt verwijderen?');
define('TEXT_DELETE_REVIEWS', 'Verwijder %s recensie(s)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Verwijder klant');
define('TYPE_BELOW', 'Type hieronder');
define('PLEASE_SELECT', 'Selecteer één');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Aantal bestellingen:');
define('TEXT_INFO_LAST_ORDER','Laatste bestelling:');
define('TEXT_INFO_ORDERS_TOTAL', 'Totaal:');
define('CUSTOMERS_REFERRAL', 'Klantreferentie<br />1e Kortingsbon');
define('TEXT_INFO_GV_AMOUNT', 'Waardebon saldo');

define('ENTRY_NONE', 'Geen');

define('TABLE_HEADING_COMPANY','Bedrijf');

define('TEXT_INFO_HEADING_RESET_CUSTOMER_PASSWORD', 'Reset Customer Password');
define('TEXT_PWDRESET_INTRO', 'To reset the password for this customer, enter a new password, and confirm it, below. The new password must conform to the normal password rules imposed on customers.');
define('TEXT_CUST_NEW_PASSWORD', 'New Password:');
define('TEXT_CUST_CONFIRM_PASSWORD', 'Confirm Password:');
define('ERROR_PWD_TOO_SHORT', 'Error: password is shorter than the number of characters configured for this store.');
define('SUCCESS_PASSWORD_UPDATED', 'Password updated.');

define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE', 'Your password has been changed by the store administrator. Your new password is: ');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Account password reset');
define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE_FOR_ADMIN', 'You have reset the password for a customer: ' . "\n" . '%s' . "\n\n" . 'Administrator ID: %s');

define('CUSTOMERS_AUTHORIZATION', 'Status toegang klant ');
define('CUSTOMERS_AUTHORIZATION_0', 'Akkoord');
define('CUSTOMERS_AUTHORIZATION_1', 'Lopende goedkeuring - moet goedgekeurd zijn om te surfen');
define('CUSTOMERS_AUTHORIZATION_2', 'Lopende goedkeuring - mag surfen maar geen prijzen zien');
define('CUSTOMERS_AUTHORIZATION_3', 'Lopende goedkeuring - mag surfen, prijzen zien maar niet afrekenen');
define('CUSTOMERS_AUTHORIZATION_4', 'Banned - Niet toegestaan om in te loggen of te winkelen');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Waarschuwing: de klant moet eerst goedgekeurd zijn voordat deze mag surfen in je winkel. De klant heeft de status: lopende goedkeuring, mag niet surfen.');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Waarschuwing: de klant moet eerst goedgekeurd zijn voordat deze de prijzen mag zien. De klant heeft de status: lopende goedkeuring, wel surfen geen prijzen zichtbaar.');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Uw klantstatus is aangepast.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Klantstatus aangepast');

define('ADDRESS_BOOK_TITLE', 'Ingeving Adres Boek');
define('PRIMARY_ADDRESS', '(primaire adres)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>NOOT:</strong></span> Een maximum van %s adres boek ingevingen zijn toegestaan.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 van  ');

// Title of column in customer overview admin page
define('TABLE_HEADING_COWOA', 'Account Type');

// Title of section in customer details admin page
define('COWOA_SECTION_HEADING', 'Account Status');

// Detail output on customer details page 
define('COWOA_STATUS_TRUE', 'Afrekenen zonder een account');
define('COWOA_STATUS_FALSE', 'Voledige account aangemaakt');

