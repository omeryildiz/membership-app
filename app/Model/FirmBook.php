<?php
App::uses('AppModel', 'Model');
/**
 * FirmBook Model
 *
 * @property Offer $Offer
 */
class FirmBook extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Offer' => array(
			'className' => 'Offer',
			'foreignKey' => 'firm_book_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
