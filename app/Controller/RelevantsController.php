<?php
App::uses('AppController', 'Controller');
/**
 * Relevants Controller
 *
 * @property Relevant $Relevant
 */
class RelevantsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Relevant->recursive = 0;
		$this->set('relevants', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Relevant->id = $id;
		if (!$this->Relevant->exists()) {
			throw new NotFoundException(__('Invalid relevant'));
		}
		$this->set('relevant', $this->Relevant->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Relevant->create();
			if ($this->Relevant->save($this->request->data)) {
				$this->Session->setFlash(__('The relevant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relevant could not be saved. Please, try again.'));
			}
		}
		$stocks = $this->Relevant->Stock->find('list');
		$invoices = $this->Relevant->Invoice->find('list');
		$this->set(compact('stocks', 'invoices'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Relevant->id = $id;
		if (!$this->Relevant->exists()) {
			throw new NotFoundException(__('Invalid relevant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Relevant->save($this->request->data)) {
				$this->Session->setFlash(__('The relevant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relevant could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Relevant->read(null, $id);
		}
		$stocks = $this->Relevant->Stock->find('list');
		$invoices = $this->Relevant->Invoice->find('list');
		$this->set(compact('stocks', 'invoices'));
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
		$this->Relevant->id = $id;
		if (!$this->Relevant->exists()) {
			throw new NotFoundException(__('Invalid relevant'));
		}
		if ($this->Relevant->delete()) {
			$this->Session->setFlash(__('Relevant deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Relevant was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
