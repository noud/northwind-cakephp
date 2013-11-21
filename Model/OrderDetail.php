<?php
class OrderDetail extends AppModel {

	public $useTable = 'Order Details';

	public $primaryKey = 'OrderProductID';

	public $displayField = 'Product.ProductID';

	public $virtualFields = array(
		'OrderProductID' => "CONCAT(OrderDetail.OrderID, ' ', OrderDetail.ProductID)"
	);

	public $belongsTo = array(
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'OrderID'
		),
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'ProductID'
		)
	);
}
