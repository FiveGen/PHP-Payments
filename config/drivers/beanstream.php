<?php

$config['merchant_id'] = "";
$config['username'] = "";
$config['password'] = "";
$config['passCode'] = "72b7bdbCaac44AAa9b94ec9ca790E6AB";
$config['validation_username'] = "";
$config['validation_password'] = "";

//Recurring billing settings.  Important!
$config['delay_charge'] = '1'; //set this to 0 if you want to charge customers as soon as they elect to begin recurring billing, or 1 if you want to wait until their profile start date to bill them.
$config['bill_outstanding'] = '1'; /* By default, new recurring billing accounts are flagged
to automatically process back payments if the account
is disabled and then re-activated. This setting may be
modified at any time through the Beanstream member
area or via API. This is done separately for each
individual recurring billing customer account.	When
re-activating an account via API, back payments will be
processed or ignored according to the value set for the
individual customer in the Beanstream member area
unless this variable is passed.
Specify processBackPayments=1 to process back
payments and charge the customer for any missed
invoices when an account is re-activated. Specify
processBackPayments=0 to re-activate the account
without charging back payments.*/

return $config;