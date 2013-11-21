<?php
class EmployeeTerritory extends AppModel {

	public $useTable = 'EmployeeTerritories';

	public $primaryKey = 'EmployeeTerritoryID';

	public $displayField = 'Territory.TerritoryDescription';

	public $virtualFields = array(
		'EmployeeTerritoryID' => "CONCAT(EmployeeTerritory.EmployeeID, ' ', EmployeeTerritory.TerritoryID)"
	);

	public $belongsTo = array(
		'Employee' => array(
			'className' => 'Employee',
			'foreignKey' => 'EmployeeID'
		),
		'Territory' => array(
			'className' => 'Territory',
			'foreignKey' => 'TerritoryID'
		)
	);
}
