<?php
class Product extends AppModel {

	public $useTable = 'Products';

	public $primaryKey = 'ProductID';

	public $displayField = 'ProductName';

	public $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'CategoryID'
		),
		'Supplier' => array(
			'className' => 'Supplier',
			'foreignKey' => 'SupplierID'
		)
	);

	public $hasMany = array(
		'OrderDetail' => array(
			'className' => 'OrderDetail',
			'foreignKey' => 'ProductID'
		)
	);
}
