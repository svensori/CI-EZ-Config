<?php
	function form_validation_field($a) {
		return [
			'field' => $a[0],
			'label' => $a[1],
			'rules' => $a[2]
		];
	}

	$create_update = [
		['fname', 'First Name', 'required'],
		['lname', 'Last Name', 'required'],
		['age', 'Age', 'required'],
		['address', 'Address', 'required'],
		['email', 'Email Address', 'required'],
		['contact_no', 'Contact Number', 'required']
	];


	$config = [
		'employee/create' => form_validation_field($create_update),
		'employee/update' => form_validation_field($create_update)
	];	