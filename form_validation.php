<?php
	/*
	Rule Reference: 
	required		No	Returns FALSE if the form element is empty.	 
	matches			Yes	Returns FALSE if the form element does not match the one in the parameter.	matches[form_item]
	is_unique		Yes	Returns FALSE if the form element is not unique to the table and field name in the parameter.	is_unique[table.field]
	min_length		Yes	Returns FALSE if the form element is shorter then the parameter value.	min_length[6]
	max_length		Yes	Returns FALSE if the form element is longer then the parameter value.	max_length[12]
	exact_length		Yes	Returns FALSE if the form element is not exactly the parameter value.	exact_length[8]
	greater_than		Yes	Returns FALSE if the form element is less than the parameter value or not numeric.	greater_than[8]
	less_than		Yes	Returns FALSE if the form element is greater than the parameter value or not numeric.	less_than[8]
	alpha			No	Returns FALSE if the form element contains anything other than alphabetical characters.	 
	alpha_numeric		No	Returns FALSE if the form element contains anything other than alpha-numeric characters.	 
	alpha_dash		No	Returns FALSE if the form element contains anything other than alpha-numeric characters, underscores or dashes.	 
	numeric			No	Returns FALSE if the form element contains anything other than numeric characters.	 
	integer			No	Returns FALSE if the form element contains anything other than an integer.	 
	decimal			No	Returns FALSE if the form element contains anything other than a decimal number.	 
	is_natural		No	Returns FALSE if the form element contains anything other than a natural number: 0, 1, 2, 3, etc.	 
	is_natural_no_zero	No	Returns FALSE if the form element contains anything other than a natural number, but not zero: 1, 2, 3, etc.	 
	valid_email		No	Returns FALSE if the form element does not contain a valid email address.	 
	valid_emails		No	Returns FALSE if any value provided in a comma separated list is not a valid email.	 
	valid_ip		No	Returns FALSE if the supplied IP is not valid. Accepts an optional parameter of "IPv4" or "IPv6" to specify an IP format.	 
	valid_base64		No	Returns FALSE if the supplied string contains anything other than valid Base64 characters.	
	*/

	function form_validation_field($a) {
		$callback = function(array $a) {
			return [
				'field' => $a[0],
				'label' => $a[1],
				'rules' => $a[2]
			];
		};

		return array_map($callback, $a);
	}

	$create_update = [
		['fname', 'First Name', 'required|alpha'],
		['lname', 'Last Name', 'required|alpha'],
		['age', 'Age', 'required|integer|is_natural_no_zero'],
		['address', 'Address', 'required'],
		['email', 'Email Address', 'required|valid_email'],
		['contact_no', 'Contact Number', 'required']
	];
	
        $employee_delete = [
		['captcha', 'Captcha', 'required|alpha_numeric']    
	];

	$config = [
		'employee/create' => form_validation_field($employee_create_update),
		'employee/update' => form_validation_field($employee_create_update),
		'employee/delete' => form_validation_field($employee_delete)
	];	
