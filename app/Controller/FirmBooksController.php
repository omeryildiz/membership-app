<?php
App::uses('AppController', 'Controller');
/**
 * FirmBooks Controller
 *
 * @property FirmBook $FirmBook
 */
class FirmBooksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FirmBook->recursive = 0;
		$this->set('firmBooks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FirmBook->id = $id;
		if (!$this->FirmBook->exists()) {
			throw new NotFoundException(__('Invalid firm book'));
		}
		$this->set('firmBook', $this->FirmBook->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FirmBook->create();
			if ($this->FirmBook->save($this->request->data)) {
				$this->Session->setFlash(__('The firm book has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The firm book could not be saved. Please, try again.'));
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
		$this->FirmBook->id = $id;
		if (!$this->FirmBook->exists()) {
			throw new NotFoundException(__('Invalid firm book'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FirmBook->save($this->request->data)) {
				$this->Session->setFlash(__('The firm book has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The firm book could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FirmBook->read(null, $id);
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
		$this->FirmBook->id = $id;
		if (!$this->FirmBook->exists()) {
			throw new NotFoundException(__('Invalid firm book'));
		}
		if ($this->FirmBook->delete()) {
			$this->Session->setFlash(__('Firm book deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Firm book was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
