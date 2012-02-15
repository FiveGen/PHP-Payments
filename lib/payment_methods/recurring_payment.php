<?php

class Recurring_Payment implements Payment_Method
{
	private $_params;

	public function __construct()
	{
		$this->_params = array(
			'last_name'					=>	'',
			'profile_start_date'		=>	'', //Required.  The subscription start date.
			'profile_reference'			=>	'', //A reference from your own subscription / invoicing system for the subscriber.
			'desc'						=>	'',	//Required.  A description for the recurring bill.
			'max_failed_payments'		=>	'', //Maximum # of failed payments before subscription is cancelled
			'auto_bill_amt'				=>	'', // ?
			'billing_period'			=>	'', //Required.  Year, month, week
			'billing_frequency'			=>	'',	//Required.  Number of times to bill per period
			'total_billing_cycles'		=>	'', //Total # of times the customer will be billed.
			'amt'						=>	'',	//Required.  Amount to bill on a recurring basis.
			'trial_billing_frequency'	=>	'', //Set this if you want a trial.  Year, month, week.
			'trial_billing_cycles'		=>	'', //Total # of times you want the customer to be billed at the trial rate.
			'trial_amt'					=>	'',	//The trial rate.
			'currency_code'				=>	'', //ie USD
			'shipping_amt'				=>	'', //Total of shipping alone.
			'tax_amt'					=>	'', //Total of tax alone.
			'initial_amt'				=>	'',	//billed immediately upon profile creation
			'failed_init_action'		=>	'',	//What to do if the initial bill failes.  Continue or Cancel.
			'inv_num'					=>	'',
			'ship_to_first_name'		=>	'', //Name of person being shipped to
			'ship_to_last_name'			=>	'',
			'ship_to_street'			=>	'',
			'ship_to_street2'			=>	'',
			'ship_to_city'				=>	'',
			'ship_to_state'				=>	'',
			'ship_to_zip'				=>	'',
			'ship_to_country'			=>	'',
			'ship_to_phone_num'			=>	'',
			'ship_to_company'			=>	'',
			'cc_type'					=>	'',	//Required.  Credit card type.
			'cc_number'					=>	'',	//Required.  Credit card number.
			'exp_date'					=>	'',	//Required.  Credit card expiration date.
			'cc_code'					=>	'',	//Required.  Credit Card CVV code.
			'start_date'				=>	'',	
			'issue_number'				=>	'',
			'email'						=>	'',
			'identifier'				=>	'',
			'payer_status'				=>	'',
			'countrycode'				=>	'',	//Required.  Buyer's country code.
			'business_name'				=>	'',
			'salutation'				=>	'',
			'first_name'				=>	'',
			'middle_name'				=>	'',
			'last_name'					=>	'',
			'suffix'					=>	'',
			'street'					=>	'',  //Required.  Buyer's street address.
			'street2'					=>	'',
			'city'						=>	'',	//Required.  Buyer's city.
			'state'						=>	'',	//Required.  Buyer's state or province.
			'postal_code'				=>	'',	//Required.  Buyer's postal code.
			'phone'						=>	'',	
			'fax'						=>	'',	
		);
	}

	public function get_params()
	{
		return $this->_params;
	}
}