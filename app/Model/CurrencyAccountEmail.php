<?php
App::uses('AppModel', 'Model');
/**
 * CurrencyAccountEmail Model
 *
 * @property CurrencyAccount $CurrencyAccount
 */
class CurrencyAccountEmail extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'currency_account_id' => array(
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
		)
	);
}
