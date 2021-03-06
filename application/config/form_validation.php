<?php

$config =
[
	'add_validate'
	=>	[
		    [
	          	'field'    =>    'name',
	          	'label'    => 	 'Name',
	          	'rules'    => 	 'required'
	        ],

	        [
	        	'field'    =>    'position',
	        	'label'	   =>    'Position',
	        	'rules'	   =>    'required'
	        ],

	        [
	        	'field'    =>    'email',
	        	'label'	   =>    'Email',
	        	'rules'	   =>    'required|is_unique[users.email]|valid_email',
	        	'errors'   =>    [ 'is_unique' => '%s is already taken.', 'valid_email' => '%s is invalid.' ]

	        ],
	    ],
	'update_validate'
	=>	[
		    [
	          	'field'    =>    'name',
	          	'label'    => 	 'Name',
	          	'rules'    => 	 'required'
	        ],

	        [
	        	'field'    =>    'position',
	        	'label'	   =>    'Position',
	        	'rules'	   =>    'required'
	        ],

	        [
	        	'field'    =>    'email',
	        	'label'	   =>    'Email',
	        	'rules'	   =>    'required|valid_email',
	        	'errors'   =>    ['valid_email' => '%s is invalid.' ]

	        ],
	    ]

];
