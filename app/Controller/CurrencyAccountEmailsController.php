<?php
App::uses('AppController', 'Controller');
/**
 * CurrencyAccountEmails Controller
 *
 * @property CurrencyAccountEmail $CurrencyAccountEmail
 */
class CurrencyAccountEmailsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CurrencyAccountEmail->recursive = 0;
		$this->set('currencyAccountEmails', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CurrencyAccountEmail->id = $id;
		if (!$this->CurrencyAccountEmail->exists()) {
			throw new NotFoundException(__('Invalid currency account email'));
		}
		$this->set('currencyAccountEmail', $this->CurrencyAccountEmail->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CurrencyAccountEmail->create();
			if ($this->CurrencyAccountEmail->save($this->request->data)) {
				$this->Session->setFlash(__('The currency account email has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The currency account email could not be saved. Please, try again.'));
			}
		}
		$currencyAccounts = $this->CurrencyAccountEmail->CurrencyAccount->find('list');
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
		$this->CurrencyAccountEmail->id = $id;
		if (!$this->CurrencyAccountEmail->exists()) {
			throw new NotFoundException(__('Invalid currency account email'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CurrencyAccountEmail->save($this->request->data)) {
				$this->Session->setFlash(__('The currency account email has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The currency account email could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CurrencyAccountEmail->read(null, $id);
		}
		$currencyAccounts = $this->CurrencyAccountEmail->CurrencyAccount->find('list');
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
		$this->CurrencyAccountEmail->id = $id;
		if (!$this->CurrencyAccountEmail->exists()) {
			throw new NotFoundException(__('Invalid currency account email'));
		}
		if ($this->CurrencyAccountEmail->delete()) {
			$this->Session->setFlash(__('Currency account email deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Currency account email was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
