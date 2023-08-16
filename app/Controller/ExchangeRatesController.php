<?php
App::uses('AppController', 'Controller');
/**
 * ExchangeRates Controller
 *
 * @property ExchangeRate $ExchangeRate
 */
class ExchangeRatesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ExchangeRate->recursive = 0;
		$this->set('exchangeRates', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ExchangeRate->id = $id;
		if (!$this->ExchangeRate->exists()) {
			throw new NotFoundException(__('Invalid exchange rate'));
		}
		$this->set('exchangeRate', $this->ExchangeRate->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExchangeRate->create();
			if ($this->ExchangeRate->save($this->request->data)) {
				$this->Session->setFlash(__('The exchange rate has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exchange rate could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ExchangeRate->id = $id;
		if (!$this->ExchangeRate->exists()) {
			throw new NotFoundException(__('Invalid exchange rate'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ExchangeRate->save($this->request->data)) {
				$this->Session->setFlash(__('The exchange rate has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exchange rate could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ExchangeRate->read(null, $id);
		}
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
		$this->ExchangeRate->id = $id;
		if (!$this->ExchangeRate->exists()) {
			throw new NotFoundException(__('Invalid exchange rate'));
		}
		if ($this->ExchangeRate->delete()) {
			$this->Session->setFlash(__('Exchange rate deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Exchange rate was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
