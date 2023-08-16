<?php
App::uses('AppController', 'Controller');
/**
 * GuaranteeLetters Controller
 *
 * @property GuaranteeLetter $GuaranteeLetter
 */
class GuaranteeLettersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GuaranteeLetter->recursive = 0;
		$this->set('guaranteeLetters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->GuaranteeLetter->id = $id;
		if (!$this->GuaranteeLetter->exists()) {
			throw new NotFoundException(__('Invalid guarantee letter'));
		}
		$this->set('guaranteeLetter', $this->GuaranteeLetter->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GuaranteeLetter->create();
			if ($this->GuaranteeLetter->save($this->request->data)) {
				$this->Session->setFlash(__('The guarantee letter has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guarantee letter could not be saved. Please, try again.'));
			}
		}
		$bankAccounts = $this->GuaranteeLetter->BankAccount->find('list');
		$currencyAccounts = $this->GuaranteeLetter->CurrencyAccount->find('list');
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
		$this->GuaranteeLetter->id = $id;
		if (!$this->GuaranteeLetter->exists()) {
			throw new NotFoundException(__('Invalid guarantee letter'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GuaranteeLetter->save($this->request->data)) {
				$this->Session->setFlash(__('The guarantee letter has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guarantee letter could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->GuaranteeLetter->read(null, $id);
		}
		$bankAccounts = $this->GuaranteeLetter->BankAccount->find('list');
		$currencyAccounts = $this->GuaranteeLetter->CurrencyAccount->find('list');
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
		$this->GuaranteeLetter->id = $id;
		if (!$this->GuaranteeLetter->exists()) {
			throw new NotFoundException(__('Invalid guarantee letter'));
		}
		if ($this->GuaranteeLetter->delete()) {
			$this->Session->setFlash(__('Guarantee letter deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Guarantee letter was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
