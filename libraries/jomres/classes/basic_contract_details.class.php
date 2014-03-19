<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class basic_contract_details
	{
	private static $configInstance;

	public function __construct()
		{
		$this->contract = array ();
		}

	public static function getInstance()
		{
		if ( !self::$configInstance )
			{
			self::$configInstance = new basic_contract_details();
			}

		return self::$configInstance;
		}
	
	public function gather_data($contract_uid = 0)
		{
		$defaultProperty = getDefaultProperty();
		
		//contract and guest data combined into a single query
		$query = "SELECT 
						a.contract_uid,
						a.arrival,
						a.departure,
						a.guest_uid,
						a.rate_rules,
						a.rooms_tariffs,
						a.deposit_paid,
						a.contract_total,
						a.deposit_ref,
						a.payment_ref,
						a.special_reqs,
						a.deposit_required,
						a.date_range_string,
						a.booked_in,
						a.true_arrival,
						a.single_person_suppliment,
						a.smoking,
						a.extras,
						a.extrasquantities,
						a.extrasvalue,
						a.tax,
						a.tag,
						a.timestamp,
						a.room_total,
						a.discount,
						a.currency_code,
						a.cancelled,
						a.cancelled_timestamp,
						a.cancelled_reason,
						a.discount_details,
						a.username,
						a.coupon_id,
						a.bookedout,
						a.bookedout_timestamp,
						a.invoice_uid,
						a.channel_manager_booking,
						a.approved,
						b.firstname,
						b.surname,
						b.house,
						b.street,
						b.town,
						b.county,
						b.country,
						b.postcode,
						b.tel_landline,
						b.tel_mobile,
						b.email,
						b.discount,
						b.vat_number,
						b.vat_number_validated,
						b.vat_number_validation_response
					FROM #__jomres_contracts a  
					LEFT JOIN #__jomres_guests b ON a.guest_uid = b.guests_uid 
					WHERE a.contract_uid = '" . (int) $contract_uid . "' AND a.property_uid = '" . (int) $defaultProperty . "' ";
		$contractData = doSelectSql( $query );
		
		foreach ($contractData as $contract)
			{
			//contract details
			$this->contract['contractdeets']['contract_uid'] = $contract->contract_uid;
			$this->contract['contractdeets']['arrival'] = $contract->arrival;
			$this->contract['contractdeets']['departure'] = $contract->departure;
			$this->contract['contractdeets']['guest_uid'] = $contract->guest_uid;
			$this->contract['contractdeets']['rate_rules'] = $contract->rate_rules;
			$this->contract['contractdeets']['rooms_tariffs'] = $contract->rooms_tariffs;
			$this->contract['contractdeets']['deposit_paid'] = $contract->deposit_paid;
			$this->contract['contractdeets']['contract_total'] = $contract->contract_total;
			$this->contract['contractdeets']['deposit_ref'] = $contract->deposit_ref;
			$this->contract['contractdeets']['payment_ref'] = $contract->payment_ref;
			$this->contract['contractdeets']['special_reqs'] = $contract->special_reqs;
			$this->contract['contractdeets']['deposit_required'] = $contract->deposit_required;
			$this->contract['contractdeets']['date_range_string'] = $contract->date_range_string;
			$this->contract['contractdeets']['booked_in'] = $contract->booked_in;
			$this->contract['contractdeets']['true_arrival'] = $contract->true_arrival;
			$this->contract['contractdeets']['single_person_suppliment'] = $contract->single_person_suppliment;
			$this->contract['contractdeets']['smoking'] = $contract->smoking;
			$this->contract['contractdeets']['extras'] = $contract->extras;
			$this->contract['contractdeets']['extrasquantities'] = unserialize($contract->extrasquantities);
			$this->contract['contractdeets']['extrasvalue'] = $contract->extrasvalue;
			$this->contract['contractdeets']['tax'] = $contract->tax;
			$this->contract['contractdeets']['tag'] = $contract->tag;
			$this->contract['contractdeets']['timestamp'] = $contract->timestamp;
			$this->contract['contractdeets']['room_total'] = $contract->room_total;
			$this->contract['contractdeets']['discount'] = $contract->discount;
			$this->contract['contractdeets']['currency_code'] = $contract->currency_code;
			$this->contract['contractdeets']['cancelled'] = $contract->cancelled;
			$this->contract['contractdeets']['cancelled_timestamp'] = $contract->cancelled_timestamp;
			$this->contract['contractdeets']['cancelled_reason'] = $contract->cancelled_reason;
			$this->contract['contractdeets']['discount_details'] = $contract->discount_details;
			$this->contract['contractdeets']['username'] = $contract->username;
			$this->contract['contractdeets']['coupon_id'] = $contract->coupon_id;
			$this->contract['contractdeets']['bookedout'] = $contract->bookedout;
			$this->contract['contractdeets']['bookedout_timestamp'] = $contract->bookedout_timestamp;
			$this->contract['contractdeets']['invoice_uid'] = $contract->invoice_uid;
			$this->contract['contractdeets']['channel_manager_booking'] = $contract->channel_manager_booking;
			$this->contract['contractdeets']['approved'] = $contract->approved;
			
			//guest details
			$this->contract['guestdeets']['firstname'] = $contract->firstname;
			$this->contract['guestdeets']['surname'] = $contract->surname;
			$this->contract['guestdeets']['house'] = $contract->house;
			$this->contract['guestdeets']['street'] = $contract->street;
			$this->contract['guestdeets']['town'] = $contract->town;
			if ( is_numeric( $contract->county ) )
				{
				$jomres_regions = jomres_singleton_abstract::getInstance( 'jomres_regions' );
				$this->contract['guestdeets']['county'] = jr_gettext( "_JOMRES_CUSTOMTEXT_REGIONS_" . $contract->county, $jomres_regions->regions[ $contract->county ][ 'regionname' ], false, false );
				}
			else
				$this->contract['guestdeets']['county'] = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_REGION' . $contract->county, $contract->county, false, false );
			$this->contract['guestdeets']['country'] = $contract->country;
			$this->contract['guestdeets']['postcode'] = $contract->postcode;
			$this->contract['guestdeets']['tel_landline'] = $contract->tel_landline;
			$this->contract['guestdeets']['tel_mobile'] = $contract->tel_mobile;
			$this->contract['guestdeets']['email'] = $contract->email;
			$this->contract['guestdeets']['discount'] = $contract->discount;
			$this->contract['guestdeets']['vat_number'] = $contract->vat_number;
			$this->contract['guestdeets']['vat_number_validated'] = $contract->vat_number_validated;
			$this->contract['guestdeets']['vat_number_validation_response'] = $contract->vat_number_validation_response;
			}
		
		//extra services data
		$query = "SELECT 
						a.extraservice_uid,
						a.service_description,
						a.service_value,
						a.tax_rate_val,
						a.tax_code
					FROM #__jomres_extraservices a 
					WHERE a.contract_uid = '" . (int) $contract_uid . "' ";
		$extraServicesData = doSelectSql( $query );
		
		foreach ($extraServicesData as $extraService)
			{
			$this->contract['extraservice'][$extraService->extraservice_uid]['extraservice_uid'] = $extraService->extraservice_uid;
			$this->contract['extraservice'][$extraService->extraservice_uid]['service_description'] = $extraService->service_description;
			$this->contract['extraservice'][$extraService->extraservice_uid]['service_value'] = $extraService->service_value;
			$this->contract['extraservice'][$extraService->extraservice_uid]['tax_rate_val'] = $extraService->tax_rate_val;
			$this->contract['extraservice'][$extraService->extraservice_uid]['tax_code'] = $extraService->tax_code;
			}
		
		//rooms data
		$query = "SELECT  
						DISTINCT(a.room_uid),
						a.black_booking,
						a.reception_booking,
						a.internet_booking,
						b.room_classes_uid,
						b.room_name,
						b.room_number,
						b.room_floor,
						b.room_disabled_access,
						b.max_people,
						b.smoking,
						b.singleperson_suppliment
					FROM #__jomres_room_bookings a 
					LEFT JOIN #__jomres_rooms b ON a.room_uid = b.room_uid
					WHERE a.contract_uid = '" . (int) $contract_uid . "' AND a.property_uid = '" . (int) $defaultProperty . "' ";
		$roomBookingsData = doSelectSql( $query );
		
		foreach ($roomBookingsData as $roomBooking)
			{
			$this->contract['roomdeets'][$roomBooking->room_uid]['room_uid'] = $roomBooking->room_uid;
			$this->contract['roomdeets'][$roomBooking->room_uid]['black_booking'] = $roomBooking->black_booking;
			$this->contract['roomdeets'][$roomBooking->room_uid]['reception_booking'] = $roomBooking->reception_booking;
			$this->contract['roomdeets'][$roomBooking->room_uid]['internet_booking'] = $roomBooking->internet_booking;
			$this->contract['roomdeets'][$roomBooking->room_uid]['room_classes_uid'] = $roomBooking->room_classes_uid;
			$this->contract['roomdeets'][$roomBooking->room_uid]['room_name'] = $roomBooking->room_name;
			$this->contract['roomdeets'][$roomBooking->room_uid]['room_number'] = $roomBooking->room_number;
			$this->contract['roomdeets'][$roomBooking->room_uid]['room_floor'] = $roomBooking->room_floor;
			$this->contract['roomdeets'][$roomBooking->room_uid]['room_disabled_access'] = $roomBooking->room_disabled_access;
			$this->contract['roomdeets'][$roomBooking->room_uid]['max_people'] = $roomBooking->max_people;
			$this->contract['roomdeets'][$roomBooking->room_uid]['smoking'] = $roomBooking->smoking;
			$this->contract['roomdeets'][$roomBooking->room_uid]['singleperson_suppliment'] = $roomBooking->singleperson_suppliment;
			}
		
		//tariffs data
		$tariffs = array();
		$tariffNames = array();
		$room_and_tariff_info = explode( ",", $this->contract['contractdeets']['rooms_tariffs'] );
		foreach ( $room_and_tariff_info as $e )
			{
			$rt = explode( "^", $e );
			$tariffs[] = $rt[ 1 ];
			}
		
		$query = "SELECT rates_uid,rate_title FROM #__jomres_rates WHERE rates_uid IN (" . implode(',',$tariffs) .") ";
		$tariff_names = doSelectSql( $query );
		
		foreach ($tariff_names as $t)
			{
			$tariffNames[$t->rates_uid]=$t->rate_title;
			}

		foreach ( $room_and_tariff_info as $e )
			{
			$rt = explode( "^", $e );
			$this->contract['roomdeets'][$rt[0]]['rate_title'] = jomres_decode($tariffNames[$rt[1]]);
			}
		
		//guest types
		$guesttype_ids = array();
		$guesttypeNames = array();
		$varianceArray = explode( ",", $this->contract['contractdeets']['rate_rules'] );
		foreach ( $varianceArray as $v )
			{
			$vDeets = explode( "_", $v );
			if ( $vDeets[0] == "guesttype" )
				{
				$guesttype_ids[]    = $vDeets[1];
				}
			}
		
		$query = "SELECT `id`, `type` FROM #__jomres_customertypes WHERE id IN (" . implode(',',$guesttype_ids) . ") ";
		$guesttype_titles = doSelectSql( $query );
		
		foreach ($guesttype_titles as $g)
			{
			$guesttypeNames[$g->id]=$g->type;
			}
		
		foreach ( $varianceArray as $v )
			{
			$vDeets = explode( "_", $v );
			if ( $vDeets[0] == "guesttype" )
				{
				$this->contract['guesttype'][$vDeets[1]]['id'] = $vDeets[1];
				$this->contract['guesttype'][$vDeets[1]]['title'] = $guesttypeNames[$vDeets[1]];
				$this->contract['guesttype'][$vDeets[1]]['qty'] = $vDeets[2];
				$this->contract['guesttype'][$vDeets[1]]['value'] = $vDeets[3];
				}
			}
		
		//optional extras
		$extras_rows       = array ();
		$taxrates          = taxrates_getalltaxrates();
		
		$extraOptionsArray = explode( ",", $this->contract['contractdeets']['extras'] );
		foreach ($extraOptionsArray as $k=>$v)
			{
			if ((int)$v == 0)
				unset($extraOptionsArray[$k]);
			}
		
		$query = "SELECT 
						uid, 
						name,
						price,
						tax_rate 
					FROM #__jomres_extras 
					WHERE property_uid = '" . (int) $defaultProperty . "' AND uid IN (" . implode(',',$extraOptionsArray) . ") 
					ORDER BY name ";
		$extrasList = doSelectSql( $query );
		
		foreach ($extrasList as $e)
			{
			$this->contract['extradeets'][$e->uid]['uid'] = $e->uid;
			$this->contract['extradeets'][$e->uid]['name'] = $e->name;
			$this->contract['extradeets'][$e->uid]['price'] = $e->price;
			$this->contract['extradeets'][$e->uid]['tax_rate'] = $e->tax_rate;
			$this->contract['extradeets'][$e->uid]['qty'] = $this->contract['contractdeets']['extrasquantities'][$e->uid];
			}

		//booking notes
		$query = "SELECT 
						id,
						timestamp,
						note 
					FROM #__jomcomp_notes 
					WHERE contract_uid = '" . (int) $contract_uid . "' AND property_uid = '" . (int) $defaultProperty . "'";
		$notesData = doSelectSql( $query );
		
		if ( count( $notesData ) > 0 )
			{
			foreach($notesData as $note)
				{
				$this->contract['notedeets'][$note->id]['id'] = $note->id;
				$this->contract['notedeets'][$note->id]['timestamp'] = $note->timestamp;
				$this->contract['notedeets'][$note->id]['note'] = $note->note;
				}
			}

		return $this->contract;
		}
	}