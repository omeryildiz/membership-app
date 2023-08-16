<?php
App::uses('AppModel', 'Model');
/**
 * Cash Model
 *
 * @property BankAccount $BankAccount
 * @property CurrencyAccount $CurrencyAccount
 */
class Cash extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'BankAccount' => array(
			'className' => 'BankAccount',
			'joinTable' => 'bank_accounts_cashes',
			'foreignKey' => 'cash_id',
			'associationForeignKey' => 'bank_account_id',
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
		'CurrencyAccount' => array(
			'className' => 'CurrencyAccount',
			'joinTable' => 'currency_accounts_cashes',
			'foreignKey' => 'cash_id',
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
		)
	);

}
