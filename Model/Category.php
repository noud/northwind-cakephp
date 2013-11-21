<?php
class Category extends AppModel {

	public $useTable = "Categories";

	public $primaryKey = 'CategoryID';

	public $displayField = "CategoryName";

	public $hasMany = array(
		'Products' => array(
			'className' => 'Product',
			'foreignKey' => 'ProductID'
		)
	);
}
