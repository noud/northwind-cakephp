<?php
class Region extends AppModel {

	public $useTable = 'Region';

	public $primaryKey = 'RegionID';

	public $displayField = 'RegionDescription';

	public $hasMany = array(
		'Territories' => array(
			'className' => 'Territory',
			'foreignKey' => 'RegionID'
		)
	);
}
