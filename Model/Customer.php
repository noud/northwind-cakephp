<?php
class Customer extends AppModel {

	public $useTable = 'Customers';

	public $primaryKey = 'CustomerID';

	public $displayField = 'CompanyName';

	public $hasMany = array(
		'Orders' => array(
			'className' => 'Order',
			'foreignKey' => 'CustomerID'
		)
	);
}
