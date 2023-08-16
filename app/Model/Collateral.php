<?php
App::uses('AppModel', 'Model');
/**
 * Collateral Model
 *
 * @property CurrencyAccount $CurrencyAccount
 * @property BankAccount $BankAccount
 */
class Collateral extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'collateral_type' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tracking_number' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'collateral_number' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'bank_account_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CurrencyAccount' => array(
			'className' => 'CurrencyAccount',
			'foreignKey' => 'currency_account_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BankAccount' => array(
			'className' => 'BankAccount',
			'foreignKey' => 'bank_account_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
