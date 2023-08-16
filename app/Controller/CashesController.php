<?php
App::uses('AppController', 'Controller');
/**
 * Cashes Controller
 *
 * @property Cash $Cash
 */
class CashesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cash->recursive = 0;
		$this->set('cashes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Cash->id = $id;
		if (!$this->Cash->exists()) {
			throw new NotFoundException(__('Invalid cash'));
		}
		$this->set('cash', $this->Cash->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cash->create();
			if ($this->Cash->save($this->request->data)) {
				$this->Session->setFlash(__('The cash has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cash could not be saved. Please, try again.'));
			}
		}
		$bankAccounts = $this->Cash->BankAccount->find('list');
		$currencyAccounts = $this->Cash->CurrencyAccount->find('list');
		$this->set(compact('bankAccounts', 'currencyAccounts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Cash->id = $id;
		if (!$this->Cash->exists()) {
			throw new NotFoundException(__('Invalid cash'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cash->save($this->request->data)) {
				$this->Session->setFlash(__('The cash has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cash could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Cash->read(null, $id);
		}
		$bankAccounts = $this->Cash->BankAccount->find('list');
		$currencyAccounts = $this->Cash->CurrencyAccount->find('list');
		$this->set(compact('bankAccounts', 'currencyAccounts'));
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
		$this->Cash->id = $id;
		if (!$this->Cash->exists()) {
			throw new NotFoundException(__('Invalid cash'));
		}
		if ($this->Cash->delete()) {
			$this->Session->setFlash(__('Cash deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cash was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
