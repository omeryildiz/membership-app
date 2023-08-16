<?php
App::uses('AppController', 'Controller');
/**
 * Responsibles Controller
 *
 * @property Responsible $Responsible
 */
class ResponsiblesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Responsible->recursive = 0;
		$this->set('responsibles', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Responsible->id = $id;
		if (!$this->Responsible->exists()) {
			throw new NotFoundException(__('Invalid responsible'));
		}
		$this->set('responsible', $this->Responsible->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Responsible->create();
			if ($this->Responsible->save($this->request->data)) {
				$this->Session->setFlash(__('The responsible has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The responsible could not be saved. Please, try again.'));
			}
		}
		$currencyAccounts = $this->Responsible->CurrencyAccount->find('list');
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
		$this->Responsible->id = $id;
		if (!$this->Responsible->exists()) {
			throw new NotFoundException(__('Invalid responsible'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Responsible->save($this->request->data)) {
				$this->Session->setFlash(__('The responsible has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The responsible could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Responsible->read(null, $id);
		}
		$currencyAccounts = $this->Responsible->CurrencyAccount->find('list');
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
		$this->Responsible->id = $id;
		if (!$this->Responsible->exists()) {
			throw new NotFoundException(__('Invalid responsible'));
		}
		if ($this->Responsible->delete()) {
			$this->Session->setFlash(__('Responsible deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Responsible was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
