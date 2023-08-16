<?php
App::uses('AppController', 'Controller');
/**
 * CurrencyAccounts Controller
 *
 * @property CurrencyAccount $CurrencyAccount
 */
class CurrencyAccountsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CurrencyAccount->recursive = 0;
		$this->set('currencyAccounts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CurrencyAccount->id = $id;
		if (!$this->CurrencyAccount->exists()) {
			throw new NotFoundException(__('Invalid currency account'));
		}
		$this->set('currencyAccount', $this->CurrencyAccount->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CurrencyAccount->create();
			if ($this->CurrencyAccount->save($this->request->data)) {
				$this->Session->setFlash(__('The currency account has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The currency account could not be saved. Please, try again.'));
			}
		}
		
		$projects = $this->CurrencyAccount->Project->find('list', array(
        'fields' => array('Project.project_name')));
		$this->set(compact('projects'));
	
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CurrencyAccount->id = $id;
		if (!$this->CurrencyAccount->exists()) {
			throw new NotFoundException(__('Invalid currency account'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CurrencyAccount->save($this->request->data)) {
				$this->Session->setFlash(__('The currency account has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The currency account could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CurrencyAccount->read(null, $id);
		}
		
		$projects = $this->CurrencyAccount->Project->find('list', array(
        'fields' => array('Project.project_name')));
		$this->set(compact('projects'));
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
		$this->CurrencyAccount->id = $id;
		if (!$this->CurrencyAccount->exists()) {
			throw new NotFoundException(__('Invalid currency account'));
		}
		if ($this->CurrencyAccount->delete()) {
			$this->Session->setFlash(__('Currency account deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Currency account was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
