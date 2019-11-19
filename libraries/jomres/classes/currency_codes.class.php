<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.2
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 *
 * @package Jomres\Core\Classes
 *
 */

class currency_codes
{
	public function __construct()
	{
		$this->code = '';
		$this->input_name = '';

		$this->codes = array(
			'AFA' => 'Afghanistan Afghani AFA ', 
			'ALL' => 'Albanian Lek ALL ', 
			'DZD' => 'Algerian Dinar DZD ', 
			'AON' => 'Angolan New Kwanza AON ', 
			'AMD' => 'Armenian Dram ', 
			'ANG' => 'Antillian Guilder (Netherlands) ANG ', 
			'AED' => 'Arab Emirates Dirham (United)  AED ', 
			'ARS' => 'Argentine Peso ARS ', 
			'AWG' => 'Aruban Florin (old guilder) AWG ', 
			'AUD' => 'Australian Dollar AUD ', 
			'AZN' => 'Azerbaijan New Manat AZN ', 
			'BSD' => 'Bahamian Dollar BSD ', 
			'BHD' => 'Bahraini Dinar BHD ', 
			'BDT' => 'Bangladeshi Taka BDT ', 
			'BBD' => 'Barbados Dollar BBD ', 
			'BZD' => 'Belize Dollar BZD ', 
			'XOF' => 'Benin: CFA Franc BCEAO XOF ', 
			'BMD' => 'Bermudian Dollar BMD ', 
			'BTN' => 'Bhutan Ngultrum BTN ', 
			'BOB' => 'Bolivian Boliviano BOB ', 
			'BWP' => 'Botswana Pula BWP ', 
			'BRL' => 'Brazilian Real BRL ', 
			'BND' => 'Brunei Dollar BND ', 
			'BGN' => 'Bulgarian Lev BGN', 
			'BIF' => 'Burundi Franc BIF ', 
			'BTC' => 'Bitcoin', 'KHR' => 
			'Cambodian Riel KHR ', 
			'CAD' => 'Canadian Dollar CAD ', 
			'CVE' => 'Cape Verde Escudo CVE ', 
			'KYD' => 'Cayman Islands Dollar KYD ', 
			'XOF' => 'CFA Franc BCEAO XOF ', 
			'XAF' => 'CFA Franc BEAC XAF ', 
			'CLP' => 'Chilean Peso CLP ', 
			'CNY' => 'Chinese Yuan Renminbi CNY ', 
			'COP' => 'Colombian Peso COP ', 
			'KMF' => 'Comoros Franc KMF ', 
			'XAF' => 'Congo: CFA Franc BEAC XAF ', 
			'CRC' => 'Costa Rican Colon CRC ', 
			'HRK' => 'Croatian Kuna HRK ', 
			'CUC' => 'Cuban Convertible Peso CUC ', 
			'CZK' => 'Czech koruna CZK ', 
			'DKK' => 'Danish Krone DKK ', 
			'DJF' => 'Djibouti Franc DJF ', 
			'DOP' => 'Dominican Peso DOP ', 
			'EGP' => 'Egyption Pound EGP ', 
			'SVC' => 'El Salvador Colon SVC ', 
			'EEK' => 'Estonian Kroon EEK ', 
			'ETB' => 'Ethiopian Birr ETB ', 
			'EUR' => 'Euro EUR ', 
			'FKP' => 'Falkland Islands Pound FKP ', 
			'FJD' => 'Fiji Dollar FJD ', 
			'XPF' => 'Franc Pacifique XPF ', 
			'GBP' => 'Great British Pound GBP ', 
			'GMD' => 'Gambian Dalasi GMD ', 
			'GHC' => 'Ghanaian Cedi GHC ', 
			'GIP' => 'Gibraltar Pound GIP ', 
			'GTQ' => 'Guatemalan Quetzal GTQ ', 
			'GNF' => 'Guiniea Franc GNF ', 
			'GYD' => 'Guyanan Dollar GYD ', 
			'HTG' => 'Haitian Gourde HTG ', 
			'HNL' => 'Honduran Lempira HNL ', 
			'HKD' => 'Hong Kong Dollar HKD ', 
			'HUF' => 'Hungarian Forint HUF ', 
			'ISK' => 'Iceland Krona ISK ', 
			'INR' => 'Indian Rupee INR ', 
			'IDR' => 'Indonesian Rupiah IDR ', 
			'IRR' => 'Iranian Rial IRR ', 
			'IQD' => 'Iraqi Dinar IQD ', 
			'ILS' => 'Israeili New Shekel ILS ', 
			'JMD' => 'Jamaican Dollar JMD ', 
			'JPY' => 'Japanese Yen JPY ', 
			'JOD' => 'Jordanian Dinar JOD ', 
			'KZT' => 'Kazakhstan Tenge KZT ', 
			'KES' => 'Kenyan Shilling KES ', 
			'KRW' => 'Korean Won KRW ', 
			'KWD' => 'Kuwaiti Dinar KWD ', 
			'LAK' => 'Lao Kip LAK ', 
			'LBP' => 'Lebanese Pound LBP ', 
			'LRD' => 'Liberian Dollar LRD ', 
			'LSL' => 'Lesotho Loti LSL  ', 
			'LTL' => 'Lithuanian Litas LTL ', 
			'LYD' => 'Libyan Dinar LYD  ', 
			'LVL' => 'Latvian Lats LVL ', 
			'MOP' => 'Macau Pataca MOP ', 
			'MGA' => 'Malagasy Franc MGA ', 
			'MWK' => 'Malawi Kwacha MWK ', 
			'MYR' => 'Malaysian Ringgit MYR ', 
			'MVR' => 'Maldive Rufiyaa MVR ', 
			'MRO' => 'Mauritanian Ouguiya MRO ', 
			'MUR' => 'Mauritius Rupee MUR ', 
			'MXN' => 'Mexican Peso MXN ', 
			'MDL' => 'Moldovan leu MDL ', 
			'MNT' => 'Mongolian Tugrik MNT ', 
			'MAD' => 'Moroccan Dirham MAD ', 
			'MZM' => 'Mozambique Metical MZM ', 
			'MMK' => 'Myanmar Kyat MMK ', 
			'NAD' => 'Namibian Dollar NAD ', 
			'NPR' => 'Nepalese Rupee NPR ', 
			'ANG' => 'Netherlands Antillian Guilder ANG ', 
			'NZD' => 'New Zealand Dollar NZD ', 
			'NIO' => 'Nicaraguan Cordoba Oro NIO ', 
			'NGN' => 'Nigerian Naira NGN ', 
			'KPW' => 'North Korean Won KPW ', 
			'NOK' => 'Norwegian Kroner NOK ', 
			'OMR' => 'Omani Rial OMR ', 
			'PKR' => 'Pakistan Rupee PKR ', 
			'PAB' => 'Panamanian Balboa PAB ', 
			'PGK' => 'Papua New Guinea Kina PGK ', 
			'PYG' => 'Paraguay Guarani PYG ', 
			'PEN' => 'Peruvian Neuevo Sol PEN ', 
			'PHP' => 'Philippine Peso PHP ', 
			'PLN' => 'Polish Zloty PLN ', 
			'QAR' => 'Qatari Rial QAR ', 
			'RON' => 'Romanian New Leu RON ', 
			'RUB' => 'Russian Rouble RUB ', 
			'WST' => 'Samoan Tala WST ', 
			'STD' => 'Sao Tome and Principe Dobra STD ', 
			'SAR' => 'Saudi Riyal SAR ', 
			'SCR' => 'Seychelles Rupee SCR ', 
			'SLL' => 'Sierra Leone Leone SLL ', 
			'SGD' => 'Singapore Dollar SGD ', 
			'LKR' => 'Sri Lanka Rupee LKR ', 
			'SBD' => 'Solomon Islands Dollar SBD ', 
			'SOS' => 'Somali Schilling SOS ', 
			'ZAR' => 'South African Rand ZAR ', 
			'SHP' => 'St. Helena Pound SHP ', 
			'SDP' => 'Sudanese Pound SDP ', 
			'SZL' => 'Swaziland Lilangeni SZL ', 
			'SEK' => 'Swedish Krona SEK ', 
			'CHF' => 'Swiss Franc CHF ', 
			'SYP' => 'Syrian Pound SYP ', 
			'TWD' => 'Taiwan Dollar TWD ', 
			'THB' => 'Thai Baht THB ', 
			'TJS' => 'Tajikistan Somoni TJS ', 
			'TOP' => 'Tongan Pa\'anga TOP ', 
			'TTD' => 'Trinidad and Tobago Dollar TTD ', 
			'TND' => 'Tunisian Dinar TND ', 
			'TRY' => 'Turkish Lira TRY ', 
			'TZS' => 'Tanzanian Shilling TZS ', 
			'USD' => 'US Dollar USD ', 
			'UGX' => 'Uganda Schilling UGX ', 
			'UAH' => 'Ukraine Hryvn UAH ia ', 
			'UYP' => 'Uruguayan Peso UYP ', 
			'VUV' => 'Vanuatu Vatu VUV ', 
			'VEF' => 'Venezuelan Bolivar VEF ', 
			'VND' => 'Vietnamese Don VND g', 
			'ZMK' => 'Zambian Kwacha ZMK ', 
			'ZWD' => 'Zimbabwe Dollar ZWD '
			);

		$this->country_codes_to_currency_codes = array(
			'AF' => 'AFA', 
			'AL' => 'ALL', 
			'AZ' => 'AZN', 
			'AO' => 'AON', 
			'AM' => 'AMD', 
			//'ANG'=>'ANG (Netherlands) Antillian Guilder', // No info
			'AE' => 'AED', 
			'AR' => 'ARS', 
			'AW' => 'AWG', 
			'AU' => 'AUD', 
			'BS' => 'BSD', 
			'BH' => 'BHD', 
			'BD' => 'BDT', 
			'BB' => 'BBD', 
			'BZ' => 'BZD', 
			'BM' => 'BMD', 
			'BT' => 'BTN', 
			'BO' => 'BOB', 
			'BW' => 'BWP', 
			'BR' => 'BRL', 
			'BN' => 'BND', 
			'BG' => 'BGN', 
			'BI' => 'BIF', 
			'XBT' => 'BTC', 
			'KH' => 'KHR', 
			'CA' => 'CAD', 
			'CV' => 'CVE', 
			'KY' => 'KYD', 
			'CH' => 'CHF', 
			'CL' => 'CLP', 
			'CN' => 'CNY', 
			'CO' => 'COP', 
			'CZ' => 'CZK', 
			'KM' => 'KMF', 
			'CG' => 'XAF', 
			'CD' => 'XAF', 
			'CR' => 'CRC', 
			'HR' => 'HRK', 
			'CU' => 'CUC', 
			'DK' => 'DKK', 
			'DJ' => 'DJF', 
			'DO' => 'DOP', 
			'DZ' => 'DZD', 
			'EG' => 'EGP', 
			'SV' => 'SVC', 
			'ET' => 'ETB', 
			'FK' => 'FKP', 
			'FJ' => 'FJD', 
			'GB' => 'GBP', 
			'UK' => 'GBP', 
			'GM' => 'GMD', 
			'GH' => 'GHC', 
			'GI' => 'GIP', 
			'GT' => 'GTQ', 
			'GN' => 'GNF', 
			'GY' => 'GYD', 
			'HT' => 'HTG', 
			'HN' => 'HNL', 
			'HK' => 'HKD', 
			'HU' => 'HUF', 
			'IS' => 'ISK', 
			'IN' => 'INR', 
			'ID' => 'IDR', 
			'IR' => 'IRR', 
			'IQ' => 'IQD', 
			'IL' => 'ILS', 
			'JM' => 'JMD', 
			'JP' => 'JPY', 
			'JO' => 'JOD', 
			'KZ' => 'KZT', 
			'KE' => 'KES', 
			'KR' => 'KRW', 
			'KW' => 'KWD', 
			'LA' => 'LAK', 
			'LB' => 'LBP', 
			'LK' => 'LKR', 
			'LR' => 'LRD', 
			'LS' => 'LSL', 
			'LT' => 'LTL', 
			'LY' => 'LYD', 
			'LV' => 'LVL', 
			'MD' => 'MDL', 
			'MO' => 'MOP', 
			'MG' => 'MGA', 
			'MW' => 'MWK', 
			'MY' => 'MYR', 
			'MV' => 'MVR', 
			'MR' => 'MRO', 
			'MU' => 'MUR', 
			'MX' => 'MXN', 
			'MN' => 'MNT', 
			'MA' => 'MAD', 
			'MZ' => 'MZM', 
			'MM' => 'MMK', 
			// 'ANG'=>'ANG Netherlands Antillian Guilder', // No info
			'NA' => 'NAD', 
			'NP' => 'NPR', 
			'NZ' => 'NZD', 
			'NI' => 'NIO', 
			'NG' => 'NGN', 
			'KP' => 'KPW', 
			'NO' => 'NOK', 
			'OM' => 'OMR', 
			'PK' => 'PKR', 
			'PA' => 'PAB', 
			'PG' => 'PGK', 
			'PY' => 'PYG', 
			'PE' => 'PEN', 
			'PH' => 'PHP', 
			'PL' => 'PLN', 
			'QA' => 'QAR', 
			'RO' => 'RON', 
			'RU' => 'RUB', 
			'ST' => 'STD', 
			'SA' => 'SAR', 
			'SC' => 'SCR', 
			'SL' => 'SLL', 
			'SG' => 'SGD', 
			'SB' => 'SBD', 
			'SO' => 'SOS', 
			'ZA' => 'ZAR', 
			'SH' => 'SHP', 
			'SD' => 'SDP', 
			'SZ' => 'SZL', 
			'SE' => 'SEK', 
			'SY' => 'SYP', 
			'TW' => 'TWD', 
			'TH' => 'THB', 
			'TJ' => 'TJS', 
			'TO' => 'TOP', 
			'TT' => 'TTD', 
			'TN' => 'TND', 
			'TR' => 'TRY', 
			'TZ' => 'TZS', 
			'US' => 'USD', 
			'UG' => 'UGX', 
			'UA' => 'UAH', 
			'UY' => 'UYP', 
			'VU' => 'VUV', 
			'VE' => 'VEF', 
			'VN' => 'VND', 
			'WS' => 'WST', 
			// 'XOF'=>'XOF Benin: CFA Franc BCEAO',
			// 'XOF'=>'XOF CFA Franc BCEAO',
			// 'XAF'=>'XAF CFA Franc BEAC',
			// 'XAF'=>'XAF CFA Franc BEAC',
			// 'XPF'=>'XPF Franc Pacifique',
			'ZM' => 'ZMK', 
			'ZW' => 'ZWD', 
			'AT' => 'EUR', 
			'BE' => 'EUR', 
			'CY' => 'EUR', 
			'EE' => 'EUR', 
			'FI' => 'EUR', 
			'FR' => 'EUR', 
			'DE' => 'EUR', 
			'GR' => 'EUR',
			'IE' => 'EUR', 
			'IT' => 'EUR', 
			'LU' => 'EUR', 
			'MT' => 'EUR', 
			'NL' => 'EUR', 
			'PT' => 'EUR', 
			'SK' => 'EUR', 
			'SI' => 'EUR', 
			'ES' => 'EUR'
			);

		// Some of these symbols or their pre/post assignments may be wrong, if so, please email support@jomres.net and I'll put them right
		$this->symbols = array(
			'AFA' => array('pre' => '؋', 'post' => ''), 
			'ALL' => array('pre' => 'L', 'post' => ''), 
			'AZN' => array('pre' => '', 'post' => '&nbsp;AZN'), 
			'DZD' => array('pre' => 'دج', 'post' => ''), 
			'AON' => array('pre' => 'Kz', 'post' => ''), 
			'AMD' => array('pre' => '֏', 'post' => ''), 
			'ANG' => array('pre' => 'NAƒ', 'post' => ''), 
			'AED' => array('pre' => 'د.إ', 'post' => ''), 
			'ARS' => array('pre' => '$', 'post' => ''), 
			'AWG' => array('pre' => 'Afl.', 'post' => ''), 
			'AUD' => array('pre' => '$', 'post' => ''), 
			'BSD' => array('pre' => '$', 'post' => ''), 
			'BHD' => array('pre' => '.د.ب', 'post' => ''), 
			'BDT' => array('pre' => '৳', 'post' => ''), 
			'BBD' => array('pre' => '$', 'post' => ''), 
			'BZD' => array('pre' => 'BZ$', 'post' => ''), 
			'XOF' => array('pre' => 'CFA', 'post' => ''), 
			'BMD' => array('pre' => '$', 'post' => ''), 
			'BTN' => array('pre' => 'Nu.', 'post' => ''), 
			'BOB' => array('pre' => 'Bs.', 'post' => ''), 
			'BWP' => array('pre' => 'P', 'post' => ''), 
			'BRL' => array('pre' => 'R$', 'post' => ''), 
			'GBP' => array('pre' => '£', 'post' => ''), 
			'BND' => array('pre' => 'B$', 'post' => ''), 
			'BGN' => array('pre' => 'лв', 'post' => ''), 
			'BIF' => array('pre' => 'FBu', 'post' => ''), 
			'BTC' => array('pre' => '฿', 'post' => ''), 
			'XAF' => array('pre' => 'FCFA', 'post' => ''), 
			'KHR' => array('pre' => 'riel', 'post' => ''), 
			'CAD' => array('pre' => '$', 'post' => ''), 
			'CVE' => array('pre' => '$', 'post' => ''), 
			'KYD' => array('pre' => '$', 'post' => ''), 
			'CLP' => array('pre' => '$', 'post' => ''), 
			'CNY' => array('pre' => '¥', 'post' => ''), 
			'COP' => array('pre' => '$', 'post' => ''), 
			'CZK' => array('pre' => '', 'post' => ' Kč'), 
			'KMF' => array('pre' => 'CF', 'post' => ''), 
			'CRC' => array('pre' => '₡', 'post' => ''), 
			'HRK' => array('pre' => 'kn', 'post' => ''), 
			'CUC' => array('pre' => 'MN$', 'post' => ''), 
			'DKK' => array('pre' => '', 'post' => 'kr'), 
			'DJF' => array('pre' => 'Fdj', 'post' => ''), 
			'DOP' => array('pre' => 'RD$', 'post' => ''), 
			'EUR' => array('pre' => '', 'post' => '€'), 
			'EGP' => array('pre' => '£', 'post' => ''), 
			'SVC' => array('pre' => '$', 'post' => ''), 
			'EEK' => array('pre' => '', 'post' => 'kr'), 
			'ETB' => array('pre' => 'Br', 'post' => ''), 
			'FKP' => array('pre' => '£', 'post' => ''), 
			'FJD' => array('pre' => '$', 'post' => ''), 
			'GMD' => array('pre' => 'D', 'post' => ''), 
			'GHC' => array('pre' => '¢', 'post' => ''), 
			'GIP' => array('pre' => '£', 'post' => ''), 
			'GTQ' => array('pre' => 'Q', 'post' => ''), 
			'GNF' => array('pre' => 'FG', 'post' => ''), 
			'GYD' => array('pre' => '$', 'post' => ''), 
			'HTG' => array('pre' => 'G', 'post' => ''), 
			'HNL' => array('pre' => 'L', 'post' => ''), 
			'HKD' => array('pre' => 'HK$', 'post' => ''), 
			'HUF' => array('pre' => 'Ft', 'post' => ''), 
			'ISK' => array('pre' => '', 'post' => 'kr'), 
			'INR' => array('pre' => 'Rs', 'post' => ''), 
			'IDR' => array('pre' => 'Rp', 'post' => ''), 
			'IRR' => array('pre' => '﷼', 'post' => ''), 
			'IQD' => array('pre' => 'ع.د', 'post' => ''), 
			'ILS' => array('pre' => '₪', 'post' => ''), 
			'JMD' => array('pre' => 'J$', 'post' => ''), 
			'JPY' => array('pre' => '¥', 'post' => ''), 
			'JOD' => array('pre' => 'JD', 'post' => ''), 
			'KZT' => array('pre' => 'лв', 'post' => ''), 
			'KES' => array('pre' => 'KSh', 'post' => ''), 
			'KRW' => array('pre' => '₩', 'post' => ''), 
			'KWD' => array('pre' => 'د.ك', 'post' => ''), 
			'LAK' => array('pre' => '₭', 'post' => ''), 
			'LVL' => array('pre' => 'Ls', 'post' => ''), 
			'LBP' => array('pre' => '£', 'post' => ''), 
			'LSL' => array('pre' => 'M', 'post' => ''), 
			'LRD' => array('pre' => '$', 'post' => ''), 
			'LYD' => array('pre' => 'ل.د', 'post' => ''), 
			'LTL' => array('pre' => 'Lt', 'post' => ''), 
			'MOP' => array('pre' => 'MOP$', 'post' => ''), 
			'MGA' => array('pre' => 'Ar', 'post' => ''), 
			'MWK' => array('pre' => 'MK', 'post' => ''), 
			'MYR' => array('pre' => 'RM', 'post' => ''), 
			'MVR' => array('pre' => '.ރ', 'post' => ''), 
			'MRO' => array('pre' => 'UM', 'post' => ''), 
			'MUR' => array('pre' => 'R', 'post' => ''), 
			'MXN' => array('pre' => '$', 'post' => ''), 
			'MNT' => array('pre' => '₮', 'post' => ''), 
			'MAD' => array('pre' => 'د.م.', 'post' => ''), 
			'MZM' => array('pre' => 'MT', 'post' => ''), 
			'MMK' => array('pre' => 'K', 'post' => ''), 
			'ANG' => array('pre' => 'NAƒ', 'post' => ''), 
			'NAD' => array('pre' => '$', 'post' => ''), 
			'NPR' => array('pre' => 'रू.', 'post' => ''), 
			'NZD' => array('pre' => '$', 'post' => ''), 
			'NIO' => array('pre' => 'C$', 'post' => ''), 
			'NGN' => array('pre' => '₦', 'post' => ''), 
			'KPW' => array('pre' => '₩', 'post' => ''), 
			'NOK' => array('pre' => '', 'post' => 'kr'), 
			'OMR' => array('pre' => '﷼', 'post' => ''), 
			'PKR' => array('pre' => 'Rs', 'post' => ''), 
			'PAB' => array('pre' => 'B/.', 'post' => ''), 
			'PGK' => array('pre' => 'K', 'post' => ''), 
			'PYG' => array('pre' => 'Gs', 'post' => ''), 
			'PEN' => array('pre' => 'S/.', 'post' => ''), 
			'PHP' => array('pre' => 'Php', 'post' => ''), 
			'PLN' => array('pre' => '', 'post' => 'zł'), 
			'QAR' => array('pre' => 'ر.ق', 'post' => ''), 
			'RON' => array('pre' => '', 'post' => 'lei'), 
			'RUB' => array('pre' => 'руб', 'post' => ''), 
			'WST' => array('pre' => 'WS$', 'post' => ''), 
			'STD' => array('pre' => 'Db', 'post' => ''), 
			'SAR' => array('pre' => '﷼', 'post' => ''), 
			'SCR' => array('pre' => 'SRe', 'post' => ''), 
			'SLL' => array('pre' => 'Le', 'post' => ''), 
			'SGD' => array('pre' => '$', 'post' => ''), 
			'SBD' => array('pre' => 'SI$', 'post' => ''), 
			'SOS' => array('pre' => 'S', 'post' => ''), 
			'ZAR' => array('pre' => 'R', 'post' => ''), 
			'LKR' => array('pre' => 'Rs', 'post' => ''), 
			'SHP' => array('pre' => '£', 'post' => ''), 
			'SDP' => array('pre' => 'جنيه سوداني', 'post' => ''), 
			'SZL' => array('pre' => 'E', 'post' => ''), 
			'SEK' => array('pre' => '', 'post' => 'kr'), 
			'CHF' => array('pre' => 'CHF', 'post' => ''), 
			'SYP' => array('pre' => '£', 'post' => ''), 
			'TWD' => array('pre' => 'NT$', 'post' => ''), 
			'THB' => array('pre' => '', 'post' => '฿'), 
			'TJS' => array('pre' => '', 'post' => 'TJS'), 
			'TOP' => array('pre' => 'T$', 'post' => ''), 
			'TTD' => array('pre' => '$', 'post' => ''), 
			'TND' => array('pre' => 'د.ت', 'post' => ''), 
			'TRY' => array('pre' => 'TL', 'post' => ''), 
			'TZS' => array('pre' => 'Sh', 'post' => ''), 
			'USD' => array('pre' => '$', 'post' => ''), 
			'UGX' => array('pre' => 'USh', 'post' => ''), 
			'UAH' => array('pre' => '₴', 'post' => ''), 
			'UYP' => array('pre' => '$', 'post' => ''), 
			'AED' => array('pre' => 'د.إ', 'post' => ''), 
			'VUV' => array('pre' => 'Vt', 'post' => ''), 
			'VEF' => array('pre' => 'Bs', 'post' => ''), 
			'VND' => array('pre' => '₫', 'post' => ''), 
			'ZMK' => array('pre' => 'ZK', 'post' => ''), 
			'ZWD' => array('pre' => '$', 'post' => ''), 
			'ZWD' => array('pre' => 'Lei', 'post' => ''), 
			'XPF' => array('pre' => '', 'post' => 'F')
			);
	}

