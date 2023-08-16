<?php
App::uses('AppController', 'Controller');
/**
 * CurrencyAccountAddresses Controller
 *
 * @property CurrencyAccountAddress $CurrencyAccountAddress
 */
class CurrencyAccountAddressesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CurrencyAccountAddress->recursive = 0;
		$this->set('currencyAccountAddresses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CurrencyAccountAddress->id = $id;
		if (!$this->CurrencyAccountAddress->exists()) {
			throw new NotFoundException(__('Invalid currency account address'));
		}
		$this->set('currencyAccountAddress', $this->CurrencyAccountAddress->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CurrencyAccountAddress->create();
			if ($this->CurrencyAccountAddress->save($this->request->data)) {
				$this->Session->setFlash(__('The currency account address has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The currency account address could not be saved. Please, try again.'));
			}
		}
		$currencyAccounts = $this->CurrencyAccountAddress->CurrencyAccount->find('list');
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
		$this->CurrencyAccountAddress->id = $id;
		if (!$this->CurrencyAccountAddress->exists()) {
			throw new NotFoundException(__('Invalid currency account address'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CurrencyAccountAddress->save($this->request->data)) {
				$this->Session->setFlash(__('The currency account address has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The currency account address could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CurrencyAccountAddress->read(null, $id);
		}
		$currencyAccounts = $this->CurrencyAccountAddress->CurrencyAccount->find('list');
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
		$this->CurrencyAccountAddress->id = $id;
		if (!$this->CurrencyAccountAddress->exists()) {
			throw new NotFoundException(__('Invalid currency account address'));
		}
		if ($this->CurrencyAccountAddress->delete()) {
			$this->Session->setFlash(__('Currency account address deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Currency account address was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
