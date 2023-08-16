<?php
App::uses('AppController', 'Controller');
/**
 * CurrencyAccountsCashes Controller
 *
 * @property CurrencyAccountsCash $CurrencyAccountsCash
 */
class CurrencyAccountsCashesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CurrencyAccountsCash->recursive = 0;
		$this->set('currencyAccountsCashes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CurrencyAccountsCash->id = $id;
		if (!$this->CurrencyAccountsCash->exists()) {
			throw new NotFoundException(__('Invalid currency accounts cash'));
		}
		$this->set('currencyAccountsCash', $this->CurrencyAccountsCash->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CurrencyAccountsCash->create();
			if ($this->CurrencyAccountsCash->save($this->request->data)) {
				$this->Session->setFlash(__('The currency accounts cash has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The currency accounts cash could not be saved. Please, try again.'));
			}
		}
		$bankAccounts = $this->CurrencyAccountsCash->BankAccount->find('list');
		$currencyAccounts = $this->CurrencyAccountsCash->CurrencyAccount->find('list');
		$cashes = $this->CurrencyAccountsCash->Cash->find('list');
		$this->set(compact('bankAccounts', 'currencyAccounts', 'cashes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CurrencyAccountsCash->id = $id;
		if (!$this->CurrencyAccountsCash->exists()) {
			throw new NotFoundException(__('Invalid currency accounts cash'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CurrencyAccountsCash->save($this->request->data)) {
				$this->Session->setFlash(__('The currency accounts cash has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The currency accounts cash could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CurrencyAccountsCash->read(null, $id);
		}
		$bankAccounts = $this->CurrencyAccountsCash->BankAccount->find('list');
		$currencyAccounts = $this->CurrencyAccountsCash->CurrencyAccount->find('list');
		$cashes = $this->CurrencyAccountsCash->Cash->find('list');
		$this->set(compact('bankAccounts', 'currencyAccounts', 'cashes'));
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
		$this->CurrencyAccountsCash->id = $id;
		if (!$this->CurrencyAccountsCash->exists()) {
			throw new NotFoundException(__('Invalid currency accounts cash'));
		}
		if ($this->CurrencyAccountsCash->delete()) {
			$this->Session->setFlash(__('Currency accounts cash deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Currency accounts cash was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
