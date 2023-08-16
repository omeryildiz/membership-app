<?php
App::uses('AppController', 'Controller');
/**
 * BankAccounts Controller
 *
 * @property BankAccount $BankAccount
 */
class BankAccountsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BankAccount->recursive = 0;
		$this->set('bankAccounts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BankAccount->id = $id;
		if (!$this->BankAccount->exists()) {
			throw new NotFoundException(__('Invalid bank account'));
		}
		$this->set('bankAccount', $this->BankAccount->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BankAccount->create();
			if ($this->BankAccount->save($this->request->data)) {
				$this->Session->setFlash(__('The bank account has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bank account could not be saved. Please, try again.'));
			}
		}
		$cashes = $this->BankAccount->Cash->find('list');
		$this->set(compact('cashes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->BankAccount->id = $id;
		if (!$this->BankAccount->exists()) {
			throw new NotFoundException(__('Invalid bank account'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BankAccount->save($this->request->data)) {
				$this->Session->setFlash(__('The bank account has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bank account could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BankAccount->read(null, $id);
		}
		$cashes = $this->BankAccount->Cash->find('list');
		$this->set(compact('cashes'));
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
		$this->BankAccount->id = $id;
		if (!$this->BankAccount->exists()) {
			throw new NotFoundException(__('Invalid bank account'));
		}
		if ($this->BankAccount->delete()) {
			$this->Session->setFlash(__('Bank account deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bank account was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
