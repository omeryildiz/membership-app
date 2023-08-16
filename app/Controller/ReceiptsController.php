<?php
App::uses('AppController', 'Controller');
/**
 * Receipts Controller
 *
 * @property Receipt $Receipt
 */
class ReceiptsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Receipt->recursive = 0;
		$this->set('receipts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Receipt->id = $id;
		if (!$this->Receipt->exists()) {
			throw new NotFoundException(__('Invalid receipt'));
		}
		$this->set('receipt', $this->Receipt->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Receipt->create();
			if ($this->Receipt->save($this->request->data)) {
				$this->Session->setFlash(__('The receipt has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The receipt could not be saved. Please, try again.'));
			}
		}
		$currencyAccounts = $this->Receipt->CurrencyAccount->find('list');
		$this->set(compact('currencyAccounts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Receipt->id = $id;
		if (!$this->Receipt->exists()) {
			throw new NotFoundException(__('Invalid receipt'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Receipt->save($this->request->data)) {
				$this->Session->setFlash(__('The receipt has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The receipt could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Receipt->read(null, $id);
		}
		$currencyAccounts = $this->Receipt->CurrencyAccount->find('list');
		$this->set(compact('currencyAccounts'));
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
		$this->Receipt->id = $id;
		if (!$this->Receipt->exists()) {
			throw new NotFoundException(__('Invalid receipt'));
		}
		if ($this->Receipt->delete()) {
			$this->Session->setFlash(__('Receipt deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Receipt was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
