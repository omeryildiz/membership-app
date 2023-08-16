<?php
App::uses('AppController', 'Controller');
/**
 * UsedCredits Controller
 *
 * @property UsedCredit $UsedCredit
 */
class UsedCreditsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UsedCredit->recursive = 0;
		$this->set('usedCredits', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->UsedCredit->id = $id;
		if (!$this->UsedCredit->exists()) {
			throw new NotFoundException(__('Invalid used credit'));
		}
		$this->set('usedCredit', $this->UsedCredit->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsedCredit->create();
			if ($this->UsedCredit->save($this->request->data)) {
				$this->Session->setFlash(__('The used credit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The used credit could not be saved. Please, try again.'));
			}
		}
		$bankAccounts = $this->UsedCredit->BankAccount->find('list');
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
		$this->UsedCredit->id = $id;
		if (!$this->UsedCredit->exists()) {
			throw new NotFoundException(__('Invalid used credit'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UsedCredit->save($this->request->data)) {
				$this->Session->setFlash(__('The used credit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The used credit could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->UsedCredit->read(null, $id);
		}
		$bankAccounts = $this->UsedCredit->BankAccount->find('list');
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
		$this->UsedCredit->id = $id;
		if (!$this->UsedCredit->exists()) {
			throw new NotFoundException(__('Invalid used credit'));
		}
		if ($this->UsedCredit->delete()) {
			$this->Session->setFlash(__('Used credit deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Used credit was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
