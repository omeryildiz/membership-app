<?php
App::uses('AppController', 'Controller');
/**
 * CurrencyAccountsProjects Controller
 *
 * @property CurrencyAccountsProject $CurrencyAccountsProject
 */
class CurrencyAccountsProjectsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CurrencyAccountsProject->recursive = 0;
		$this->set('currencyAccountsProjects', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CurrencyAccountsProject->id = $id;
		if (!$this->CurrencyAccountsProject->exists()) {
			throw new NotFoundException(__('Invalid currency accounts project'));
		}
		$this->set('currencyAccountsProject', $this->CurrencyAccountsProject->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CurrencyAccountsProject->create();
			if ($this->CurrencyAccountsProject->save($this->request->data)) {
				$this->Session->setFlash(__('The currency accounts project has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The currency accounts project could not be saved. Please, try again.'));
			}
		}
		$currencyAccounts = $this->CurrencyAccountsProject->CurrencyAccount->find('list');
		$projects = $this->CurrencyAccountsProject->Project->find('list');
		$this->set(compact('currencyAccounts', 'projects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CurrencyAccountsProject->id = $id;
		if (!$this->CurrencyAccountsProject->exists()) {
			throw new NotFoundException(__('Invalid currency accounts project'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CurrencyAccountsProject->save($this->request->data)) {
				$this->Session->setFlash(__('The currency accounts project has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The currency accounts project could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CurrencyAccountsProject->read(null, $id);
		}
		$currencyAccounts = $this->CurrencyAccountsProject->CurrencyAccount->find('list');
		$projects = $this->CurrencyAccountsProject->Project->find('list');
		$this->set(compact('currencyAccounts', 'projects'));
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
		$this->CurrencyAccountsProject->id = $id;
		if (!$this->CurrencyAccountsProject->exists()) {
			throw new NotFoundException(__('Invalid currency accounts project'));
		}
		if ($this->CurrencyAccountsProject->delete()) {
			$this->Session->setFlash(__('Currency accounts project deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Currency accounts project was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
