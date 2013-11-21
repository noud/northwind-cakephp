<?php
class Territory extends AppModel {

	public $useTable = 'Territories';

	public $primaryKey = 'TerritoryID';

	public $displayField = 'TerritoryDescription';

	public $belongsTo = array(
		'Region' => array(
			'className' => 'Region',
			'foreignKey' => 'RegionID'
		)
	);

	public $hasMany = array(
		'EmployeeTerritory' => array(
			'className' => 'EmployeeTerritory',
			'foreignKey' => 'TerritoryID'
		)
	);
}
