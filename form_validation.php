<?php
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
		['fname', 'First Name', 'required'],
		['lname', 'Last Name', 'required'],
		['age', 'Age', 'required'],
		['address', 'Address', 'required'],
		['email', 'Email Address', 'required'],
		['contact_no', 'Contact Number', 'required']
	];
	
        $employee_delete = [
		['captcha', 'Captcha', 'required']    
	];

	$config = [
		'employee/create' => form_validation_field($employee_create_update),
		'employee/update' => form_validation_field($employee_create_update),
		'employee/delete' => form_validation_field($employee_delete)
	];	
