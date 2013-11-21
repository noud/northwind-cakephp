<?php
class Supplier extends AppModel {

	public $useTable = 'Suppliers';

	public $primaryKey = 'SupplierID';

	public $displayField = 'CompanyName';

	public $hasMany = array(
		'Products' => array(
			'className' => 'Product',
			'foreignKey' => 'SupplierID'
		)
	);
}
