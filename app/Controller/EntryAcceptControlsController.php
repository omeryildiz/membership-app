<?php
App::uses('AppController', 'Controller');
/**
 * EntryAcceptControls Controller
 *
 * @property EntryAcceptControl $EntryAcceptControl
 */
class EntryAcceptControlsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EntryAcceptControl->recursive = 0;
		$this->set('entryAcceptControls', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EntryAcceptControl->id = $id;
		if (!$this->EntryAcceptControl->exists()) {
			throw new NotFoundException(__('Invalid entry accept control'));
		}
		$this->set('entryAcceptControl', $this->EntryAcceptControl->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EntryAcceptControl->create();
			if ($this->EntryAcceptControl->save($this->request->data)) {
				$this->Session->setFlash(__('The entry accept control has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entry accept control could not be saved. Please, try again.'));
			}
		}
		$projects = $this->EntryAcceptControl->Project->find('list');
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
		$this->EntryAcceptControl->id = $id;
		if (!$this->EntryAcceptControl->exists()) {
			throw new NotFoundException(__('Invalid entry accept control'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EntryAcceptControl->save($this->request->data)) {
				$this->Session->setFlash(__('The entry accept control has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entry accept control could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EntryAcceptControl->read(null, $id);
		}
		$projects = $this->EntryAcceptControl->Project->find('list');
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
		$this->EntryAcceptControl->id = $id;
		if (!$this->EntryAcceptControl->exists()) {
			throw new NotFoundException(__('Invalid entry accept control'));
		}
		if ($this->EntryAcceptControl->delete()) {
			$this->Session->setFlash(__('Entry accept control deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Entry accept control was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
