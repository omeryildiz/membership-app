<?php
App::uses('AppController', 'Controller');
/**
 * ConsignmentDatas Controller
 *
 * @property ConsignmentData $ConsignmentData
 */
class ConsignmentDatasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ConsignmentData->recursive = 0;
		$this->set('consignmentDatas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ConsignmentData->id = $id;
		if (!$this->ConsignmentData->exists()) {
			throw new NotFoundException(__('Invalid consignment data'));
		}
		$this->set('consignmentData', $this->ConsignmentData->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ConsignmentData->create();
			if ($this->ConsignmentData->save($this->request->data)) {
				$this->Session->setFlash(__('The consignment data has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consignment data could not be saved. Please, try again.'));
			}
		}
		$entryAcceptControls = $this->ConsignmentData->EntryAcceptControl->find('list');
		$this->set(compact('entryAcceptControls'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ConsignmentData->id = $id;
		if (!$this->ConsignmentData->exists()) {
			throw new NotFoundException(__('Invalid consignment data'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ConsignmentData->save($this->request->data)) {
				$this->Session->setFlash(__('The consignment data has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consignment data could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ConsignmentData->read(null, $id);
		}
		$entryAcceptControls = $this->ConsignmentData->EntryAcceptControl->find('list');
		$this->set(compact('entryAcceptControls'));
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
		$this->ConsignmentData->id = $id;
		if (!$this->ConsignmentData->exists()) {
			throw new NotFoundException(__('Invalid consignment data'));
		}
		if ($this->ConsignmentData->delete()) {
			$this->Session->setFlash(__('Consignment data deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Consignment data was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
