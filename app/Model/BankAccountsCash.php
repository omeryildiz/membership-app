<?php
App::uses('AppModel', 'Model');
/**
 * BankAccountsCash Model
 *
 * @property BankAccount $BankAccount
 * @property Cash $Cash
 */
class BankAccountsCash extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'cash_id' => array(
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
		'BankAccount' => array(
			'className' => 'BankAccount',
			'foreignKey' => 'bank_account_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cash' => array(
			'className' => 'Cash',
			'foreignKey' => 'cash_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