	/**
	 * 
	 *
	 *
	 */

	public function makeCodesDropdown($code = '', $global = false, $input_name = '')
	{
		//selected currency code
		if ($code != '') {
			$this->code = strtoupper(trim($code));
		}
		
		//input name
		if (!$global) {
			if ($input_name == '') {
				$this->input_name = 'cfg_property_currencycode';
			} else {
				$this->input_name = $input_name;
			}
		} else {
			$this->input_name = 'cfg_globalCurrencyCode';
		}
		
		// We need to limit the available currency codes to those which can be converted. If we don't then the shopping cart calculations will all be wrong, so we'll use the conversion code can be converted method to check that we can use the currency code.
		// We'll leave this as a programattic thing, as the codes will change depending on the codes that yahoo give to Jomres
		$jomres_currency_conversion = jomres_singleton_abstract::getInstance('jomres_currency_conversion');

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$options = array();
		ksort($this->codes);
		foreach ($this->codes as $k => $v) {
			if ($jomres_currency_conversion->this_code_can_be_converted($k) || ($jrConfig[ 'useGlobalCurrency' ] == '0' && $jrConfig[ 'use_conversion_feature' ] == '0') || trim($jrConfig[ 'openexchangerates_api_key' ]) == '') {
				$options[] = jomresHTML::makeOption($k, $v);
			}
		}

		return jomresHTML::selectList($options, $this->input_name, 'class="inputbox" size="1"', 'value', 'text', $this->code);
	}

	/**
	 * 
	 *
	 *
	 */

	public function getCode($code = '')
	{
		if ($code == '') {
			$code = $this->code;
		} else {
			$code = strtoupper(trim($code));
		}

		return $this->codes[ $code ];
	}

	/**
	 * 
	 *
	 *
	 */

	public function getSymbol($code = '')
	{
		if ($code == '') {
			$code = $this->code;
		} else {
			$code = strtoupper(trim($code));
		}

		return $this->symbols[ $code ];
	}
}
