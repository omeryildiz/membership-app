<?php
App::uses('AppController', 'Controller');
/**
 * Collaterals Controller
 *
 * @property Collateral $Collateral
 */
class CollateralsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Collateral->recursive = 0;
		$this->set('collaterals', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Collateral->id = $id;
		if (!$this->Collateral->exists()) {
			throw new NotFoundException(__('Invalid collateral'));
		}
		$this->set('collateral', $this->Collateral->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Collateral->create();
			if ($this->Collateral->save($this->request->data)) {
				$this->Session->setFlash(__('The collateral has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The collateral could not be saved. Please, try again.'));
			}
		}
		$currencyAccounts = $this->Collateral->CurrencyAccount->find('list');
		$bankAccounts = $this->Collateral->BankAccount->find('list',array('fields'=>array('BankAccount.bank_name')));
		$this->set(compact('currencyAccounts', 'bankAccounts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Collateral->id = $id;
		if (!$this->Collateral->exists()) {
			throw new NotFoundException(__('Invalid collateral'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Collateral->save($this->request->data)) {
				$this->Session->setFlash(__('The collateral has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The collateral could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Collateral->read(null, $id);
		}
		$currencyAccounts = $this->Collateral->CurrencyAccount->find('list');
		$bankAccounts = $this->Collateral->BankAccount->find('list',array('fields'=>array('BankAccount.bank_name')));
		$this->set(compact('currencyAccounts', 'bankAccounts'));

	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Collateral->id = $id;
		if (!$this->Collateral->exists()) {
			throw new NotFoundException(__('Invalid collateral'));
		}
		if ($this->Collateral->delete()) {
			$this->Session->setFlash(__('Collateral deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Collateral was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
