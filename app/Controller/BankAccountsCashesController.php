<?php
App::uses('AppController', 'Controller');
/**
 * BankAccountsCashes Controller
 *
 * @property BankAccountsCash $BankAccountsCash
 */
class BankAccountsCashesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BankAccountsCash->recursive = 0;
		$this->set('bankAccountsCashes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BankAccountsCash->id = $id;
		if (!$this->BankAccountsCash->exists()) {
			throw new NotFoundException(__('Invalid bank accounts cash'));
		}
		$this->set('bankAccountsCash', $this->BankAccountsCash->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BankAccountsCash->create();
			if ($this->BankAccountsCash->save($this->request->data)) {
				$this->Session->setFlash(__('The bank accounts cash has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bank accounts cash could not be saved. Please, try again.'));
			}
		}
		$bankAccounts = $this->BankAccountsCash->BankAccount->find('list');
		$cashes = $this->BankAccountsCash->Cash->find('list');
		$this->set(compact('bankAccounts', 'cashes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->BankAccountsCash->id = $id;
		if (!$this->BankAccountsCash->exists()) {
			throw new NotFoundException(__('Invalid bank accounts cash'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BankAccountsCash->save($this->request->data)) {
				$this->Session->setFlash(__('The bank accounts cash has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bank accounts cash could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BankAccountsCash->read(null, $id);
		}
		$bankAccounts = $this->BankAccountsCash->BankAccount->find('list');
		$cashes = $this->BankAccountsCash->Cash->find('list');
		$this->set(compact('bankAccounts', 'cashes'));
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
		$this->BankAccountsCash->id = $id;
		if (!$this->BankAccountsCash->exists()) {
			throw new NotFoundException(__('Invalid bank accounts cash'));
		}
		if ($this->BankAccountsCash->delete()) {
			$this->Session->setFlash(__('Bank accounts cash deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bank accounts cash was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
