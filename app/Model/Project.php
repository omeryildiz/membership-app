<?php
App::uses('AppModel', 'Model');
/**
 * Project Model
 *
 * @property Offer $Offer
 * @property PaymentPlan $PaymentPlan
 * @property CurrencyAccount $CurrencyAccount
 * @property Item $Item
 */
class Project extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Offer' => array(
			'className' => 'Offer',
			'foreignKey' => 'project_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PaymentPlan' => array(
			'className' => 'PaymentPlan',
			'foreignKey' => 'project_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'CurrencyAccount' => array(
			'className' => 'CurrencyAccount',
			'joinTable' => 'currency_accounts_projects',
			'foreignKey' => 'project_id',
			'associationForeignKey' => 'currency_account_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Item' => array(
			'className' => 'Item',
			'joinTable' => 'items_projects',
			'foreignKey' => 'project_id',
			'associationForeignKey' => 'item_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
