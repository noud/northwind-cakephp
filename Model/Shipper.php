<?php
class Shipper extends AppModel {

	public $useTable = 'Shippers';

	public $primaryKey = 'ShipperID';

	public $displayField = 'CompanyName';

	public $hasMany = array(
		'Orders' => array(
			'className' => 'Order',
			'foreignKey' => 'ShipVia'
		)
	);
}
