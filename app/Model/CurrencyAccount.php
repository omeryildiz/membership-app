<?php
App::uses('AppModel', 'Model');
/**
 * CurrencyAccount Model
 *
 * @property Collateral $Collateral
 * @property CurrencyAccountAddress $CurrencyAccountAddress
 * @property CurrencyAccountContactNumber $CurrencyAccountContactNumber
 * @property CurrencyAccountEmail $CurrencyAccountEmail
 * @property GuaranteeLetter $GuaranteeLetter
 * @property Invoice $Invoice
 * @property Order $Order
 * @property Receipt $Receipt
 * @property Responsible $Responsible
 * @property Cash $Cash
 * @property Project $Project
 */
class CurrencyAccount extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Collateral' => array(
			'className' => 'Collateral',
			'foreignKey' => 'currency_account_id',
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
		'CurrencyAccountAddress' => array(
			'className' => 'CurrencyAccountAddress',
			'foreignKey' => 'currency_account_id',
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
		'CurrencyAccountContactNumber' => array(
			'className' => 'CurrencyAccountContactNumber',
			'foreignKey' => 'currency_account_id',
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
		'CurrencyAccountEmail' => array(
			'className' => 'CurrencyAccountEmail',
			'foreignKey' => 'currency_account_id',
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
			'foreignKey' => 'currency_account_id',
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
		'Invoice' => array(
			'className' => 'Invoice',
			'foreignKey' => 'currency_account_id',
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
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'currency_account_id',
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
		'Receipt' => array(
			'className' => 'Receipt',
			'foreignKey' => 'currency_account_id',
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
		'Responsible' => array(
			'className' => 'Responsible',
			'foreignKey' => 'currency_account_id',
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
			'joinTable' => 'currency_accounts_cashes',
			'foreignKey' => 'currency_account_id',
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
		),
		'Project' => array(
			'className' => 'Project',
			'joinTable' => 'currency_accounts_projects',
			'foreignKey' => 'currency_account_id',
			'associationForeignKey' => 'project_id',
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
