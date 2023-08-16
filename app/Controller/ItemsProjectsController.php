<?php
App::uses('AppController', 'Controller');
/**
 * ItemsProjects Controller
 *
 * @property ItemsProject $ItemsProject
 */
class ItemsProjectsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ItemsProject->recursive = 0;
		$this->set('itemsProjects', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ItemsProject->id = $id;
		if (!$this->ItemsProject->exists()) {
			throw new NotFoundException(__('Invalid items project'));
		}
		$this->set('itemsProject', $this->ItemsProject->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemsProject->create();
			if ($this->ItemsProject->save($this->request->data)) {
				$this->Session->setFlash(__('The items project has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items project could not be saved. Please, try again.'));
			}
		}
		$items = $this->ItemsProject->Item->find('list');
		$projects = $this->ItemsProject->Project->find('list');
		$this->set(compact('items', 'projects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ItemsProject->id = $id;
		if (!$this->ItemsProject->exists()) {
			throw new NotFoundException(__('Invalid items project'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ItemsProject->save($this->request->data)) {
				$this->Session->setFlash(__('The items project has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items project could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ItemsProject->read(null, $id);
		}
		$items = $this->ItemsProject->Item->find('list');
		$projects = $this->ItemsProject->Project->find('list');
		$this->set(compact('items', 'projects'));
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
		$this->ItemsProject->id = $id;
		if (!$this->ItemsProject->exists()) {
			throw new NotFoundException(__('Invalid items project'));
		}
		if ($this->ItemsProject->delete()) {
			$this->Session->setFlash(__('Items project deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Items project was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
