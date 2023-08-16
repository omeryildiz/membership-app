<?php
App::uses('AppController', 'Controller');
/**
 * CurrencyAccountContactNumbers Controller
 *
 * @property CurrencyAccountContactNumber $CurrencyAccountContactNumber
 */
class CurrencyAccountContactNumbersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CurrencyAccountContactNumber->recursive = 0;
		$this->set('currencyAccountContactNumbers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CurrencyAccountContactNumber->id = $id;
		if (!$this->CurrencyAccountContactNumber->exists()) {
			throw new NotFoundException(__('Invalid currency account contact number'));
		}
		$this->set('currencyAccountContactNumber', $this->CurrencyAccountContactNumber->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CurrencyAccountContactNumber->create();
			if ($this->CurrencyAccountContactNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The currency account contact number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The currency account contact number could not be saved. Please, try again.'));
			}
		}
		$currencyAccounts = $this->CurrencyAccountContactNumber->CurrencyAccount->find('list');
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
		$this->CurrencyAccountContactNumber->id = $id;
		if (!$this->CurrencyAccountContactNumber->exists()) {
			throw new NotFoundException(__('Invalid currency account contact number'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CurrencyAccountContactNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The currency account contact number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The currency account contact number could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CurrencyAccountContactNumber->read(null, $id);
		}
		$currencyAccounts = $this->CurrencyAccountContactNumber->CurrencyAccount->find('list');
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
		$this->CurrencyAccountContactNumber->id = $id;
		if (!$this->CurrencyAccountContactNumber->exists()) {
			throw new NotFoundException(__('Invalid currency account contact number'));
		}
		if ($this->CurrencyAccountContactNumber->delete()) {
			$this->Session->setFlash(__('Currency account contact number deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Currency account contact number was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
