<?php
App::uses('AppController', 'Controller');
/**
 * BankAccountables Controller
 *
 * @property BankAccountable $BankAccountable
 */
class BankAccountablesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BankAccountable->recursive = 0;
		$this->set('bankAccountables', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BankAccountable->id = $id;
		if (!$this->BankAccountable->exists()) {
			throw new NotFoundException(__('Invalid bank accountable'));
		}
		$this->set('bankAccountable', $this->BankAccountable->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BankAccountable->create();
			if ($this->BankAccountable->save($this->request->data)) {
				$this->Session->setFlash(__('The bank accountable has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bank accountable could not be saved. Please, try again.'));
			}
		}
		$bankAccounts = $this->BankAccountable->BankAccount->find('list');
		$this->set(compact('bankAccounts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->BankAccountable->id = $id;
		if (!$this->BankAccountable->exists()) {
			throw new NotFoundException(__('Invalid bank accountable'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BankAccountable->save($this->request->data)) {
				$this->Session->setFlash(__('The bank accountable has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bank accountable could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BankAccountable->read(null, $id);
		}
		$bankAccounts = $this->BankAccountable->BankAccount->find('list');
		$this->set(compact('bankAccounts'));
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
		$this->BankAccountable->id = $id;
		if (!$this->BankAccountable->exists()) {
			throw new NotFoundException(__('Invalid bank accountable'));
		}
		if ($this->BankAccountable->delete()) {
			$this->Session->setFlash(__('Bank accountable deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bank accountable was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
