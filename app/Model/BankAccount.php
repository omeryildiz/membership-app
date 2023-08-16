<?php
App::uses('AppModel', 'Model');
/**
 * BankAccount Model
 *
 * @property BankAccountable $BankAccountable
 * @property Collateral $Collateral
 * @property CreditLimit $CreditLimit
 * @property CurrencyAccountsCash $CurrencyAccountsCash
 * @property GuaranteeLetter $GuaranteeLetter
 * @property UsedCredit $UsedCredit
 * @property Cash $Cash
 */
class BankAccount extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'BankAccountable' => array(
			'className' => 'BankAccountable',
			'foreignKey' => 'bank_account_id',
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
		'Collateral' => array(
			'className' => 'Collateral',
			'foreignKey' => 'bank_account_id',
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
		'CreditLimit' => array(
			'className' => 'CreditLimit',
			'foreignKey' => 'bank_account_id',
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
		'CurrencyAccountsCash' => array(
			'className' => 'CurrencyAccountsCash',
			'foreignKey' => 'bank_account_id',
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
		'GuaranteeLetter' => array(
			'className' => 'GuaranteeLetter',
			'foreignKey' => 'bank_account_id',
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
		'UsedCredit' => array(
			'className' => 'UsedCredit',
			'foreignKey' => 'bank_account_id',
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
		'Cash' => array(
			'className' => 'Cash',
			'joinTable' => 'bank_accounts_cashes',
			'foreignKey' => 'bank_account_id',
			'associationForeignKey' => 'cash_id',
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
