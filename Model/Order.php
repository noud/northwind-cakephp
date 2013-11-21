<?php
class Order extends AppModel {

	public $useTable = 'Orders';

	public $primaryKey = 'OrderID';

	public $belongsTo = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'CustomerID'
		),
		'Employee' => array(
			'className' => 'Employee',
			'foreignKey' => 'EmployeeID'
		),
		'Shipper' => array(
			'className' => 'Shipper',
			'foreignKey' => 'ShipVia'
		)
	);

	public $hasMany = array(
		'OrderDetail' => array(
			'className' => 'OrderDetail',
			'foreignKey' => 'OrderID'
		)
	);
}
