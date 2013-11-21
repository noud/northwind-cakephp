<?php
class Employee extends AppModel {

	public $useTable = 'Employees';

	public $primaryKey = 'EmployeeID';

	public $displayField = 'FullName';

	public $virtualFields = array(
		'FullName' => "CONCAT_WS(' ', Employee.FirstName, Employee.LastName)"
	);

	public $hasMany = array(
		'EmployeeTerritory' => array(
			'className' => 'EmployeeTerritory',
			'foreignKey' => 'EmployeeID'
		),
		'Orders' => array(
			'className' => 'Order',
			'foreignKey' => 'OrderID'
		)
	);
}
